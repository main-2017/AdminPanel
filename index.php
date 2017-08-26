<?php 
	session_start();
	
	if (isset($_SESSION['user'])) {
		if ($_SESSION['user']['Rol'] =='Administrador') {
			header('Location: resources/views/admin');
		}
	}

 ?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Main Group - Agustin Ducca Pantaleon">
	<meta name="descrption" content="Panel de administracion web diseñado y desarrollado por Main Group">
	<title>Main Panel</title>
	<link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/style.css">
</head>
<body>
	<section class="main-content">
	<main id="wrap">
		<div id="errorLogin" class="alert alert-danger text-center">Los datos ingresados no corresponden a ningún usuario</div>
			<form role="form" id="login" class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-12">
			<h4 class="text-center text-muted">Inicie Sesión</h4>
					<div class="form-group">
						<br>
						<input class="form-control" type="text" name="user" placeholder="Nombre de usuario" required pattern="[A-Za-z0-9]+{2, 50}">
						<br>
						<input class="form-control" type="password" name="password"  placeholder="Contraseña" required autocomplete="off" pattern="[A-Za-z0-9\.-_]+{8, 70}">
					</div>
					<div class="form-group">
						<button id="submit" type="submit" class="btn btn-primary btn-md btn-block">Ingresar</button>
					</div>
				</form>
	</main>
		<footer>
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<h5 class="text-center text-muted">Desarrollado por <a href="http://www.main-group.net/" title="Main Group">Main Group</a> | <a href="#" >Términos y Condiciones</a> | Version 0.0.1</h5>
				</div>
		</footer>
	</section>
	<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/main.js"></script>
<script type="text/javascript" src="app/routes/ajaxRequestsRoutes.js"></script>
<script type="text/javascript" src="app/controllers/sendDataAjax.js"></script>

</body>
</html>