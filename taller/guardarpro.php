<?php 

$db = new PDO('mysql:host=localhost;dbname=taller','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$id_pro = $_POST['id_pro'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$telefono = $_POST['telefono'];


$db->query("INSERT INTO proveedor VALUES ('$id_pro','$nombre', '$descripcion', '$telefono')");


header("location:proveedor.php");

?>