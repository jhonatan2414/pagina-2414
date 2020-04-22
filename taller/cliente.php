
<?php 

$db = new PDO('mysql:host=localhost;dbname=taller','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$cliente = $db->query('SELECT * FROM cliente')->fetchALL();


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
			<center><h2>CLIENTE</h2></center>
		</div>
		<div class="xxx">
			<table class="table table-hover table-striped"> 
				<tr>
					<th>id_c</th>
                    <th>nit</th>
					<th>Nombre</th>
					<th>Telefono</th>
					<th>Opciones</th>
				</tr>
				<?php foreach ($cliente as $c):?>
					<tr>
						<td><?php echo $c->id_c; ?></td>
                        <td><?php echo $c->nit; ?></td>
						<td><?php echo $c->nombre;   ?></td>
						<td><?php echo $c->telefono; ?></td>
						<td>
							<a href="editarc.php?
										id_c=<?php echo $c->id_c?>&
                                        nit=<?php echo $c->nit?>&
										nombre=<?php echo $c->nombre?>&
										telefono=<?php echo $c->telefono?>">Editar</a>
						</td>
						<td>
							<a href="eliminarc.php?id_c=<?php echo $c->id_c?>">Eliminar</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
			<a href="fcliente.php" class="btn btn-primary">Nuevo Cliente</a>
			<a href="index.php" class="btn btn-primary">SALIR</a>
		</div>
		<div class="well">
			<center><h3>JHONATAN ANDRES MARTINEZ PEREZ</h3></center>
		</div>
		<div>
				</body>
				</html>