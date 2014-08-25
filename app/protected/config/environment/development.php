<?php

return CMap::mergeArray(
    require(dirname(__FILE__) . '/../main.php'),
    array(
        'components' => array(
            'db' => array(
                'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../../data/testdrive.db',
            ),
            'log' => array(
                'class' => 'CLogRouter',
                'routes' => array(
                    array(
                        'class' => 'CFileLogRoute',
                        'levels' => 'error, warning',
                    ),
                    array(
                        'class' => 'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
                    ),
                ),
            ),
        ),
    )
);