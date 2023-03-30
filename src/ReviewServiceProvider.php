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
        $this->mergeConfigFrom(__DIR__ . '/../config/reviews.php', 'reviews');

        if ($this->app->runningInConsole()) {

            // Export Observer
            $this->publishes([__DIR__.'/../app/Observers' => app_path('Observers')], 'Observers');
            // Export Listener
            $this->publishes([__DIR__.'/../app/Listeners' => app_path('Listeners')], 'Listeners');
            // Export Event
            $this->publishes([__DIR__.'/../app/Events' => app_path('Events')], 'Events');

            // Export Model
            $this->publishes([__DIR__.'/../app/Models' => app_path('Models')], 'models');
            // Export Nova resource
            $this->publishes([__DIR__ . '/../app/Nova' => app_path('Nova')], 'review');

            //export migration
            $this->publishes([__DIR__.'/../database/migrations' => database_path('migrations')],'migrations');
            //export seeder
            $this->publishes([__DIR__.'/../database/seeders' => database_path('seeders')],'seeders');

            //export config
            $this->publishes([__DIR__.'/../config/reviews.php' => config_path('reviews.php')], 'config');

            // Export lang
            $this->publishes([__DIR__ . '/../resources/lang' => resource_path('lang')], 'language');

        }

    }

    public function register()
    {

    }

}
