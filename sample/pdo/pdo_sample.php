<?php

$options = [
    //PDO::ATTR_TIMEOUT => 2,
    PDO::ATTR_PERSISTENT => false,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];
$host = 'localhost:3306';
$dsn = 'mysql:host=localhost;port=3306;dbname=demo;charset=utf8';
$user = 'gaina';
$password = 'Ifc@130122';



// PDO::ATTR_PERSISTENT = 12
// PDO::MYSQL_ATTR_USE_BUFFERED_QUERY=1000
// PDO::ATTR_ERRMODE = 3

try {
    $dbh = new PDO($dsn, $user, $password, $options);
} catch (Exception $e) {
    print_r($e->getMessage());
    throw $e;
}


/**
 * Cake\Database\Driver
 * var_dump($config['flags']);
 * した結果
 * 
 * Cake\Database\Driver\Mysql;
 * 
 * connect()
 * 
 * $config['flags'] += [
            PDO::ATTR_PERSISTENT => $config['persistent'],
            PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
 * 
 * array(3) {
  [12]=>
  bool(false)
  [1000]=>
  bool(true)
  [3]=>
  int(2)
}
 */
