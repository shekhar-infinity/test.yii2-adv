<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
		    'urlManager' => [
		        'class' => 'yii\web\UrlManager',
		        // Hide index.php
		        'showScriptName' => false,
		        // Use pretty URLs
		        'enablePrettyUrl' => true,
		        'rules' => [
		        ],
		    ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
		    'user' => [
		        'class' => 'dektrium\user\Module',
		        // you will configure your module inside this file
		        // or if need different configuration for frontend and backend you may
		        // configure in needed configs
		    ],
		],
];
