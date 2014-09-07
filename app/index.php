<?php
$debug = false;
date_default_timezone_set('Asia/Jakarta');

// change the following paths if necessary
$yii = dirname(__FILE__) . '/../vendor/yiisoft/yii/framework/yii.php';
$composer_autoload_file = dirname(__FILE__) . '/../vendor/autoload.php';
$main_config_file = dirname(__FILE__) . '/protected/config/main.php';
$env_file = dirname(__FILE__) . '/protected/config/envs.php';

require_once($composer_autoload_file);
require_once($yii);

// set config for current environment
$current_environment = gethostname();
$envs = require($env_file);
if (isset($envs[$current_environment])) {
    $debug = true;
    $env_config_file = dirname(__FILE__) . '/protected/config/environment/' . $envs[$current_environment] . '.php';
} else {
    $env_config_file = dirname(__FILE__) . '/protected/config/environment/production.php';
}

$config = CMap::mergeArray(
    require($main_config_file),
    require($env_config_file)
);

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', $debug);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

Yii::createWebApplication($config)->run();