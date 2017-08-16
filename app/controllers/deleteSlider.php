<?php 
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require 'conection.php';
	session_start();
	$id = $mysqli->real_escape_string($_POST['idSliderDelete']);
	$field = $mysqli->query("SELECT * FROM slider WHERE ID ='".$id."';");
	$name = $field->fetch_assoc();
	$path = "../../public/img/";
	$image = $name['Nombre'];
	$query = $mysqli->query("DELETE FROM slider WHERE ID ='".$id."';");

	if ($query) {
		unlink($path.$image);
		echo json_encode(array('error' => false));
	}else{
		echo json_encode(array('error' => true));
	}
}

$mysqli->close();
?>