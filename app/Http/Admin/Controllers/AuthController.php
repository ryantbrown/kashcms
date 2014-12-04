<?php namespace Kash\Http\Admin\Controllers;

use Illuminate\Contracts\Auth\Guard;

class AuthController extends Controller
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function authIndex()
    {
        //
    }

    public function showLogin()
    {
        return view('admin.sections.auth.login');
    }

    public function doLogin()
    {
        return 'do login';
    }

    public function doLogout()
    {
        $this->auth->logout();

        return redirect()->route('login')->with('message', 'You have been logged out');
    }

}