<?php
		require_once("conexion.php");
		$s="DELETE from subcategoria where subcategoria_id='".$_GET['var']."'";
		$r=mysql_query($s) or die(mysql_error());
		?><script>
			alert('Subcategoria eliminada');
			window.location.href='../index.php?op=admonbd&ope=subcategoria';
		</script><?php
?>