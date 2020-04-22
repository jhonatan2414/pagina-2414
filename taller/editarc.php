<?php  

 		$id_c = $_GET['id_c'];
		$nit = $_GET['nit'];
		$nombre = $_GET['nombre'];
		$telefono = $_GET['telefono'];

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
			<form action="actualizarc.php" method="post">
				<div class="form-group">

					<label for="">Id_c</label>
					<input type="text" class="form-control" name="id_c" value="<?php echo $id_c;?>" readonly>
				</div>
                <div class="form-group">
					<label for="">nit</label>
					<input type="text" class="form-control" name="nit" value="<?php echo $nit;?>">
				</div>
				<div class="form-group">
					<label for="">nombre</label>
					<input type="text" class="form-control" name="nombre" value="<?php echo $nombre;?>">
				</div>
				<div class="form-group">
					<label for="">telefono</label>
					<input type="text" class="form-control" name="telefono" value="<?php echo $telefono;?>">
				</div>
				
			<button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		</div>
		<div class="well">
			<center><h3>JHONATAN ANDRES MARTINEZ PEREZ</h3></center>
	</div>
</div>
 </body>
 </html>