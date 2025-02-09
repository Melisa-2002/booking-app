<?php

return [
    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Here you may specify an array of paths that should be searched for
    | views. These paths will be checked in the order they are listed.
    | Of course, the usual Laravel view path has already been registered
    | for you, but you may add additional paths for custom views.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | View Composer
    |--------------------------------------------------------------------------
    |
    | Laravel provides a simple and expressive way to organize your views.
    | View composers are used to bind data to a view every time it is loaded.
    | You may register composers for any of your views here.
    |
    */

    'composers' => [
        // Add view composers here if needed
    ],

    /*
    |--------------------------------------------------------------------------
    | View Engine Resolver
    |--------------------------------------------------------------------------
    |
    | The view engine resolver is responsible for resolving the view engines
    | used to render views. Laravel uses Blade for rendering, but you can
    | customize the resolver if you want to use different view engines.
    |
    */
    'compiled' => realpath(storage_path('framework/views')) ?: storage_path('framework/views'),

    'engine' => [
        'resolver' => Illuminate\View\Engines\CompilerEngine::class,
    ],
];
