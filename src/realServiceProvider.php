<?php

namespace michau85\real;

use Illuminate\Support\ServiceProvider;
use michau85\real\helpers\User;
use michau85\real\helpers\Auto;
use michau85\real\helpers\Model;

class realServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //include __DIR__.'/routes.php';
        $this->app->bind('User', function ($app,$p) {
            $first=$p[0];
            $last=$p[1];
            return new User($first,$last);
        });

          $this->app->bind('Auto', function ($app,$p) {
            $marka=$p[0];
            $model=$p[1];
            $user=$p[2];
            
            return new Auto($marka,$model,$user);
        });
        $this->app->bind('Model', function ($app,$p) {
            $name=$p[0];
            return new Model($name);
        });
        //$this->app->make('michau85\barca\barcaController');
    }
}
