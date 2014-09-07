<?php
$env_file = dirname(__FILE__) . '/envs.php';

// set config for current environment
$current_environment = gethostname();
$envs = require($env_file);
if (isset($envs[$current_environment])) {
    $env_config_file = dirname(__FILE__) . '/environment/' . $envs[$current_environment] . '.php';
} else {
    $env_config_file = dirname(__FILE__) . '/environment/production.php';
}

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return CMap::mergeArray(
    array(
        'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
        'name' => 'My Console Application',
        // preloading 'log' component
        'preload' => array('log'),
        'import' => array(
            'application.libraries.*',
        ),
        // application components
        'components' => array(
            'log' => array(
                'class' => 'CLogRouter',
                'routes' => array(
                    array(
                        'class' => 'CFileLogRoute',
                        'levels' => 'error, warning',
                    ),
                ),
            ),
        ),
    ),
    require($env_config_file)
);