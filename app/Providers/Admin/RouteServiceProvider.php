<?php namespace Kash\Providers\Admin;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'Kash\Http\Admin\Controllers';

	/**
	 * The list of routes to be loaded
	 *
	 * @var array
	 */
	protected $routes = [
		'auth',
		'dashboard'
	];

	/**
	 * Load the routes
	 */
	protected function loadRoutes()
	{
		foreach($this->routes as $route)
		{
			$this->loadRoutesFrom(app_path('Http/Admin/Routes/'.$route.'.php'));
		}
	}

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		parent::boot($router);
	}

	/**
	 * Define the routes for the application.
	 *
	 * @return void
	 */
	public function map()
	{
		$this->loadRoutes();
	}

}
