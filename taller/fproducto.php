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
			<form action ="guardarp.php" method="post">
				<div class="form-group">
					<label for="">id_p</label>
					<input type="text" class="form-control" name="id_producto">
				</div>
				<div class="form-group">
					<label for="">Proveedor</label>
					<input type="text" class="form-control" name="proveedor">
				</div>

				<div class="form-group">
					<label for="">Descripcion</label>
					<input type="text" class="form-control" name="descripcion">
				</div>
				<div class="form-group">
					<label for="">Precio</label>
					<input type="text" class="form-control" name="precio">
				</div>
				
				<div class="form-group">
					<label for="">existencia</label>
					<input type="text" class="form-control" name="existencia">
				</div>
				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
		<div class="well">
			<center><h3>JHONATAN ANDRES MARTINEZ PEREZ</h3></center>
		</div>
	</div>
</body>
</html>