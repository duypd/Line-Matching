<?php
return array(
    'default' => 'mysql',
    'connections' => array(
        'mysql' => array(
            'driver'    => 'mysql',
            'host'      => getenv('http://192.168.0.117'),
        'port'      => 3306,
            'database'  => getenv('line_matching'),
            'username'  => getenv('line_matching'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => ''
        )
    )
);