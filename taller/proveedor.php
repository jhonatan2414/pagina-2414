<?php 

$db = new PDO('mysql:host=localhost;dbname=taller','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


$proveedor = $db->query('SELECT * FROM proveedor')->fetchALL();

?>

<!DOCTYPE html>
<html>
<head>
<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta charset="utf-8">

	
</head>
<body>
<div class="container">
		<div class="jumbotron">
			<center><h1>FACTURACION</h1></center>
		</div>
		<div>
			<center><h2>PROVEEDOR</h2></center>
		</div>
		<div class="xxx">
			<table class="table table-hover table-striped"> 
				<tr>
					<th>id_pro</th>
                    <th>nombre</th>
					<th>Descripcion</th>
					<th>telefono</th>
                    
					<th>Opciones</th>
				</tr>
				<?php foreach ($proveedor as $pro):?>
					<tr>
						<td><?php echo $pro->id_pro; ?></td>
                        <td><?php echo $pro->nombre; ?></td>
						<td><?php echo $pro->descripcion; ?></td>
                        <td><?php echo $pro->telefono; ?></td>
					
						<td>
							<a href="editarpro.php?
										id_pro=<?php echo $pro->id_pro?>&
                                        nombre=<?php echo $pro->nombre?>&
										descripcion=<?php echo $pro->descripcion?>&
										telefono=<?php echo $pro->telefono?>">Editar</a>
						</td>
						<td>
							<a href="eliminarpro.php?id_pro=<?php echo $pro->id_pro?>">Eliminar</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
			<a href="fproveedor.php" class="btn btn-primary">Nuevo Proveedor</a>
			<a href="index.php" class="btn btn-primary">SALIR</a>
		</div>
		<div class="well">
			<center><h3>JHONATAN ANDRES MARTINEZ PEREZ</h3></center>
		</div>
	</div>
</body>
</html>