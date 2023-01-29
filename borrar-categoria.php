<?php
require_once 'includes/conexion.php';

if(isset($_SESSION['usuario']) && isset($_GET['id'])){
	$categoria_id = $_GET['id'];
	
	$sql = "DELETE FROM categorias WHERE id = $categoria_id";
	$borrar = mysqli_query($db, $sql);
}

header("Location: index.php");
