<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'language'=>"zh-CN",//语言
    //'defaultRoute'=>'status',
    'modules'=>[
        'user'=>[
            'class'=>'dektrium\user\Module',
             'confirmWithin'=>21600,
            'modelMap'=>[
                'User'=>'app\models\User',
            ],
            'cost'=>12,
            'admins'=>['ZANDM'],
        ],
        'rbac'=>'dektrium\rbac\Module',
    ],
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'authManager'=>[
          'class'=>'yii\rbac\DbManager', 
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '#￥%',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /*'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],*/
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
           // 'viewPath'=>'@app/mailer',
            'transport'=>[
                'class'=>'Swift_SmtpTransport',
                'host'=>'smtp.163.com',
                'username'=>'18076389517@163.com',
                'password'=>'9597lwpz',
                'port'=>'465',
                'encryption'=>'ssl',
                ],
                'messageConfig'=>[
                    'charset'=>'UTF-8',
                    'from'=>['18076389517@163.com'=>'admin']
                ],
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
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
