<?php
	$email=$_POST["email_txt"];
	$consulta_eliminar="DELETE FROM `publicarchoco`.`persona` WHERE `persona`.`email` = '".$email."'";	
    $ejecutar_consulta=$conexion->query($consulta_eliminar) or die ("registro inexistente");   
 ?> 