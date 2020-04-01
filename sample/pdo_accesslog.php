<?php

var_dump(memory_get_usage()) ;

$dsn = 'mysql:dbname=tmn_anshin;host=192.168.99.35:3308';
$user = 'gaina';
$password = 'Ifc@130122';

$dbh = new PDO($dsn, $user, $password);

$statement = $dbh->query("
SELECT 
*
FROM
    tmn_anshin.access_logs where created between '2019-11-28' and '2019-12-03';
");

$temp = $statement->fetchAll();

var_dump(memory_get_usage()) ;
