
<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
			      <h4 class="navbar-brand" id="text-logo"><strong>Main</strong>Panel</h4>
			</div>
			<br>
			<div id="btn-content" class="btn-group pull-right">
			  <button id="btn-menu" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			   <?php echo $_SESSION['user']['Nombre'] ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
			    <li class="disabled"><a href="#">Panel</a></li>
			    <li><a href="management.php">Gestión de usuarios</a></li>
			    <li role="separator" class="divider"></li>
			    <li><a href="../../../app/controllers/logout.php">Cerrar sesión</a></li>
			  </ul>
			</div>
		</div>
</nav>