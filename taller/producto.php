
<?php 

$db = new PDO('mysql:host=localhost;dbname=taller','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


$producto = $db->query('SELECT * FROM producto')->fetchALL();

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
			<center><h2>PRODUCTO</h2></center>
		</div>
		<div class="xxx">
			<table class="table table-hover table-striped"> 
				<tr>
					<th>id_p</th>
                    <th>proveedor</th>
					<th>Descripcion</th>
					<th>Precio</th>
                    <th>existencia</th>
					<th>Opciones</th>
				</tr>
				<?php foreach ($producto as $p):?>
					<tr>
						<td><?php echo $p->id_p; ?></td>
                        <td><?php echo $p->proveedor; ?></td>
						<td><?php echo $p->descripcion; ?></td>
                        <td><?php echo $p->existencia; ?></td>
						<td><?php echo $p->precio; ?></td>
						<td>
							<a href="editarp.php?
										id_p=<?php echo $p->id_p?>&
                                        proveedor=<?php echo $p->proveedor?>&
										descripcion=<?php echo $p->descripcion?>&
                                        precio=<?php echo $p->precio?>&
										existencia=<?php echo $p->existencia?>">Editar</a>
						</td>
						<td>
							<a href="eliminarp.php?id_p=<?php echo $p->id_p?>">Eliminar</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
			<a href="fproducto.php" class="btn btn-primary">Nuevo Producto</a>
			<a href="index.php" class="btn btn-primary">SALIR</a>
		</div>
		<div class="well">
			<center><h3>JHONATAN ANDRES MARTINEZ PEREZ</h3></center>
		</div>
	</div>
</body>
</html>