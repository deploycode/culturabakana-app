<html>
	<head>
			<title></title>
			<meta charset="utf-8">
			<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
			<script type="text/javascript" language="javascript" src="../js/ajax.js"></script>	
			
			
	</head>
	<body>
	
			<?php 
			error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
			require_once("conexion.php");

					$s="select * from anuncio where anuncio_id='".$_GET['anuncio_id']."'";
					$r=mysql_query($s) or die(mysql_error());
					while ($fila=mysql_fetch_assoc($r)) 
					{
						
					?>
			<section class="contenedor">
			<form name="anuncio_frm" action="actualizar_anuncio.php" method="POST" class="formulario" enctype="multipart/form-data">
			<table class="tabla">
				<tr>
					<td>Seleccione una categoria:
						
						<select id="categoria_slc" class="select" onchange="from(document.anuncio_frm.categoria_slc.value,'subcategoria_tr','subcategoria_slc.php')">
			    			 <?php 
			     			    $r=mysql_query("select * from categoria");
			     			   echo "<option value=''>Seleccione una categoria</option>";
			       		      while ($rw=mysql_fetch_assoc($r)) 
			            		{  
			            		        echo"<option value='$rw[categoria_id]'> $rw[categoria_nombre]</option>";
			            		}
			    			?>
						 </select>
					</td>
				</tr>

				<tr >

					<td id="subcategoria_tr">
					Seleccione una subcategoria:
					<select name="subcategoria_slc" class="select">
						<option value="">Seleccione una subcategoria</option>	
					 </select>
					</td>
				</tr>

				<tr>
					<td>Titulo del anuncio:
						<input type="text" name="titulo_txt" id="titulo_txt" class="caja" placeholder="titulo" value="<?php echo $fila['anuncio_titulo'];?>" required>
					</td>
				</tr>
				
				
				
				<tr>
					<td>
						Descripción
						
					</td>
				</tr>
				<tr>
					
					<td>
						
						<textarea name="descripcion_txa" class="textarea" rows="8"  placeholder="Escirbe una descripción tan detallada como quieras de este anuncio"> <?php echo $fila['anuncio_descripcion'];?></textarea>
						
					</td>
				</tr
				<tr>
					<td>
						Precio:
						
					
						<input type="text" name="precio_txt" id="precio_txt" class="caja" placeholder="Precio" value="<?php echo $fila['anuncio_precio'];?>">
					</td>
				</tr

				
				<tr>
								<td>
									Imagen:	
									<input type="file" name="archivo_fls">
									<input type="hidden" name="id" value="<?php  echo $_GET['anuncio_id']?>">
									<input type="hidden" name="url" value="<?php  echo $fila['anuncio_imagen']?>">
									<input type="submit" value="Guardar cambios">
								</td>
				</tr>
				<tr>
								<td>
									<input type="button" value="Cancelar" onClick="location.href = 'paneluser.php'">
								</td>
							</tr>	
			</table>
		</form>
		<?php }	?>
</section>
	</body>
	<footer>

	</footer>
</html>