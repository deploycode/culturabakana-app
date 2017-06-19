<?php
	$apodo=explode("@","$_POST[email_txt]");
	require_once("conexion.php");
	 	$s1="insert into persona(nombre,email, telefono, apodo,contrasena,cod_tipo) 
		values(
	   '$_POST[nombre_txt]',
	   '$_POST[email_txt]',
	   '$_POST[telefono_txt]',
	   '$apodo[0]',
	   '$_POST[pass_txt]',
	    1
	   )";
	
	

	$e1=mysql_query($s1); 
	 
   

   
	if (!$e1)
	{
		?>
		<script>
			alert('Usuario existente');
			window.location.href='registro.php';
		</script>
		<?php
	} else
	{
		session_start();
		$_SESSION['email']=$_POST['email_txt'];
		$_SESSION['apodo']=$apodo[0];
		$_SESSION['rol']="user";
		?><script>
			alert('Registro Exitoso');
			window.location.href='../index.php';
		</script><?php

	}
/*		if ($_REQUEST['direccion']<>"z80")
		header("Location: pagina1.php");
		Otra cosa interesante que podemos hacer es pasar como parámetro en la segunda página un código de error:
		if (!$_REQUEST['$e1'])
		header("Location: registro.php?error=1");
		Y luego en la primera página mostrar un mensaje de error si es que la página recibe este parámetro:
		if (isset($_REQUEST['error']))
		echo "Usuario existente"; */
?>