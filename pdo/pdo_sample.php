<?php

$options = [
    //PDO::ATTR_TIMEOUT => 2,
    PDO::ATTR_PERSISTENT => false,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
//    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_ERRMODE =>PDO::ERRMODE_SILENT,
];

$dsn = 'mysql:host=localhost;port=3306;dbname=demo;charset=utf8';
$user = 'gaina';
$password = 'Ifc@130122';



// PDO::ATTR_PERSISTENT = 12
// PDO::MYSQL_ATTR_USE_BUFFERED_QUERY=1000
// PDO::ATTR_ERRMODE = 3

try {
    $dbh = new \PDO($dsn, $user, $password, $options);
} catch (\PDOException $e) {
    var_dump($e->errorInfo);
    print_r($e->getMessage());
    print_r($e->getPrevious());
    print_r($e->getCode());
    print_r($e->getFile());
    print_r($e->getLine());
	echo PHP_EOL;
    print_r($e->getTrace());
	echo PHP_EOL;
	echo PHP_EOL;
    var_dump($e->getTrace()[0]['type']);
	echo PHP_EOL;
    print_r($e->getTraceAsString());
	print_r($e->__toString());
	
    //var_dump(PDO::errorInfo()); //Non-static method 
//    print_r($e->code);
    //throw $e;
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
