<?php
namespace App\Http\Controllers\API;
use App\Libs\Helper;
use App\Models\City;
use App\Models\Country;
use App\Models\Industry;
use App\Models\JobLevel;
use App\Models\JobType;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use JWTAuth;
use Validator;
use Auth;
class ResourceController extends Controller
{
    public function postResources(Request $request){
        $action = isset( $request->action ) ? $request->action : null;
        if( ! $action ){
            return response()->json(null, 404);
        }
        $method = 'resource' . Helper::convertObjectName($action);
        if( method_exists( $this, $method ) ){
            return $this->{ $method }( $request );
        }
        return response()->json(null, 404);
    }

    private function resourcePostJob(){
        $this->response['data']['job_types'] = JobType::all();
        $this->response['data']['industries'] = Industry::all();
        $this->response['data']['cities'] = City::all();
        $this->response['data']['countries'] = Country::all();
        $this->response['data']['job_levels'] = JobLevel::all();
        return $this->response();
    }

}