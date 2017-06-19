
<?php
		require_once("conexion.php");
		session_start();
		$consulta="select * from persona where email ='".$_GET['var']."'";
		$resultado=mysql_query($consulta)or die(mysql_error());
		while ($campo=mysql_fetch_assoc($resultado)) 
		{
			

			?>
			<section class="contenedor">
			<form name="userinfo_frm" action="actualizar-persona.php" method="POST" class="formulario">
				<table class="tabña">
					<tr>
						<td>
							  Nombre:
					
							  <input type="text" name="nombre_txt" id="nombre_txt" class="caja" placeholder="Nombre" value="<?php echo $campo['nombre'] ;?>" required>
						
							  Apellidos:
					
								<input type="text" name="apellido_txt" id="apellido_txt" class="caja" placeholder="Apellidos" value="<?php echo $campo['apellido'] ;?>" required>
						</td>
					</tr>
					<tr>
						<td>
							Email:
					
								<input type="text" name="email_txt" id="email_txt" class="caja"  placeholder="Email" value="<?php echo $campo['email'] ;?>"  required>
					
								Apodo:
						
								<input type="text" name="apodo_txt" id="apodo_txt" class="caja" placeholder="Apodo" value="<?php echo $campo['apodo'] ;?>" required>
						</td>
					
					</tr>
					<tr>
						
						<td>
							Telefono:
						
							
										
										 <?php 
                  						 $r=mysql_query("select * from telefono where persona_email= '".$_GET['var']."' && tipo_cod=1");
                  						 while ($rw=mysql_fetch_assoc($r)) 
                   						{  
                    						 echo " 
													    
													 	   <input type='text' name='telefono_txt' class='caja' placeholder='Telefonofijo'value='".$rw['telefono_numero']."'>
										                 
             						               	";
                   						}
             						  ?>
             						   <?php 
                  						 $r=mysql_query("select * from telefono where persona_email= '".$_GET['var']."' && tipo_cod=2");
                  						 while ($rw=mysql_fetch_assoc($r)) 
                   						{  
                    						 echo " 
                    						 			
															Celular:
														
													 	   <input type='text' name='celular_txt' class='caja'  value='".$rw['telefono_numero']."'>
										                 
             						                	";
                   						}
             						  ?>
             				</tr>
             				<tr>
             				<td>
								Sexo:
							
								<select id="sexo_slc" name="sexo_slc" class='caja'  >
									 <?php 
                  						 $r=mysql_query("select * from sexo");
                  						 while ($rw=mysql_fetch_assoc($r)) 
                   						{  
                    						 echo"<option value='$rw[sexo_id]'>$rw[sexo_nombre]</option>";
                   						}
             						  ?>
						
								</select>	
							
								Ciudad:
						
										<select id="ciudad_slc"  name="ciudad_slc" class='caja' >
										<?php 

                   						$r=mysql_query("select * from ciudad");
                   						while ($rw=mysql_fetch_assoc($r)) 
                   							{  
                    					  echo"<option value='$rw[ciudad_id]'>$rw[ciudad_nombre]</option>";
                   							}
              								 ?>
										</select>
						</td>
             			
             						  	
             						 
							</tr>
						
					</tr>
					<tr>
						
					
							
							<td>
							Pagina :
						
							<input type="text" name="pagina_txt" id="pagina_txt" class='caja' placeholder="Página de contacto" size="58" value="<?php echo $campo['pagina'] ;?>">
						</td>
						</tr>
						
						<tr>

					</tr>
				
				
				</table>

						
								<br><input type="submit" name="guardar_btn" id="guardar_btn" value="Guardar" class='boton' >							
								<input type="button" name="cancelar_btn" id="cancelar_btn"  value="Cancelar"  class='boton' onClick="location.href = 'paneladmin.php'">
						
			</form>
			</section>
			
<?php
		
		}?>
