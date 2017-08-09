<?php 
//session_start();

//if (isset($_SESSION['user'])) {
//	if ($_SESSION['user']['Rol'] == 'Editor') {
//		header('Location: ../../../editor/');
//	}elseif ($_SESSION['user']['Rol'] == 'Administrador') {
//		header('Location: ../../../admin/');
//	}
//}else{
//		header('Location: index.php');

//}

?><!DOCTYPE html>
<html>
	<?php require('../../../public/style_includes/head.php') ?>
<body>
	<section class="main-content">
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
				<?php include('../../components/footer.php') ?>
	</section>
	<?php require('../../../public/style_includes/scripts.php') ?>
</body>
</html>