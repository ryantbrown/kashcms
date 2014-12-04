<?php namespace Kash\Providers\Admin;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider {

    /**
     * The list of service providers to be registered
     *
     * @var array
     */
    protected $helpers = [
        'constants',
        'helpers',
        'exceptions',
        'composers',
        'macros'
    ];


    /**
     * Load the helpers
     */
    protected function loadHelpers()
    {
        foreach($this->helpers as $helper)
        {
            require __DIR__ .'/../../Helpers/' . $helper . '.php';
        }
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadHelpers();
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){}

}
