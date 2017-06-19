<?php
	require_once("conexion.php");
	$s="insert into subcategoria(subcategoria_nombre,categoria_cod) 
		values(
	   '$_POST[subcategoria_txt]',
	   '$_POST[categoria_slc]'
	   )";
		$e1=mysql_query($s) or die(mysql_error());  
			?><script>
			alert('Registro Exitoso');
			window.location.href='../index.php?op=admonbd&ope=subcategoria';
			</script><?php
?>