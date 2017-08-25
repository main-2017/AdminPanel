<?php 
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require 'conection.php';
	session_start();
	$id = $mysqli->real_escape_string($_POST['idProjectDelete']);
	$field = $mysqli->query("SELECT * FROM proyectos WHERE ID ='".$id."';");
	$name = $field->fetch_assoc();
	$path = "../../public/img/";
	$image = $name['Imagen'];
	$query = $mysqli->query("DELETE FROM proyectos WHERE ID ='".$id."';");

	if ($query) {
		unlink($image);
		echo json_encode(array('error' => false));
	}else{
		echo json_encode(array('error' => true));
	}
}

$mysqli->close();
?>