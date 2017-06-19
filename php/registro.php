
<?php
		error_reporting(E_ALL ^ E_WARNING AND E_NOTICE);
		require_once("conexion.php");
?>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
		
	</head>
	<body>
		
		<section class="contenedor">
		<fieldset>
			<legend>Registro de Usuario</legend>
		
			
			<a href="../index.php?op=login">¿Ya tienes una cuenta?</a>
			<form id="registro" name="registro" action="index.php/registrar.php" method="POST" class="formulario">
				
					<table class="tabla">
							<tr>
								<input type="text" id="nombre_txt" name="nombre_txt" class="caja" placeholder="Nombres" required>
								
								<input type="text" id="apellido_txt" name="apellido_txt" class="caja" placeholder="Apellidos" required>
																							
								<input type="text" id="email_txt" name="email_txt" class="caja" placeholder="Email" required>
								
								<input type="text" id="telefono_txt" name="telefono_txt" class="caja" placeholder="Teléfono" required>
							
								<input type="password" id="constrasena_txt" name="contrasena_txt" class="caja" placeholder="Contraseña" required>	
								
								<input type="password" id="constrasena_txt" name="contrasena_txt" class="caja" placeholder="Confirma tu contraseña" required>			
										
								<input type="submit" id="registro_btn"  name="registro_btn" value="Registarme">
						
								<input type="button" id="cancelar_btn"  name="cancelar_btn" value="Cancelar" onClick="location.href = '../index.php'" >
							</td>
						</tr>
					</table>
				
			</form>


		</section>
	</body>
</html>