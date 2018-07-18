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
use View;
class ViewController extends Controller
{
   public function ajaxView( Request $request ){
       if( ! $request->ajax() ){
           return abort('404');
       }
       if( ! $request->view_name ){
           $request->view_name = 'home';
       }

       $view = 'front.content.' . $request->view_name;
       if( View::exists( $view ) ){
           return view($view, $this->view_data);
       }
       return response()->json(null, 404);
   }


}