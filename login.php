<?php
//COneixion
include_once "conexion.php";

//Obteniendo datos
$user = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$clave = isset($_POST['clave']) ? $_POST['clave'] : '';
//Consulta SQL
$sql = "SELECT * FROM usuarios WHERE Correo='$user' AND Clave='$clave'";

$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {
	session_start();
	$_SESSION['admin'] = $data;
	header("Location:home.php");
} else {
	session_start();
	$_SESSION['error'] = "error";
	header("Location:index.php");
}

?>