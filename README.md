### Service Provider 
- Add to config/app.php

Wame\Review\ReviewServiceProvider::class,



### EventServiceProviedr 
- add observer nad listeners


### NovaMenu 
- add to menu


### composer.json


    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/"
            "Wame\\Review\\": "package/reviews/src/"
        }
    },
