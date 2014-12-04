<?php namespace Kash\Http\Admin\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use ValidatesRequests;

	public function __construct()
	{
		$this->middleware('logged.in');
		$this->middleware('admin');
	}

}