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
			$return.= "<div class='col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 void-project' id='".$field['ID']."'><h5 class='text-center text-muted'>".$field['Titulo']."</h5><p class='text-center text-muted'>".$field['Descripcion']."</p><button class='btn btn-primary btn-md btn-block editProjectModal' type='button' name='editProject[]' value='".$field['ID']."' data-toggle='modal' data-target='#editProjectModal'>Editar</button>";
		}
	}else{
		$return = "<div class='col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 void-project'><h5 class='text-center text-muted'>No hay datos</h5><br><p class='text-center text-muted'>No existen proyectos cargados</p><br><button class='btn btn-primary btn-md center-block' type='button' name='addProject' data-toggle='modal' data-target='#uploaderProjectModal'>Agregar +</button>";
	}

	echo $return;
	
}

$mysqli->close();
 ?>