<?php
		require_once("conexion.php");
		$s="DELETE from anuncio where anuncio_id='".$_GET['anuncio_id']."'";
		$r=mysql_query($s) or die(mysql_error());
		?><script>
			alert('Anuncio Eliminado');
			window.location.href='../index.php?op=paneluser';
		</script><?php
?>