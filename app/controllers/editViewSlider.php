<?php 
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require 'conection.php';
	session_start();
	$mysqli->set_charset('utf8');
	$query = $mysqli->query("SELECT * FROM slider");
	$field = mysqli_num_rows($query);
	$return = "";

	if ($field > 0) {
		while ($field = $query->fetch_assoc()) {
			$return.= "<div class='col-lg-4 col-md-4 col-sm-6 col-xs-6 label-slider-edit'><img id='slider-img-".$field['ID']."' src='".$field['URL']."' class='img-responsive'><h5 class='text-center text-muted'>".$field['Titulo']."</h5><h6 class='text-center text-muted'>".$field['Descripcion']."</h6><button class='btn btn-primary btn-md btn-block editModal' type='button' name='edit[]' value='".$field['ID']."' data-toggle='modal' data-target='#editSlider'>Editar</button><button class='deleteModal btn btn-danger btn-md btn-block' type='button' data-toggle='modal' data-target='#deleteModal' name='delete[]' value='".$field['ID']."'>Eliminar</button></div>";
		}
	}else{
		$return = "</br><h4 class='text-muted text-center'>No hay datos para mostrar</h4>";
	}

	echo $return;
	
}

$mysqli->close();
 ?>