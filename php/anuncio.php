<div style="width: 50%; margin: auto; text-align: left;">
	<form name="anuncio_frm" action="php/anunciar.php" method="POST" enctype="multipart/form-data" class="formulario">
	
		<label>Seleccione una categoria</label><br>
			<select id="categoria_slc" class="select" onchange="from(document.anuncio_frm.categoria_slc.value,'subcategoria_tr','php/subcategoria_slc.php')" required>
				 <?php 
	 			    $r=mysql_query("select * from categoria");
	 			   echo "<option value=''>Seleccione una categoria</option>";
	   		      while ($rw=mysql_fetch_assoc($r)) 
	        		{  
	        		        echo"<option value='$rw[categoria_id]'> $rw[categoria_nombre]</option>";
	        		}
				?>
			 </select><br>

		<label>Seleccione una subcategoria:</label><br>
			<div id="subcategoria_tr">
					<select name="subcategoria_slc" class="select" required>
					<option value="">Seleccione una subcategoria</option>	
				 </select><br>
			</div>

		<label>Titulo del anuncio:</label><br>
			<input type="text" name="titulo_txt" id="titulo_txt" class="caja" placeholder="titulo" required><br>

		<label>Descripción:<br>
						
			<textarea name="descripcion_txa" class="textarea" rows="8" style="background-color: #fff;"  placeholder="Escirbe una descripción tan detallada como quieras de este anuncio" required></textarea><br>
			
		<label>Precio:</label><br>			
		
			<input type="text" name="precio_txt" id="precio_txt" class="caja" placeholder="Precio" required><br>

		<label>Imagen:<br></label>		
		
			<input type="file" style="padding: 0.5em; margin-top: 0.5em;margin-bottom: 0.5em;" name="archivo_fls"><br>
			<div class="derecha">
				<input type="submit" class="boton" value="Publicar">
				<input type="button" class="boton" value="Cancelar" onClick="location.href = 'index.php'">


			</div>
			

	</form>
</div>
