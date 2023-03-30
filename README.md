## Folder Packages

### Service Provider 

- Add to config/app.php

Wame\Review\ReviewServiceProvider::class,



### EventServiceProviedr 
- add observer nad listeners

```php
   /**
     * The event to listener mappings for the application.
   */
 protected $listen = [
       ReviewCreatingEvent::class => [RunReviewCreatingListenerJob::class],
       ReviewUpdatingEvent::class => [RunReviewUpdatingListenerJob::class],
       ReviewUpdatedEvent::class => [RunReviewUpdatedListenerJob::class],
 ];
  /**
    * Register any events for your application.
   */
public function boot(): void
{
     Review::observe(ReviewObserver::class);
}
```

### NovaMenu 
- add to menu


### composer.json


    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/",
            "Wame\\Review\\": "package/reviews/src/"
        }
    },

### damp autoload
### vendor publish   -- reviewServiceProvider
```php
php artisan vendor:publish --provider="Wame\Reviews\ReviewServiceProvider"
```

### Config
- types Models
- stars count
