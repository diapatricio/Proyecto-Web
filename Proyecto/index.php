<html>
<body>
<p1>Test de Trono de Cristal</p1>
<p>Contesta las siguientes preguntas para saber que tanto sabes de la saga.</p>
<form method="post" action="respuestas.php">
<?php
include 'conexion.php';

$select = pg_query($conexion, "SELECT idPregunta, pregunta FROM preguntas");
$result = pg_fetch_all($select);

foreach($result as $array)
{
 echo '<td>'. $array['pregunta'].'</td><br>';
}

?>
<input type="submit" value="Enviar">
</form>
</body>
</html>


GRANT ALL PRIVILEGES ON preguntas TO usuario1;


	<style>
{
background-image:url('http://kepfeltoltes.hu/160307/HeirofFireUSWallpaper1366x768_zps2a7c36e3_www.kepfeltoltes.hu_.jpg');
background-repeat:no-repeat;
background-size:cover;

}

	</style>
