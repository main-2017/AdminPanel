<?php 
session_start();

if (!(isset($_SESSION['user']))) {
	header('Location: ../../../');
}
?>

<!DOCTYPE html>
<html>
	<?php require('../../../public/style_includes/head.php') ?>
<body>
	<?php include('../../components/navbar.php') ?>
	<h3 class="text-center text-muted">Agregar Nuevos Usuarios</h3>
	<br>
	<div id="successUser" class="alert alert-success text-center" style="display: none;">Datos guardados correctamente.</div>
      <div id="errorUser" class="alert alert-danger text-center" style="display: none;">Ocurrió un error durante la operación. Vuelva a intentarlo</div>
	<div class="col-lg-8 col-md-8 col-sm-6 col-xs-6 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 col-xs-offset-3">
		<form role="form" id="addUser">
			<div class="form-group">
				<input class="form-control" type="text" name="nombre" placeholder="Nombre">
				<input type="text" name="username" placeholder="Nombre de usuario" class="form-control">
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="password" placeholder="Contraseña">
				<input type="password" name="passwordValidate" placeholder="Repita la contraseña" class="form-control">
			</div>
			<!-- <div class="form-group">
				<select class="form-control" name="rol">
					<option class="form-control" value="Administrador">Administrador</option>
					<option class="form-control" value="Editor">Editor</option>
				</select>
			</div> -->
			<input type="hidden" name="rol" value="Administrador">
			<div class="form-group">
				<button id="enviar" type="submit" class="btn btn-success">Guardar</button>
				<button type="reset" class="btn btn-danger">Borrar</button>
			</div>
		</form>
	</div>
	<?php include('../../components/footer.php') ?>
	<?php require('../../../public/style_includes/scripts.php') ?>
</body>
</html>