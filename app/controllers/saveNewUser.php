 <?php 
 if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require('conection.php');
	session_start();
	
	$nombre = $mysqli->real_escape_string($_POST['nombre']);
	$username = $mysqli->real_escape_string($_POST['username']);
	$pass = $mysqli->real_escape_string($_POST['password']);
	$passVerify = $mysqli->real_escape_string($_POST['passwordValidate']);
	$rol = $mysqli->real_escape_string($_POST['rol']);
	$exist = $mysqli->query("SELECT * FROM usuarios WHERE Usuario ='".$username."';");
	$cryptPass;
	$load;
	
	if (strcmp($pass, $passVerify)!== 0) {
		echo json_encode(array('error'=>true, 'msg'=>'Las contraseñas no coinciden'));
	}else{
		if ($exist->num_rows > 0) {
			echo json_encode(array('error'=>true, 'msg'=>'El nombre de usuario ya está en uso'));
		}else{
			$cryptPass = password_hash($pass, PASSWORD_DEFAULT);
			$load = $mysqli->query("INSERT INTO usuarios(Nombre, Usuario, Password, Rol) VALUES('".$nombre."','".$username."','".$cryptPass."', '".$rol."');");
			if ($load) {
				echo json_encode(array('error'=>false));
			}else{
				echo json_encode(array('error'=>true));
			}

		}
	}
}

 $mysqli->close();
 ?>