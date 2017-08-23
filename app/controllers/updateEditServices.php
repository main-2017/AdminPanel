<?php 
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require 'conection.php';
	session_start();
	$mysqli->set_charset('utf8');
	$id = $mysqli->real_escape_string($_POST['id']);
	$titulo = $mysqli->real_escape_string($_POST['titulo']);
	$contenido = $mysqli->real_escape_string($_POST['contenido']);
	
	$update = $mysqli->query("UPDATE servicios SET Titulo = '$titulo', Contenido = '$contenido' WHERE ID = '$id'; ");

	if ($update) 
		echo json_encode(array('error' => false));
	else
		echo json_encode(array('error' => true));
}

$mysqli->close();

?>