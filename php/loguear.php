<?php
	require_once("conexion.php");
	$user=$_POST['user_txt'];
	$contrasena=$_POST['pass_txt'];
	$r=mysql_query("SELECT * FROM `persona` WHERE `email` = '$user' AND `contrasena` = '$contrasena'");
	if(mysql_num_rows($r)==0)
	{
		?><script>
			alert("Verifica tus datos o registrate");
			window.location.href='../index.php?op=login';
		</script><?php
	}
	else
	{

		session_start();
		while ($fila = mysql_fetch_assoc($r))
		{
    			$rol= $fila['cod_tipo'];
    			$email=$fila['email'];
					$apodo=explode("@","$user");
		}
			if($rol==1)
			{
				$_SESSION['rol']="user";
			}
			else if($rol==2)
			{
			$_SESSION['rol']="admin";
			}

			$_SESSION['apodo']=$apodo[0];
			$_SESSION['email']=$email;

			?><script>
				alert("Bienvenido");
			window.location.href='../index.php';
			</script><?php
	}
?>
