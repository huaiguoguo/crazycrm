<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id'                  => 'app-frontend',
    'name'                => '金猎人',
    'basePath'            => dirname(__DIR__),
    'bootstrap'           => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components'          => [
        'request'      => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user'         => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie'  => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session'      => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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

        'urlManager' => [
            'enablePrettyUrl'     => true,
            'showScriptName'      => false,
            'enableStrictParsing' => false,
            'suffix'              => '.html',
            'rules'               => [
            ],
        ],
        'view'       => [
            'class'            => 'yii\web\View',
            'defaultExtension' => 'tpl',
            'renderers'        => [
                'tpl'  => [
                    'class'       => 'yii\smarty\ViewRenderer',
                    'cachePath'   => '@runtime/Smarty/cache',
                    'compilePath' => '@runtime/Smarty/compile'
                ],
                'twig' => [
                    'class'     => 'yii\twig\ViewRenderer',
                    'cachePath' => '@runtime/Twig/cache',
                    // Array of twig options:
                    'options'   => [
                        'auto_reload' => true,
                    ],
                    'globals'   => [
                        'html' => ['class' => '\yii\helpers\Html'],
                    ],
                    'uses'      => ['yii\bootstrap'],
                ],
            ],
            'theme'            => [
                'class'    => 'yii\base\Theme',
                'pathMap'  => [
                    '@app/views' => [
                        '@app/themes/basic',
                        '@app/themes/spring',
                    ]
                ],
                'basePath' => '@web/themes/basic',
                'baseUrl'  => '@web/themes/basic',
            ]
        ],
    ],
    'params'              => $params,
];
