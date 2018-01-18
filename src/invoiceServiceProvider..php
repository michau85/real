<?php

namespace michau85\real;

use Illuminate\Support\ServiceProvider;
use michau85\real\helpers\User;
use michau85\real\helpers\Auto;
use michau85\real\helpers\Invoice;
use michau85\real\player;


class invoiceServiceProvider extends ServiceProvider
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
        $this->app->bind('Invoice', function ($app, $p) {
            $g = $this->okres(2);
            $f = $g->fname;
            $l = $g->lname;
           
            //$user=$p[0];
            $auto = $p[0];
            return new Invoice(new User($f, $l), $auto);
        });

         
        //$this->app->make('michau85\barca\barcaController');
    }

    public function okres($j)
    {
        $g = player::find($j);
        return $g;
    }
}
