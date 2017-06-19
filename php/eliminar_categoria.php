<?php
		require_once("conexion.php");
		$s="DELETE from categoria where categoria_id='".$_GET['var']."'";
		$r=mysql_query($s) or die(mysql_error());
		?><script>
			alert('Categoria eliminada');
			window.location.href='../index.php?op=admonbd&ope=categoria';
		</script><?php
?>