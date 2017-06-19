<?php
	require_once("conexion.php");
	session_start();
/*foreach ($_FILES["archivo_fls"] as $clave => $valor) {
			echo "Propiedad: $clave --- Valor: $valor <br>";
		}*/
		$archivo=$_FILES["archivo_fls"]["tmp_name"];
		$destino="../userimg/".$_FILES["archivo_fls"]["name"];
		move_uploaded_file($archivo, $destino);

		$s="insert into galeria(cod_anuncio) 
		values(
	   '$_GET['anuncio_id']',
	   )";
		$e1=mysql_query($s) or die(mysql_error()); 

?>