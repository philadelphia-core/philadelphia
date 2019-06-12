<?php

  define('DB', array(
    'driver' => 'mysql',
    'host' => 'localhost',
    'port' => 3306,
    'dbname' => 'srn',
    'username' => 'root',
    'password' => '',
    'chatset' => 'utf8',

    'persistent' => true
  ));

  define('JWT', array(
    'host' => 'http://localhost',
    'privateKey' => '1asfrwqwkaoi21e9j12e1lasdlj12-asd',
    'algorithm' => 'HS512',
  ));