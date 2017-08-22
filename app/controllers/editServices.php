<?php 
if (!empty(['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require 'conection.php';
	session_start();
	$mysqli->set_charset('utf8');
	$searchID = $mysqli->real_escape_string($_POST['input']);
	$query = $mysqli->query("SELECT * FROM servicios WHERE ID = '$searchID'");
	$return = "";
	if ($query->mysqli_num_rows = 1) {
		$array = $query->fetch_assoc();
		$return.="<div class='form-group'>
					<input type='hidden' name='id' class='form-control' readonly  id='id' value='".$array['ID']."'>
					</div>

					<div class='form-group'>
						<label class='text-muted' for='titulo'>Título</label>
						<input type='text' name='titulo' class='form-control' id='titulo' pattern='[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{2,100}' value='".$array['Titulo']."'>
					</div>
					<div class='form-group'>
						<label class='text-muted' for='contenido'>Contenido</label>
						<textarea class='form-control rows='5' maxlength='1000' resize='none'>".$array['Contenido']."</textarea>
					</div>";
		}else{
			$return = "<h3 class='text-muted text-center'>No fue posible hallar el ID solicitado</h3>";
		}

		echo $return;

	}
	$mysqli->close();
?>