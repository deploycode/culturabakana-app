<?php
 		require_once("conexion.php");
 		session_start();
 		$s="SELECT * FROM persona WHERE email='".$_POST['email_txt']."'";
 		$res=mysql_query($s);
 		while($fila=mysql_fetch_assoc($res))
 		{
 			$user=$fila['email'];
 		}

 		$consulta="UPDATE persona SET nombre = '$_POST[nombre_txt]', email= '$_POST[email_txt]' , contrasena= '$_POST[contrasena_txt]', telefono= '$_POST[telefono_txt]' WHERE email = '$user'";

      		$exito=mysql_query($consulta);


	    if (!$exito) {
	    	?>
	    		<script>
			alert('No se pudieron actualizar sus datos');
			window.location.href='../index.php?op=editar_usuario';
			</script>

<?php
	    }
	    else
	    {
	    		?>
	    		<script>
			alert('Sus datos han sido actualizados');
			window.location.href='../index.php?op=editar_usuario';
			</script>

<?php
	    }
 ?>
