<?php 
// El Sistema se asegura de que se reciba una petición AJAX
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require 'conection.php';
	session_start();
	$mysqli->set_charset('utf8');
	$usuarios = "";
// Filtrado de variables
	$user = $mysqli->real_escape_string($_POST['user']);
	$pass = $mysqli->real_escape_string($_POST['password']);

// Ejecución de consultas

$consulta = $mysqli->query("SELECT * FROM usuarios	WHERE Usuario = '".$user."';");

// Comprobación de datos recibidos por las consultas

if($consulta->num_rows == 1) {
	$usuarios = $consulta;
	$datos = $usuarios->fetch_assoc();
}

// Envio de respuesta del servidor

if (($consulta->num_rows == 1) && (password_verify($pass, $datos['Password']))) {
	$_SESSION['user'] = $datos;
	echo json_encode(array('error' => false, 'rol' => $datos['Rol']));
}else{
	echo json_encode(array('error' => true));
}
}

$mysqli->close();	

 ?>