<?php
// default debug adalah false
$debug = false;

// set path file konfigurasi
$yii = dirname(__FILE__) . '/../vendor/yiisoft/yii/framework/yii.php';
$composer_autoload_file = dirname(__FILE__) . '/../vendor/autoload.php';
$main_config_file = dirname(__FILE__) . '/protected/config/main.php';
$env_file = dirname(__FILE__) . '/protected/config/envs.php';

// cek environment yang digunakan sekarang
$current_environment = gethostname();
$envs = require($env_file);

// jika environment yang sekarang ada di list environment, debug diganti jadi true
if (isset($envs[$current_environment])) {
    $debug = true;
}

// define konstanta yii
defined('YII_DEBUG') or define('YII_DEBUG', $debug);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

// require yii dan composer autoload
require_once($composer_autoload_file);
require_once($yii);

// set config untuk environment yang sekarang
if (isset($envs[$current_environment])) {
    $env_config_file = dirname(__FILE__) . '/protected/config/environment/' . $envs[$current_environment] . '.php';
} else {
    $env_config_file = dirname(__FILE__) . '/protected/config/environment/production.php';
}

// gabungkan konfigurasi main dengan konfigurasi environment
$config = CMap::mergeArray(
    require($main_config_file),
    require($env_config_file)
);

// jalankan yii
Yii::createWebApplication($config)->run();