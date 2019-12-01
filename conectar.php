<?php

	$dbhost = "localhost";
	$dbuser = "id9038000_alvarogmezm";
	$dbpass = "kosaeducation";
	$dbname = "id9038000_kosaeducation";
	try {
		$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,  
				     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(Exception $error) {
		die("Error conexión BBDD " . $error->getMessage());
	}	
?>

