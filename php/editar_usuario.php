<?php
	$user=$_SESSION['email'];
	$consulta="select * from persona where email ='$user'";
	$resultado=mysql_query($consulta)or die(mysql_error());
	while ($campo=mysql_fetch_assoc($resultado))
	{?>
		<div class="mediano">
			<form name="userinfo_frm" action="php/actualizar_usuario.php" method="POST" class="formulario">
				<div class="izquierda">

					<label>Nombre</label>
					<input type="text" class="caja" name="nombre_txt" id="nombre_txt" placeholder="Nombre" value="<?php echo $campo['nombre'] ;?>" required>
					<label>Correo Electrónico</label>
					<input type="text" class="caja" name="email_txt" id="email_txt" placeholder="Email" value="<?php echo $campo['email'] ;?>" required>
					<label>Contraseña</label>
					<input type="text" class="caja" name="contrasena_txt" id="contrasena_txt" placeholder="Contraseña" value="<?php echo $campo['contrasena'] ;?>" required>
					<label>Teléfono</label>
					<input type="text" class="caja" name="telefono_txt" id="telefono_txt" placeholder="Teléfono" value="<?php echo $campo['telefono'] ;?>" size="60">
				</div>
					<input type="submit" class="boton" name="guardar_btn" id="guardar_btn" value="Guardar">
					<input type="button" class="boton" name="cancelar_btn" id="cancelar_btn"  value="Cancelar" onClick="location.href = 'index.php'">




			</form>
		</div>
<?php
	};
	?>
