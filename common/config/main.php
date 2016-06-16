<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'ru-RU',
    'timeZone' => 'Europe/Ukraine',
    'modules' => [
    
    
    ],
    'components' => [
     'mailer' => [
            'class' => 'yii\swiftmailer\Mailer'
            ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
//            'cache' => 'cache',
            'defaultRoles' => [
                'user'
            ],
        ],
        'urlManager' => [
         'class' => 'yii\web\UrlManager',
        // Disable index.php
        'showScriptName' => false,
        // Disable r= routes
           // 'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
           // 'suffix' => '/',
            'rules' => 
        array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',

                
                '<module:\w+>/<controller:\w+>/<action:(\w|-)+>/<id:\d+>' => '<module>/<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                'posts/<year:\d{4}>/<category>' => 'post/index',
              'posts' => 'post/index',
                'site/<id:\d+>' => 'site/about',
                //вавааваав//
                // '<id:\d+>'                               => 'profile/show',
                // '<action:(login|logout)>'                => 'security/<action>',
                // '<action:(register|resend)>'             => 'registration/<action>',
                // 'confirm/<id:\d+>/<code:[A-Za-z0-9_-]+>' => 'registration/confirm',
                // 'forgot'                                 => 'recovery/request',
                // 'recover/<id:\d+>/<code:[A-Za-z0-9_-]+>' => 'recovery/reset',
                // 'settings/<action:\w+>'                  => 'settings/<action>'
        ),

        ],
        'formatter' => [
            'dateFormat' => 'php:d.m.Y',
            'datetimeFormat' => 'php:d.m.Y H:i',
            'timeFormat' => 'php:H:i'
        ],
        'config' => [
            'class' => 'common\components\DConfig',
        ]
    ],
];
