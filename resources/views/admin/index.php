<?php 
//session_start();

//if (isset($_SESSION['user'])) {
//	if ($_SESSION['user']['Rol'] == 'Editor') {
//		header('Location: ../../../editor/');
//	}
//}else{
//	header('Location: index.php');
//}
?>

<!DOCTYPE html>
<html>
<?php require('../../../public/style_includes/head.php') ?>
<body>
	<?php include('../../components/navbar.php') ?>
	<?php include('../../components/footer.php') ?>
	<?php require('../../../public/style_includes/scripts.php') ?>
	<!-- Barra de pestañas -->
	<ul class="nav nav-tabs" id="pestañas">
		<li class="active"><a id="btn-inicio" href="#inicio" data-toggle="tab">Inicio</a></li>
		<li><a id="btn-historia" href="#historia" data-toggle="tab">Historia</a></li>
		<li><a id="btn-servicios" href="#servicios" data-toggle="tab">Servicios</a></li>
		<li><a id="btn-proyectos" href="#proyectos" data-toggle="tab">Proyectos</a></li>
	</ul>
	<!-- Fin de Barra de pestañas -->
	<!-- Contenido en tabs -->
	<section id="inicio" class="tab-pane fade in active">
		<div class="container-fluid">
			<h1 class="text-center text-muted">Editar Slider</h1>
			<div id="slider-edit-content">
				
			</div>
		</div>
	</section>
	<section id="historia" class="tab-pane fade"><h1 class="text-center">Historia</h1></section>
	<section id="servicios" class="tab-pane fade"><h1 class="text-center">Servicios</h1></section>
	<section id="proyectos" class="tab-pane fade"><h1 class="text-center">Proyectos</h1></section>

</body>
</html>