<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'th',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
	      'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
    ],
];
