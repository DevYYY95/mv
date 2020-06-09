<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Image Paths and Settings
    |--------------------------------------------------------------------------
    |
    |
    | We set the config here so that we can keep our controllers clean.
    | Configure each image type with an image path.
    |
    */       
        'movieImage' => [
            'destinationFolder'     => '/imgs/movie/',
            'destinationThumbnail'      => '/imgs/movie/thumbnails/',
            'thumbPrefix'           => 'thumb-',
            'imagePath'             => '/imgs/movie/',
            'thumbnailPath'         => '/imgs/movie/thumbnails/thumb-',
            'thumbHeight'           => 60,
            'thumbWidth'            => 60,
        ],
];