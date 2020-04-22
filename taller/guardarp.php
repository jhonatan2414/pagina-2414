<?php 

$db = new PDO('mysql:host=localhost;dbname=taller','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$id_p = $_POST['id_p'];
$proveedor = $_POST['proveedor'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$existencia = $_POST['existencia'];

$db->query("INSERT INTO producto VALUES ('$id_p','$proveedor', '$descripcion', '$precio', '$existencia')");


header("location:producto.php");

?>