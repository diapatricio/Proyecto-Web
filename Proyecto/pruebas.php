<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>Librería</title>
	<link rel="stylesheet" type="text/css" href="./bs/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="pruebas.css">

	<style type="text/css">
body{
background-color: #FFFFFF;
}
ul{
width: 820px;
margin:0 auto;
margin-top: 0px;
margin-down: 200px;
}
ul li{
list-style: none;
}
ul li img{
background-size: cover;
border-radius: 6px;
float: left;
margin-right: 50px;
margin-top: 40px;
opacity: .6;
width: 360px;
height: 260px;
-webkit-transition:all .6s ease;
}
ul li img:hover{
opacity: 1;
border-radius: 20px;
-webkit-transform:scale(1.25) rotate(360deg);
box-shadow: 0px 0px 20px #ddd;
}
</style>
	
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
				<img id="logo" alt="" src="logo.png" >
		</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<form class="navbar-form navbar-right" role="menu">
			<button type="submit" class="contacto">Contacto</button>
			<button type="submit" class="iniciar-sesion">Iniciar sesión</button>
			<button type="submit" class="registrarse">Registrarse</button>
			<button type="button" class="carrito" aria-label="Left Align">
				<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
			</button>
		</form>
    </div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>


<ul>
<li><a href="vendido.php">  	<img src="uno.jpg"> 	<a> </li>
<li><a href="recomienda.php">	<img src="dos.jpg">		<a> </li>
<li><a href="ofertas.php">		<img src="tres.jpg"> 	<a> </li>
<li><a href="novedades.php">	<img src="cuatro.jpg"> 	<a> </li>
</ul>
	
</body>
</html>