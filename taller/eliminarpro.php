<?php 

$db = new PDO('mysql:host=localhost;dbname=taller','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$id_pro = $_GET['id_pro'];

$db->query("DELETE FROM proveedor WHERE id_pro = $id_pro");

header("location:proveedor.php");

?>