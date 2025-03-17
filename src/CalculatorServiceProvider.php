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
        // Load routes từ file routes/web.php
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    
        // Load views (nếu có)
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'calculator');
    
        // Load migrations (nếu có)
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
    
}
