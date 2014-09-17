<?php

return array(
    'components' => array(
        'db' => array(
            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../../data/testdrive.db',
        ),
    ),
);