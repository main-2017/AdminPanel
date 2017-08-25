<?php 
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require 'conection.php';
	session_start();
	$mysqli->set_charset('utf8');
	$id = $mysqli->real_escape_string($_POST['id']);
	$titulo = $mysqli->real_escape_string($_POST['titulo']);
	$descripcion = $mysqli->real_escape_string($_POST['descripcion']);
	$estado = $mysqli->real_escape_string($_POST['estado']);
	$visible = $_POST['visible'];
	
	$update = $mysqli->query("UPDATE proyectos SET Titulo = '$titulo', Descripcion = '$descripcion', Estado = '$estado', Visible = '$visible' WHERE ID = '$id'; ");

	if ($update) 
		echo json_encode(array('error' => false));
	else
		echo json_encode(array('error' => true));
}

$mysqli->close();

?>