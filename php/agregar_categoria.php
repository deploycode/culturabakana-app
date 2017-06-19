<?php
	require_once("conexion.php");
	$s="insert into categoria(categoria_nombre) 
		values(
	   '$_POST[categoria_txt]'
	   )";
		$e1=mysql_query($s) or die(mysql_error());  
			?><script>
			alert('Registro Exitoso');
			window.location.href='../index.php?op=admonbd&ope=categoria';
			</script><?php
?>