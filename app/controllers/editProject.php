<?php 
if (!empty(['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require 'conection.php';
	session_start();
	$mysqli->set_charset('utf8');
	$searchID = $mysqli->real_escape_string($_POST['input']);
	$query = $mysqli->query("SELECT * FROM proyectos WHERE ID = '".$searchID."';");
	$return = "";

	if ($query->num_rows == 1) {
			$array = $query->fetch_assoc();
			$return.="<div class='form-group'>
						<input type='hidden' name='id' class='form-control' readonly  id='id' value='".$array['ID']."'>
						</div>
		
						<div class='form-group'>
							<label class='text-muted' for='titulo'>Título</label>
							<input type='text' name='titulo' class='form-control' id='titulo' pattern='[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+{2,100}' value='".$array['Titulo']."' required>
						</div>
						<div class='form-group'>
							<label class='text-muted' for='descripcion'>Descripción</label>
							<textarea class='form-control' rows='10' resize='none' name='descripcion'>".$array['Descripcion']."</textarea>
						</div>";
						if ($array['Estado'] == 'Terminado') {
							$return.= "<select name='estado' class='form-control'>
										<option selected value='Terminado'>Terminado</option>
		  								<option value='En ejecucion'>En ejecución</option>
									 </select>";
						}else{
							$return.= "<select name='estado' class='form-control'>
		  								<option selected value='En ejecucion'>En ejecución</option>
										<option value='Terminado'>Terminado</option>
									 </select>";
						}

						if ($array['Visible'] == 1) {
									$return.= "<br><div class='radio'><label><input checked type='radio' name='visible' value='1'>Visible</label></div> <div class='radio'><label><input type='radio' name='visible' value='0'>No visible</label></div>";
							
						}else{
							$return.= "<br><div class='radio'><label><input type='radio' name='visible' value='1'>Visible</label></div> <div class='radio'><label><input checked type='radio' name='visible' value='0'>No visible</label></div>";
							
						}
	}else{
			$return = "<h3 class='text-muted text-center'>No fue posible hallar el ID solicitado</h3>";
	}
	
		echo $return;

	}
	$mysqli->close();
?>