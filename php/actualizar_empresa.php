
<?php
		error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
 		include("conexion.php");
 		session_start();
		$campo=$_POST['campo'];
 		$consulta="UPDATE empresa SET texto_empresa= '$_POST[texto_txa]' WHERE titulo_empresa = '$campo'";
    $exito=mysql_query($consulta) or die(mysql_error());

	    if (!$exito ) {
	    	echo "No se pudieron actualizar tus datos";
	    	die(mysql_error());
	    }
	    else
	    {
	    	?>
			<script>
			alert('Datos Actualizados');
			window.location.href='../index.php?op=<?php echo $campo; ?> ';
			</script>
			<?php

	    }
?>
