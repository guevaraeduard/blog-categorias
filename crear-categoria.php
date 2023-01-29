<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>	
<?php require_once 'includes/lateral.php'; ?>
<?php require_once 'includes/helpers.php';?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Crear categorias</h1>
	<p>
		Añade nuevas categorias al blog para que los usuarios puedan
		usarlas al crear sus entradas.
	</p>
	<br/>
	<?php if(isset($_SESSION['error_categoria'])): ?>
			<?=mostrarError($_SESSION['error_categoria'], 'nombre')?>			
	<?php endif; ?>
			
	<form action="guardar-categoria.php" method="POST">
		<label for="nombre">Nombre de la categoría:</label>
		<input type="text" name="nombre" />
		
		<input type="submit" value="Guardar" />
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>