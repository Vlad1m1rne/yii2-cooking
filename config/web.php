<?php
use yii\rest\UrlRule;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@modules' => '@app/modules',
        '@api' => '@app/modules/api',
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout' => 'admin',
            'defaultRoute' => 'recipe/index',

        ],
        'api' => [
            'class' => 'app\modules\api\Module',
            'basePath' => '@api',
            // 'defaultRoute' => 'recipe',

        ]
    ],

    'components' => [
        'request' => [
       
            'cookieValidationKey' => '4K50mR1jJUNlA0jpqDHIoqbuSPaIb9i-',
            'baseUrl' => '',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
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
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                ['class' => UrlRule::class, 'controller' => 'recipe',  'pluralize' => false],

            ],
        ],

        // 'urlManager' => [
        //     'enablePrettyUrl' => true,
        //     //  'enableStrictParsing' => true,
        //     'showScriptName' => false,
        //     'rules' => [
        //         [
        //            'class' => 'yii\rest\UrlRule', 
        //             // 'prefix' => 'api',
        //            'controller' => 'recipe',
        //             // 'except' => ['delete'],
        //            'pluralize' => false,

        //         //    '' => 'my/index',                                
        //         //    '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
                   
        //         ],

        //     ],
        // ],

        // 'urlManager' => [
        //     'enablePrettyUrl' => true,
        //     'showScriptName' => false,
        //     'rules' => [
        //        ['' => 'my/index',
        //         '<action>'=>'my/<action>',],
        //         ['class' => UrlRule::class, 
        //         'controller' => 'recipe',],
                
        //     ],
        // ],

        
    ],
    'params' => $params,
    'defaultRoute' => '/my/index',
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        // 'allowedIPs' => ['127.0.0.1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
