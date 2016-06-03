<?php
session_start();
include "../conexion.php";
$re=mysql_query("select * from usuarios where usuario='".$_POST['usuario']."' AND 
 					Password='".$_POST['password']."'")	or die(mysql_error());
	while ($f=mysql_fetch_array($re)) {
		$arreglo[]=array('nombre'=>$f['Nombre'],
			'apellido'=>$f['apellido'],'imagen'=>$f['Imagen']);
	}
	if(isset($arreglo)){
		$_SESSION['usuario']=$arreglo;
		header("Location: ../admin.php");
	}else{
		header("Location: ../login.php?error=datos no validos");
	}
?>
