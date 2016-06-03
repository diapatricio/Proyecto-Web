

<?php

$nombre = $_POST['nombre'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$ubicacion_tmp = $_FILES['foto']['tmp_name'];
$nombre_archivo = $_FILES['foto']['name'];
$precio = $_POST['precio'];
$tipo_archivo = $_FILES['foto']['type'];
$tamano_archivo = $_FILES['foto']['size'];
$error_archivo = $_FILES['foto']['error'];

$destino_final= './productos/';


$servername = "localhost";
$username = "admin";
$password = "hola1234";
$dbname = "carrito";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$sql ="INSERT INTO libro (nombre, autor, editorial, imagen, precio) VALUES ('$nombre','$autor', '$editorial', '$nombre_archivo', $precio)";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo producto agregado";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

move_uploaded_file($ubicacion_tmp,$destino_final.$_FILES['foto']['name']);

?>
