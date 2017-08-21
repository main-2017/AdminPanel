<?php 
if (!empty(['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
 	require 'conection.php';
 	session_start();
 	$mysqli->set_charset('utf8');
 	$searchID = $mysqli->real_escape_string($_POST['input']);
	$query = $mysqli->query("SELECT * FROM slider WHERE ID = '$searchID'");
	$return = '';
	if ($query->mysqli_num_rows = 1) {
		$array = $query->fetch_assoc();
		$return.= "<div class='form-group'>
					<input type='hidden' name='id' class='form-control' readonly  id='id' value='".$array['ID']."'>
					</div>

					<div class='form-group'>
						<label class='text-muted' for='nombre'>Nombre</label>
						<input type='text' name='nombre' class='form-control' id='nombre' pattern='[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{2,100}' value='".$array['Nombre']."'>
					</div>
					<div class='form-group'>
						<label class='text-muted' for='url'>URL</label>
						<input type='text' name='url' class='form-control' id='url'  value='".$array['URL']."'>
					</div>
					<div class='form-group'>
						<label class='text-muted' for='titulo'>Título</label>
						<input type='text' name='titulo' class='form-control' id='titulo' pattern='[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{2,100}' value='".$array['Titulo']."'>
					</div>
					<div class='form-group'>
						<label class='text-muted' for='descripcion'>Descripción</label>
						<input type='text' name='descripcion' class='form-control' id='descripcion' pattern='[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{2,100}' value='".$array['Descripcion']."'>
					</div>
					<div class='form-group'>
						<label class='text-muted' for='alt'>ALT</label>
						<input type='text' name='alt' class='form-control' id='alt' pattern='[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{2,100}' value='".$array['ALT']."'>
					</div>";
		}else{
			$return = "<h3 class='text-muted text-center'>No fue posible hallar el ID solicitado</h3>";
		}

		echo $return;
 }
 	$mysqli->close(); 
 ?>