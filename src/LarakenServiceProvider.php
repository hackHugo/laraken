<?php
/**
 * Created by PhpStorm.
 * User: administrador
 * Date: 19/07/19
 * Time: 04:54 PM
 */

namespace laraken;
use  \Illuminate\Support\ServiceProvider;

class LarakenServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/assets/kendocss' => public_path('kendocss'),
            __DIR__.'/assets/kendojs' => public_path('kendojs'),
        ], 'laraken');
    }
}