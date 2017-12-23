<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id'                  => 'app-backend',
    'basePath'            => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap'           => ['log'],
    'language'            => 'zh-CN',
//    'I18n'                => [
//        'translations' => [
//            'app*' => [
//                'class'   => 'yii\i18n\PhpMessageSource',
//                //'basePath' => '@app/messages',
//                //'sourceLanguage' => 'en-US',
//                'fileMap' => [
//                    'app'       => 'app.php',
//                    'app/error' => 'error.php',
//                ],
//            ],
//        ],
//    ],
    'modules'             => [
        'admin' => [
            'class' => 'mdm\admin\Module',
        ],
    ],
    'aliases'             => [
        '@mdm/admin' => '@vendor/mdmsoft/yii2-admin',
    ],
    'components'          => [
        'request'      => [
            'csrfParam'            => '_csrf-backend',
            'enableCsrfValidation' => false
        ],
        'user'         => [
            'identityClass'   => 'common\models\Admin',
            'enableAutoLogin' => true,
            'identityCookie'  => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session'      => [
            'name' => 'advanced-backend',
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager'   => [
            'enablePrettyUrl'     => true,
            'showScriptName'      => false,
            'enableStrictParsing' => false,
            'suffix'              => '.html',
            'rules'               => [
            ],
        ],

    ],
    'params'              => $params,
];
