<!DOCTYPE html>
<html lang="es">
<head>
	
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<h1><img id="logo" src="./imagenes/logo.png"></h1>
		<h1>Detalles</h1>
		<a href="carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		
	<?php
		
		include 'conexion.php';

		$re=mysql_query("select * from libro where id_producto=".$_GET['id_producto']);
		while ($f=mysql_fetch_array($re)) {
		?>
			
			<center>
				<img id="producto" src="./productos/<?php echo $f['imagen'];?>"><br>
				<span><?php echo $f['nombre'];?></span><br>
				<span>Precio: <?php echo $f['precio'];?></span><br>
				<a href="carritodecompras.php?id_producto=<?php  echo $f['id_producto'];?>">Añadir al carrito de compras</a>
			</center>
		
	<?php
		}
	?>
		
		

		
	</section>
<a href="http://tsuna.cloudapp.net/index.php">Regresar</a>
</body>
</html>
