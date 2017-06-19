<?php
		require_once("conexion.php");
		$s="DELETE from persona where email='".$_GET['var']."'";
		$r=mysql_query($s) or die(mysql_error());
		?><script>
			alert('Usuario eliminado');
			window.location.href='../index.php?op=admon_listar';
		</script><?php
?>