<?php

$dsn = 'mysql:dbname=demo;host=192.168.99.35:3308';
$user = 'gaina';
$password = 'Ifc@130122';

$dbh = new PDO($dsn, $user, $password);

$statement = $dbh->query("SELECT 
CAST( AES_DECRYPT(UNHEX(customers.enc_tel1),
            'G9aInAty1eIfC987ap25Hwqp83JhdGt5') AS CHAR( 1000 ) CHARACTER SET utf8 ) as enc_tell
FROM
    demo.customers AS customers;");

var_dump($statement->fetchAll());