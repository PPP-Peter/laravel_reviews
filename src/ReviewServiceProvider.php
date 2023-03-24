<?php

Namespace Wame\Review;

use Closure;
use Illuminate\Support\ServiceProvider;

class ReviewServiceProvider extends  ServiceProvider
{

    public function boot()
    {
       // $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations/2023_03_24_094606_create_reviews_table.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/seeders/ReviewSeeder.php');
        $this->mergeConfigFrom(__DIR__ . '/../config/reviews.php', 'reviews');


        if ($this->app->runningInConsole()) {

            //export seeder
            $this->publishes([
                __DIR__.'/../database/seeders/ReviewSeeder.php',
             ],'migrations');

            //export config
            $this->publishes([
                __DIR__.'/../config/reviews.php' => config_path('reviews.php'),
            ], 'config');

        }

    }

    public function register()
    {

    }

}
