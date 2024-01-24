<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Image Driver
    |--------------------------------------------------------------------------
    |
    | Intervention Image supports "GD Library" and "Imagick" to process images
    | internally. Depending on your PHP setup, you can choose one of them.
    |
    | Included options:
    |   - \Intervention\Image\Drivers\Gd\Driver::class
    |   - \Intervention\Image\Drivers\Imagick\Driver::class
    |
    */

    'driver' => 'gd',

    /*
    |--------------------------------------------------------------------------
    | Intervention Image Cache
    |--------------------------------------------------------------------------
    |
    | When using the "gd" image driver, we will leverage the caching features
    | of the library. Here you may specify the amount of minutes to cache
    | the images. If you want to disable the cache, set the value to null.
    |
    */

    'cache' => [
        'driver' => 'file',
        'path' => storage_path('app/image-cache'),
    ],

];
