<?php

$dsn = 'mysql:dbname=master;host=192.168.99.35';
$user = 'gaina';
$password = 'Ifc@130122';

$dbh = new PDO($dsn, $user, $password);


var_dump(new PDO('mysql:dbname=master;host=192.168.99.35', 'gaina', 'Ifc@130122'));
