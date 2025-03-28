<?php

namespace MyVendor\Calculator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\App;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Đăng ký namespace cho Controller
        $this->app->make('MyVendor\Calculator\Controllers\CalculatorController');
    }

    public function boot()
    {
        // Đăng ký route từ package
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // Tự động publish Controller vào thư mục `app/Http/Controllers`
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/Controllers\CalculatorController.php' => App::basePath('app/Http/Controllers\CalculatorController.php'),
            ], 'controllers'); 
        }
    }
     
}
