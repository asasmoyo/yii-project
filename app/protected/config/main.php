<?php

// uncomment the following to define a path alias
Yii::setPathOfAlias('vendor', dirname(__FILE__) . '/../../../vendor');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Web Application',
    'preload' => array(
        'log',
        'booster',
    ),
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.libraries.*',
        'application.libraries.widgets.*',
        'application.libraries.logger.*',
        'vendor.*',
    ),
    'modules' => array(
        'administrator',
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'gii',
            'ipFilters' => array('*'),
            'generatorPaths' => array(
                'booster.gii'
            )
        ),
    ),
    'components' => array(
        'booster' => array(
            'class' => 'vendor.clevertech.yii-booster.src.components.Booster',
        ),
        'user' => array(
            'allowAutoLogin' => true,
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
        ),
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),
        'request' => array(
            'enableCsrfValidation' => true,
        ),
    ),
    'params' => array(),
);
