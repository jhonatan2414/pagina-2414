<?php 

$db = new PDO('mysql:host=localhost;dbname=taller','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

		$id_c = $_POST['id_c'];
		$nit = $_POST['nit'];
		$nombre = $_POST['nombre'];
		$telefono = $_POST['telefono'];

$db->query("UPDATE cliente SET nit = '$nit', nombre = '$nombre', telefono = '$telefono' WHERE id_c = '$id_c'");

header("location:cliente.php");


?>
