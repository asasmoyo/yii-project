<?php
date_default_timezone_set('Asia/Jakarta');

$debug = false;

// set config for current environment
$currentEnvironment = gethostname();
$envs = array(
    'HOSTNAME' => 'development',
);
if (isset($envs[$currentEnvironment])) {
    $debug = true;
    $config = dirname(__FILE__) . '/protected/config/environment/' . $envs[$currentEnvironment] . '.php';
} else {
    $config = dirname(__FILE__) . '/protected/config/environment/production.php';
}

// change the following paths if necessary
$yii = dirname(__FILE__) . '/../vendor/yiisoft/yii/framework/yii.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', $debug);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

$composer_autoload = dirname(__FILE__) . '/../vendor/autoload.php';
require_once($composer_autoload);
require_once($yii);

Yii::createWebApplication($config)->run();