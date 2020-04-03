<?php
$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
$user = 'dbuser';
$password = 'dbpass';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
	var_dump($e->getMessage());
	// ファイルに出力すると見える
	file_put_contents('error.log', $e->getMessage());
}