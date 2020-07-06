<?php

return [
    'compiler' => [
        'js' => [
            'kenwheeler/slick' => [
                'slick/slick.min.js' => 'slick.min.js',
            ],
        ],
        'css' => [
            'kenwheeler/slick' => [
                'slick/slick.scss' => 'slick.css',
                'slick/slick-theme.scss' => 'slick.css',
            ],
        ],
        'sass' => [
            'vars' => [
                '$slick-font-path' => '/fonts/slick/',
            ],
        ],
        'copy' => [
            'kenwheeler/slick' => [
                'slick/fonts/*' => 'fonts/slick',
            ],
        ],
    ],
];
