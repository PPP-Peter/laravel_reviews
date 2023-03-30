<?php

use App\Nova\Order;
use App\Nova\User;

return [

    'types' => [
        '1' => User::class,
        '2' => Order::class,
    ],

    'stars_count' => 5,

];

