<!DOCTYPE html>
<html>
<?php require('../../../public/style_includes/head.php') ?>
<body>
	<section class="black-content">
		<img id="errorx" class="img-responsive" src="../../../public/img/error.png" alt="ERROR">
		<h3 class="text-center text-danger">La petición no pudo ser procesada</h3>
		<br>
		<h4 class="text-center text-muted">Vuelva a intentarlo y verifique que los datos ingresados sean correctos</h4>
		<br>
		<br>
		<a style="width: 200px;" class="btn btn-danger center-block" href="index.php" title="Regresar al inicio">Regresar</a>
		<?php include('../../components/footer.php') ?>
		<?php require('../../../public/style_includes/scripts.php') ?>
	</section>
</body>
</html>