<?php
namespace App\Http\Controllers\API;
use App\Libs\Helper;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use JWTAuth;
use Validator;
use Auth;
class AuthController extends Controller
{
    use AuthenticatesUsers;
    private $append_key = 'Bearerey';
    /**
     * API Login, on success return JWT Auth token
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];
        $validator = Validator::make($credentials, $rules);
        if($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->messages()
            ]);
        }
        $user = null;
        try {
            $token = JWTAuth::attempt($credentials);
            if (! $token ) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'We can`t find an account with this credentials.'
                ], 401);
            }
        } catch (JWTException $e) {
            // Something went wrong with JWT Auth.
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to login, please try again.'
            ], 500);
        }
        $user = User::where('email', $credentials['email'])
            ->first();
        unset( $user['_id'] );
        return response()->json([
            'success' => true,
            'data'=> [
                'token' => $token,
                'info' => $user,
            ]
        ]);
    }
    /**
     * Logout
     * Invalidate the token. User have to relogin to get a new token.
     * @param Request $request 'header'
     */
    public function logout(Request $request)
    {
        try {
            JWTAuth::invalidate();
            return response()->json([
                'success' => true,
                'message'=> "User successfully logged out."
            ]);
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json([
                'success' => false,
                'message' => 'Failed to logout, please try again.'
            ], 500);
        }
    }

    public function postAuth()
    {
        try {
            $user = JWTAuth::toUser();
        } catch (JWTException $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return response()->json(
                    [
                        'error_code' => 'token_expired',
                        'success' => false
                    ]);
            } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return response()->json([
                    'error_code' => 'token_invalid',
                    'success' => false
                ]);
            } else {
                return response()->json(['error' => 'Token is required']);
            }
        }
        unset($user['_id']);
        $this->response['data'] = $user;
        return $this->response();
    }


}