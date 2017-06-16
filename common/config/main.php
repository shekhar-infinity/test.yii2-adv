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
];
