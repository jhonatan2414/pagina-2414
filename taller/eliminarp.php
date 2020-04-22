<?php 

$db = new PDO('mysql:host=localhost;dbname=taller','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$id_p = $_GET['id_p'];

$db->query("DELETE FROM producto WHERE id_p = $id_p");

header("location:producto.php");

?>