<?php

use App\Nova\Order;
use App\Nova\User;

return [

    'types' => [
       User::class,
       Order::class,
    ],

    'status_use' => true,

    'stars_count' => 5,  // in new version

    'label' => [

        'waiting' => '
            bg-yellow-500
            text-white waiting
            dark:bg-yellow-500',
        'approved' => '
            bg-green-500
            text-white approved',
        'denied' => '
            bg-red-500
            text-white denied',
        'edit' => '
            bg-gray-500
            text-white edit',
        'finished' => '
            bg-green-300
            text-white finished',

        'success' => 'bg-green-100 text-green-600 dark:bg-green-500 dark:text-green-900 success',
        'warning' => 'bg-yellow-100 text-yellow-600 dark:bg-yellow-300 dark:text-yellow-800 warning',
        'info' => 'bg-sky-100 text-sky-600 dark:bg-sky-600 dark:text-sky-900 info',
        'error' => 'bg-red-100 text-red-600 dark:bg-red-400 dark:text-red-900 error',
        'default' => 'bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-900 default',

    ],

];

