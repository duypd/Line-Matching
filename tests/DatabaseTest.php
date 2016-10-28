<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DatabaseTest extends TestCase
{
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
}