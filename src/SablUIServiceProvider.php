<?php
namespace PipIWYG\SablUI;

use Illuminate\Support\ServiceProvider;

/**
 * Class SablUIServiceProvider
 *
 * @package PipIWYG\SablUI
 * @author Quintin Stoltz<qstoltz@gmail.com>
 */
class SablUIServiceProvider
    extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load and Define Package Routes
        $this->defineRoutes();
    }

    /**
     * Define the package routes.
     *
     * @return void
     */
    protected function defineRoutes()
    {
        // Check for cached routes
        if (app()->routesAreCached())
            return;

        // Load routes from...
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
    }
}
