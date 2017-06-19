<?php

	$s="select * from empresa where titulo_empresa ='Nosotros'";
	$r=mysql_query($s) or die(mysql_error());
	while ($fila=mysql_fetch_assoc($r))
	{?>

		<form name="anuncio_frm" action="php/actualizar_empresa.php" method="POST" >

		<div class="derecha">
			<input type="hidden"  name="campo" value="Nosotros">
			<input type="submit" class="boton" value="Guardar">
			<input type="button" class="boton" value="Cancelar" onClick="location.href = 'index.php'">
		</div>
		<textarea name="texto_txa" class="textarea"> <?php echo $fila['texto_empresa'];?></textarea>

		</form>

<?php }	?>
