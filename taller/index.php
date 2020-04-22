<?php 

$db = new PDO('mysql:host=localhost;dbname=taller','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>JHONATAN ANDRES MARTINEZ PEREZ</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/vistas.js"></script>

    <meta charset="utf-8">
	
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
 
  <div class="navbar-header">
 
    <div<a class="navbar-brand" href="#"> <div><img src="img/JPEG image.jpg" width="100" height="35"></div></a></div>
 
  
					<div id="busqueda">

						<input type="text" id= "txtbusqueda" placeholder="cliente" style="width: 200px;">
						<button type="button" onclick="cliente();">Buscar</button>
				
					</div>
 
					</div>
  </nav>
     
    
	
			
    <div class="container">
		
		<div class="jumbotron">
		
			<center><h2>PANEL CENTRAL</h2></center>
		</div>
		<div class="xxx">
			<table class="table table-hover table-striped"> 
				<tr>
				<div class="btn-group btn-group-justified">
  


				<a href="cliente.php" class="btn btn-primary"> CLIENTE</a>
			<a href="producto.php" class="btn btn-primary"> PRODUCTO</a>
			<a href="proveedor.php" class="btn btn-primary"> PROVEEDOR</a>
			<a href="login.php" class="btn btn-primary"> SALIR</a>
			
			</div>
			</div>
				</tr>
				<?php foreach ($cliente  as $c):?>
                    <?php foreach ($proveedor  as $pro):?>
                            <?php foreach ($producto  as $p):?>
								<?php foreach ($login  as $l):?>
					
					<tr>
						
				
					<td>
							<a href="cliente.php?
										id-c=<?php echo $c->id_c?>&
										nombre=<?php echo $c->nombre?>&
										apellido=<?php echo $c->apellido?>&
										direccion=<?php echo $c->direccion?>&
										telefono=<?php echo $c->telefono?>"></a>
									</td>
										
						<td>
						<a href="proveedor.php?
										
										id_pro=<?php echo $pro->id_pro?>&
										nombre=<?php echo $pro->nombre?>&
										descripcion=<?php echo $pro->descripcion?>&
										telefono=<?php echo $pro->telefono?>"></a>
										</td>
									
									<td>
						<a href="producto.php?
										
										id_p=<?php echo $p->id_p?>&
										proveedor=<?php echo $p->proveedor?>&
										descripcion=<?php echo $p->descripcion?>&										
										precio=<?php echo $p->precio?>&
										existencia=<?php echo $p->existencia?>"></a>
										

									</td>
									<td>
										
						<a href="login.php?
										
										codigo=<?php echo $l->codigo?>&
										usuario=<?php echo $l->usuario?>&
										contraseña=<?php echo $l->contraseña?>"></a>
									

										</td>
									

									<td>
									
					
						</td>
					</tr>
				<?php endforeach; ?>
                <?php endforeach; ?>
                <?php endforeach; ?>
                <?php endforeach; ?>
				
				
			</table>
			<nav>
		<center>
		<link rel="stylesheet" type="text/css" href="css/inicio.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/vistas.js"></script>
				
				
		<script type="text/javascript">
		$(function(){

			$("#slider div:gt(0)").hide();

			setInterval(function(){
				$("#slider div:first-child").fadeOut(1000)
				.next("div").fadeIn(1000)
				.end().appendTo("#slider");
			},3000);

		})

	</script>
<body>

	<div id="ContInicio">
		

			
			</div>
		
			<div id="slider">
				<div><img src="img/barsa.jpg" width="900" height="200"></div>
				<div><img src="img/JPEG image.jpg" width="900" height="200"></div>
			
			</div>

				
			</div>

	</div>


</body>
		</center>
		</nav>
		</div>
		
		<div>
			
		</div>
		<div class="well">
			<center><h3>JHONATAN ANDRES MARTINEZ PEREZ</h3></center>
		</div>
								</div>
</body>
</html>