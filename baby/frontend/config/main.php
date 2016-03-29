<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-baby',
    'name' => '宝贝成长助手',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'defaultRoute' => 'user',
    'components' => [
        'db' => [
            'class' => '\yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=BabyAssistant',
            'username' => 'root',
            'password' => '871027',
            'charset' => 'utf8',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'targets' => [
                'file' => [
                    'class' => 'yii\log\FileTarget',
                    'categories' => ['yii\web\HttpException:404'],
                    'levels' => ['error', 'warning'],
                    'logFile' => '@runtime/logs/404.log',
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'categories' => ['catalog'],
                    'logFile' => '@app/runtime/logs/catalog.log',
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'categories' => ['basket'],
                    'logFile' => '@app/runtime/logs/basket.log',
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enableStrictParsing' => false, // 是否执行严格的url解析
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'ruleConfig' => ['class' => 'yii\web\UrlRule'],
            'rules' => [
                'POST <controller:[\w-]+>' => '<controller>/create',
                '<controller:[\w-]+>' => '<controller>/index',
                'PUT <controller:[\w-]+>/<id:\d+>'    => '<controller>/update',
                'DELETE <controller:[\w-]+>/<id:\d+>' => '<controller>/delete',
                '<controller:[\w-]+>/<id:\d+>'        => '<controller>/view',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
        ],
    ],
    'params' => $params,
];
