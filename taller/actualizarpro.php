<?php 

$db = new PDO('mysql:host=localhost;dbname=taller','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

		$id_pro = $_POST['id_pro'];
		$nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $telefono = $_POST['telefono'];
		

$db->query("UPDATE proveedor SET  nombre = '$nombre',descripcion = '$descripcion', telefono = '$telefono' WHERE id_pro = '$id_pro'");

header("location:proveedor.php");


?>
