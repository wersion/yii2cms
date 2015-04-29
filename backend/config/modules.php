<?php
$modules = [
    'files' => [
        'class' => 'modules\filemanage\Module',
    ],
    'filemanager' => [
        'class' => 'pendalf89\filemanager\Module',
        // Upload routes
        'routes' => [
            // Base absolute path to web directory
            'baseUrl' => '',
            // Base web directory url
            'basePath' => '@backend/web',
            // Path for uploaded files in web directory
            'uploadPath' => 'uploads',
        ],
        // Thumbnails info
        'thumbs' => [
            'small' => [
                'name' => 'small',
                'size' => [100, 100],
            ],
            'medium' => [
                'name' => 'medium',
                'size' => [300, 200],
            ],
            'large' => [
                'name' => 'large',
                'size' => [500, 400],
            ],
        ],
    ],
]
?>