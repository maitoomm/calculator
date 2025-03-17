<?php

namespace MyVendor\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Đăng ký route tự động khi package được load
        $this->app->make('MyVendor\Calculator\Controllers\CalculatorController');
    }

    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
