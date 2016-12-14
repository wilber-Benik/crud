
<?conexion= mysqli("localhost","root","root");
if($conexion->connect_errno){
	echo"erro al conectar a la bb dd:".
	$conexion->connect_errno.";".
	$conexion->connect_error;
exit();
{else}
	$conexion->mysql_set_charset("utf8");
}
?>