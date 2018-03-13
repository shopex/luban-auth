<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Shopex\LubanAuth\Traits\AuthenticatesUsers;
// use Shopex\Luban\Facades\Luban;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sso_app_id = config("auth.sso.app_id");
        $this->sso_app_secret = config("auth.sso.app_secret");
        $this->sso_url = config("auth.sso.url");

        $this->middleware('guest')->except('logout');
    }
    private function load_config(){
        $this->sso_app_id = config("auth.sso.app_id");
        $this->sso_app_secret = config("auth.sso.app_secret");
        $this->sso_url = config("auth.sso.url");
    }
}
