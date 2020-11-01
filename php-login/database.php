<?php 

$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'usuarios_bd';
/*$database = 'emmlss_bd'; */

try {
	$conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
	
} catch (PDOException $e) {
	die('Connected failed:' .$e->getMesage());
	
}

?>
