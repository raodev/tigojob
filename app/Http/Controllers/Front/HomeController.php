<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Libs\Helper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function switcher( Request $request){
        if( ! $request->alias ){
            return $this->homePage( $request );
        }
        $request_method = strtolower($request->getMethod());
        $is_ajax = $request->ajax();
        $alias_method =  Helper::convertObjectName( $request->alias );
        $client_method = $request_method . $alias_method;
        $any_method = 'any' . $alias_method;
        $ajax_method = 'ajax' . $alias_method;
        if( method_exists( $this, $client_method ) ){
            return $this->{ $client_method }();
        }else{
            if( $is_ajax && method_exists( $this, $ajax_method ) ){
                return $this->{$ajax_method}();
            }
            if( method_exists( $this, $any_method ) ){
                return $this->{$any_method}();
            }
        }
        return $this->_404( $request, $is_ajax );

    }
    protected function _404( Request $request, $is_ajax = false ){
        if( $is_ajax ){
            return response()->json(null, 404);
        }
        return abort(404);
    }

    protected function homePage(  Request $request ){
        return view('front.content.home', $this->view_data);
    }

    /**
     * Render front end login page
     * @author Then Thach
     * @return view
     */
    protected function getLogin( ){
        return view('front.content.login', $this->view_data);
    }
    protected function getNetwork( ){
        return view('front.content.network', $this->view_data);
    }
    protected function getContact( ){
        return view('front.content.contact', $this->view_data);
    }
    protected function getAboutUs( ){
        return view('front.content.about-us', $this->view_data);
    }
    protected function getJobs( ){
        return view('front.content.post-job', $this->view_data);
    }
    public function getPostJob(){
        $this->view_data['title'] = __('Post new job');
        return view('front.content.post-job', $this->view_data);
    }

    protected function getRegister( ){
        return view('front.register');
    }


}