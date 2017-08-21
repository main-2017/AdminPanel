<?php 
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require 'conection.php';
	session_start();
	$mysqli->set_charset('utf8');
	$id = $mysqli->real_escape_string($_POST['id']);
	$nombre = $mysqli->real_escape_string($_POST['nombre']);
	$url = $mysqli->real_escape_string($_POST['url']);
	$titulo = $mysqli->real_escape_string($_POST['titulo']);
	$descripcion = $mysqli->real_escape_string($_POST['descripcion']);
	$alt = $mysqli->real_escape_string($_POST['alt']);

	$update = $mysqli->query("UPDATE slider SET Nombre = '$nombre', URL = '$url', Titulo = '$titulo', Descripcion = '$descripcion', ALT = '$alt' WHERE ID = '$id'; ");

	if ($update) 
		echo json_encode(array('error' => false));
	else
		echo json_encode(array('error' => true));
}

$mysqli->close();

?>