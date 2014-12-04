<?php namespace Kash\Http\Admin\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Config\Repository as Config;
use Kash\Http\Admin\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    protected $auth;

    public function __construct(Guard $auth, Config $config)
    {
        $this->auth = $auth;

        // redirect if their already logged in
        // except when logging out
        $this->middleware('admin.redirect', ['except' => 'doLogout']);

        // Tell Laravel to temporarily use Admin for auth
        $this->setConfig($config);
    }

    public function showLogin()
    {
        return view('admin.sections.auth.login');
    }

    public function doLogin(LoginRequest $request)
    {

    }

    public function doLogout()
    {
        $this->auth->logout();

        return redirect()->route('login')->with('message', 'You have been logged out');
    }

    private function setConfig(Config $config)
    {
        $config->set('auth.model', 'Kash\Models\Admin\Admin');
        $config->set('auth.table', KASH_PREFIX.'admins');
    }

}