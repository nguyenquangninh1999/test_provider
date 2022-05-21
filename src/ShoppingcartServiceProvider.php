<?php

namespace ninh\abc;

use Illuminate\Support\ServiceProvider;

class ShoppingcartServiceProvider extends ServiceProvider
{

    public function register()
    {

        $this->app->bind('Hello', function () {
            return 'huhu';
        });
    }

    public function boot()
    {
        //
    }
}
