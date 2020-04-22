<?php  

         $id_p = $_GET['id_p'];
         $proveedor = $_GET['proveedor'];
		$descripcion = $_GET['descripcion'];
        $precio = $_GET['precio'];
        $existencia = $_GET['existencia'];

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
			<form action="actualizarp.php" method="post">
				<div class="form-group">

					<label for="">Id_p</label>
					<input type="text" class="form-control" name="id_p" value="<?php echo $id_p;?>" readonly>
				</div>
                <div class="form-group">
					<label for="">Proveedor</label>
					<input type="text" class="form-control" name="proveedor" value="<?php echo $proveedor;?>">
				</div>
				<div class="form-group">
					<label for="">Descripcion</label>
					<input type="text" class="form-control" name="descripcion" value="<?php echo $descripcion;?>">
				</div>
				<div class="form-group">
					<label for="">Precio</label>
					<input type="text" class="form-control" name="precio" value="<?php echo $precio;?>">
				</div>
				
				<div class="form-group">
					<label for="">Existencia</label>
					<input type="text" class="form-control" name="existencia" value="<?php echo $existencia;?>">
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