<?php

namespace App\Models;

use Hash;
use Validator;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Tymon\JWTAuth\Contracts\JWTSubject as JWTSubject;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends TigoModel implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract,
    JWTSubject
{
    use Authenticatable, Authorizable, CanResetPassword, Notifiable;
    protected $collection = 'users';
    protected $prefix = 'U';
    protected $alias_type = 'user';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'type_account',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $appends = [
        'full_name'
    ];
    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function getFullNameAttribute(){
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * @param array $data
     * @return array
     */
    public static function add($data = [] ){
        $res = static::$res;
        $rules = [
            'email' => 'required',
            'password' => 'required',
            'type_account' => 'required'
        ];
        $messages = [
            'email.required' => __('Please provide an valid email address'),
            'password.required' => __('Please provide an valid password'),
            'type_account.required' => __('Please provide an valid type account'),
        ];
        $validation = Validator::make($data, $rules, $messages);
        if ($validation->fails()) {
            $error = $validation->messages()->getMessages();
            $res['success'] = false;
            $res['errors'] = $error;
            $res['message'] = array_values($error)[0][0];
            return $res;
        }
        $data['password'] = Hash::make( $data['password'] );
        return self::create( $data );
    }
}
