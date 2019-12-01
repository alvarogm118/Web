<?php
require_once 'conectar.php';

$sql = "SELECT nombre, email, mensaje, imagen FROM BBDD LIMIT 6";
$statement = $db->prepare($sql);
$statement->execute();

while ($fila = $statement->fetch()) {
	$filas[] = array(
			"nombre" => $fila['nombre'],
		    "email" => $fila['email'],
			"mensaje" => $fila['mensaje'],
			"imagen" => $fila['imagen']);
}

$json = json_encode($filas); 
$callback = $_GET['callback'];
echo $callback.'('. $json . ')';
?>

