<?php
	include('inc/cabecera.php');
	include('inc/menu.php');
	include('inc/conexion.php');
	$sql="SELECT * FROM personas WHERE personas_id={$_GET['id']}";
	$resultado=$conexion->query($sql);
	$fila=$resultado->fetch_assoc();
	print_r($fila);
?>

<div class="container">

	<div class="row">
		<div class="col-md-8">
			<h1>Modificar - Guardar</h1>
			<form class="form-horizontal" method="post" action="modificar-recibe.php">
			<input type="hidden" name="txt-id" id="txt-id" value="<?php  echo $fila['persona_id']?>" >
				<div class="form-group">
					<label for="txt-paterno" class="col-md-2 control-label">Paterno:</label>
					<div class="col-md-2">
						<input type="text" class="form-control" name="txt-paterno" id="txt-paterno" placeholder="Apellido Paterno" value="<?php  echo $fila['paterno']?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="txt-materno" class="col-md-2 control-label">Materno:</label>
					<div class="col-md-2">
						<input type="text" class="form-control" name="txt-materno" id="txt-materno" placeholder="Apellido Materno" value="<?php  echo $fila['materno']?>">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-nombres" class="col-md-2 control-label">Nombres:</label>
					<div class="col-md-2">
						<input type="text" class="form-control" name="txt-nombres" id="txt-nombres" placeholder="Nombres" value="<?php  echo $fila['nombres']?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2 col-md-offset-2">
						<input type="submit" class="btn" name="submit-nuevo" value="Guardar">
					</div>
				</div>				
			</form>
			

			<h1>Listado de Personas</h1>
			<table class='table'>
				<tr>
					<th>id</th>
					<th>Apellidos y Nombres</th>
					<th>Fecha de Creacion</th>
					<th></th>
				</tr>
				<?php
					$consulta=$conexion->query('SELECT p.* FROM personas p');
					while($fila=$consulta->fetch_assoc()){
				 ?>
						<tr>
							<td><?php echo $fila['personas_id'] ?></td>
							<td><?php echo $fila['paterno'].' '.$fila['materno'].' '.$fila['nombres']; ?></td>
							<td><?php echo $fila['fecha_registro']; ?></td>
							<td></td>
						</tr>
					<?php	
					}
				 ?>
			</table>
		</div>
		<div class="col-md-4">
			<div class="alert alert-success">
				<strong>Bienvenidos</strong> al CRUD Personas.
			</div>
		</div>
	</div>

</div>

<?php
	include('inc/scripts.php');
	include('inc/pie.php');
?>