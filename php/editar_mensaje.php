<?php
	$s="select * from empresa WHERE titulo_empresa='mensaje'";
	$r=mysql_query($s) or die(mysql_error());
	while ($fila=mysql_fetch_assoc($r))
	{?>

		<form name="anuncio_frm" action="php/actualizar_empresa.php" method="POST" >

			<div class="derecha">
				<input type="hidden"  name="campo" value="mensaje">
				<input type="submit" class="boton" value="Guardar ">
				<input type="button" class="boton" value="Cancelar" onClick="location.href = 'index.php'">
			</div>
			<textarea name="texto_txa" class="textarea" cols="160"  rows="20"> <?php echo $fila['texto_empresa'];?></textarea>

		</form>

<?php }	?>
