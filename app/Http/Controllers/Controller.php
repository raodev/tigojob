<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use  Jenssegers\Agent\Agent;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $view_data = [];
    public $response = [
        'message' => '',
        'success' => true,
        'errors' => []
    ];
    protected $device_info;
    public function __construct( Request $request )
    {
        $admin_prefix = config('app.admin_prefix');
        $this->view_data['admin_prefix'] = $admin_prefix ? $admin_prefix : '';
        $this->view_data['ajax_view'] = $request->ajax() ? '-ajax' : '';
        $this->view_data['ajax'] = $request->ajax();
        $agent = new Agent();
        $browser = $agent->browser();
        $platform = $agent->platform();
        $device_info = [
            'is_mobile' => $agent->isMobile(),
            'is_robot' => $agent->isRobot(),
            'robot_name' => $agent->robot(),
            'device' => $agent->device(),
            'language' => $agent->languages(),
            'platform' => $platform,
            'platform_version' => $agent->version($platform),
            'browser' => $browser,
            'browser_version' => $agent->version($browser),
        ];
        $this->device_info = $device_info;
    }
    public function response( $data = null ){
        return response()->json( $data ? $data : $this->response );
    }
}
