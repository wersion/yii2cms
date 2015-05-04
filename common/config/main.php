<?php
include 'rules.php';
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
            'cachePath'=>'@cache'
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => array_merge([
                '<lang:\d+>'=>'index/index',
                'menu/<menu:\d+>' => 'index/menu',
                'menu/<menu:37>' => 'index/map',
                'page/<id:\d+>' => 'index/page',
                'nbh/<id:\d+>' => 'index/nbh',
            ],$rules)

        ],
    ],
];
