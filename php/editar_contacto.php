<?php

	$consulta="select * from empresa where titulo_empresa='contacto'";
	$resultado=mysql_query($consulta)or die(mysql_error());
	while ($campo=mysql_fetch_assoc($resultado))
	{?>
		<div class="mediano">
			<form name="userinfo_frm" action="php/actualizar_empresa.php" method="POST" class="formulario">
				<div class="izquierda">

				<textarea name="texto_txa" style="background-color: white; height: 165px;"  placeholder="Aqui una descipción" > <?php echo $campo['texto_empresa'] ?> </textarea>
				<input type="hidden"  name="campo" value="contacto">

				</div>
					<input type="submit" class="boton" name="guardar_btn" id="guardar_btn" value="Guardar">
					<input type="button" class="boton" name="cancelar_btn" id="cancelar_btn"  value="Cancelar" onClick="location.href = 'index.php'">




			</form>
		</div>
<?php
	};
	?>
