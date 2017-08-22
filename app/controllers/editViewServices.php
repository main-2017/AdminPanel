<?php 
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require 'conection.php';
	session_start();
	$mysqli->set_charset('utf8');
	$query = $mysqli->query("SELECT * FROM servicios");
	$field = mysqli_num_rows($query);
	$return = "";
	$field = $query->fetch_assoc();

	if ($field > 0) {
		while ($field = $query->fetch_assoc()) {
			$return.= "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 void-content' id='".$field['ID']."'><h5 class='text-center text-muted'>".$field['Titulo']."</h5><p class='text-center text-muted'>".$field['Contenido']."</p><button class='btn btn-primary btn-md btn-block editServiceModal' type='button' name='editServices[]' value='".$field['ID']."' data-toggle='modal' data-target='#editServicesModal'>Editar</button>";
		}
	}else{
		$return = "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 void-content' id='service-content-1'>
				<h4 class='text-center text-muted align-middle'>Contenido No disponible</h4>
				<button class='btn btn-primary center-block' data-toggle='modal' data-target='#editServicesModal' value='void'>Editar</button>
			</div>
			<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 void-content' id='service-content-2'>
				<h4 class='text-center text-muted align-middle'>Contenido No disponible</h4>
				<button class='btn btn-primary center-block' data-toggle='modal' data-target='#editServicesModal' value='void'>Editar</button>
			</div>
			<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 void-content' id='service-content-3'>
				<h4 class='text-center text-muted align-middle'>Contenido No disponible</h4>
				<button class='btn btn-primary center-block' data-toggle='modal' data-target='#editServicesModal' value='void'>Editar</button>
			</div>
			<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 void-content' id='service-content-4'>
				<h4 class='text-center text-muted align-middle'>Contenido No disponible</h4>
				<button class='btn btn-primary center-block' data-toggle='modal' data-target='#editServicesModal' value='void'>Editar</button>
			</div>";
	}

	echo $return;
	
}

$mysqli->close();
 ?>