<?php 
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require 'conection.php';
	session_start();
	$mysqli->set_charset('utf8');
	$query = $mysqli->query("SELECT * FROM proyectos");
	$field = mysqli_num_rows($query);
	$return = "";
	$field = $query->fetch_assoc();

	if ($field > 0) {
		while ($field = $query->fetch_assoc()) {
			$subtext = substr($field['Descripcion'],0, 200 );
			$return.= "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-6' id='".$field['ID']."'><img class='img-responsive' src='".$field['Imagen']."'><h5 class='text-center text-muted'>".$field['Titulo']."</h5><p class='text-center text-muted'>".$subtext."</p><button class='btn btn-primary btn-md btn-block editProjectModal' type='button' name='editProject[]' value='".$field['ID']."' data-toggle='modal' data-target='#editProjectModal'>Editar</button><button class='deleteProjectModal btn btn-danger btn-md btn-block' type='button' data-toggle='modal' data-target='#deleteProjectModal' name='delete[]' value='".$field['ID']."'>Eliminar</button></div>";
		}
	}else{
		$return = "<div class='col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 void-project'><h5 class='text-center text-muted'>No hay datos</h5><br><p class='text-center text-muted'>No existen proyectos cargados</p><br>";
	}

	echo $return;
	
}

$mysqli->close();
 ?>