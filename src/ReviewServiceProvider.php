<?php

Namespace Wame\Review;

use Closure;
use Illuminate\Support\ServiceProvider;

class ReviewServiceProvider extends  ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations/2023_03_24_094606_create_reviews_table.php');
        $this->loadMigrationsFrom(__DIR__.'/database/seeders/ReviewSeeder.php');


        if ($this->app->runningInConsole()) {

            //export config
            $this->publishes([
                __DIR__.'/../config/price-fields.php' => config_path('price-fields.php'),
            ], 'config');

//            //export config
//            $this->publishes([
//                __DIR__.'/../config/price-fields.php' => config_path('price-fields.php'),
//            ], 'config');

        }

    }

    public function register()
    {

    }

}
