<?php
	include('inc/conexion.php');

	$sql="DELETE FROM personas WHERE personas_id={$_GET['id']}";

	$resultado=$conexion->query($sql);
	if($resultado){
		header("Location:listar.php");
	}else{
		header("Location:nuevo.php");
	}
?>