<?php namespace Kash\Providers\Admin;

use Illuminate\Support\ServiceProvider;

class KashServiceProvider extends ServiceProvider {

	/**
	 * The list of service providers to be registered
	 *
	 * @var array
	 */
	protected $providers = [
		'Helper',
		'Event',
		'Route'
	];

	protected function registerProviders()
	{
		foreach($this->providers as $provider)
		{
			$this->app->register('Kash\Providers\Admin\\'.$provider.'ServiceProvider');
		}
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->registerProviders();
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register(){}

}
