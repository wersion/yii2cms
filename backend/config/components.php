<?php
$components = [
    'user' => [
        'identityClass' => 'common\models\User',
        'enableAutoLogin' => true,
    ],
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
        ],
    ],
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'enableStrictParsing' => false,
        'rules' => [
            [
                'class' => 'yii\rest\UrlRule',
                'controller' => 'user'
            ],
        ],
    ],
];