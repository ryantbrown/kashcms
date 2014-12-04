<?php namespace Kash\Http\Admin\Controllers;

class DashboardController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function showDashboard()
    {
        return 'dashboard';
    }


}