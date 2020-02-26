<?php
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'soterotech');

try {
	$conn = new PDO('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
	$conn->exec('set names utf8');
} catch (Exception $e) {
	echo 'ERROR: '. $e->getMessage();
}