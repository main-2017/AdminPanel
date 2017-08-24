<?php 
	require 'conection.php';
	session_start();
	$mysqli->set_charset('utf8');
	$url = "";
	$titulo = $mysqli->real_escape_string($_POST['titulo']);
	$descripcion = $mysqli->real_escape_string($_POST['descripcion']);
	$estado = $mysqli->real_escape_string($_POST['estado']);
	$visible = $mysqli->real_escape_string($_POST['visible']);
	$visible = (int) $visible;
	$uploadedfileload="true";
	$uploadedfile_size=$_FILES['uploadedfile2']['size'];
	echo $_FILES['uploadedfile2']['name'];
	$msg = "";
	$url = "../../../public/img/";
	if ($uploadedfile_size > 200000){
		$msg = $msg ."El archivo supera el tamaño máximo permitido.";
		$uploadedfileload="false";
	}

	if (!($_FILES['uploadedfile2']['type'] == "image/jpeg" OR $_FILES['uploadedfile2']['type'] == "image/png")){
		$msg = $msg ." El archivo debe ser JPG o PNG. Otros archivos no son permitidos";
		$uploadedfileload="false";
	}

	$file_name=$_FILES['uploadedfile2']['name'];
	$add = "../../public/img/$file_name";
	if($uploadedfileload == "true"){
		if(move_uploaded_file ($_FILES['uploadedfile2']['tmp_name'], $add)){
			echo "Ha sido subido satisfactoriamente";
			$query = $mysqli->query("INSERT INTO proyectos (Imagen, Titulo, Descripcion, Estado, Visible) VALUES ('../../../public/img/".$_FILES['uploadedfile2']['name']."', '".$titulo."', '".$descripcion."', '".$estado."', '".$visible."')");
		}

		if($query)
			header("Location: ../../resources/views/admin/index.php");
		else
			header("Location: ../../resources/views/admin/error.php");

	}else{
		echo $msg;
	}


	$mysqli->close();

 ?>