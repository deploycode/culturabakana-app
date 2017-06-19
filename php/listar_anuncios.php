<!DOCTYPE html>
<html>
<head>
	<meta charset= "utf-8">
	<script type="text/javascript" language="javascript" src="../js/ajax.js"></script>	
	
</head>
<body>
		
		<table>
			<tr>
				<th>
					<form name="buscar_anuncio_frm">
							 <select id="ciudad_slc" onchange="from(document.buscar_anuncio_frm.ciudad_slc.value,'busqueda_sec','buscar_anuncio.php')">
	                           <?php 
	                           		 echo"<option value=''>Seleccione una ciudad</option>";
	                               $r=mysql_query("select * from ciudad");
	                               while ($rw=mysql_fetch_assoc($r)) 
	                               {  
	                                  echo"<option value='$rw[ciudad_id]'>$rw[ciudad_nombre]</option>";
	                               }
	                           ?>
	                                     
	             			 </select>
	             			
					</form>
				</th>

				<th>
		 			<a href="php/crearpdf.php">GENERAR PDF</a>
		 		</th>

			</tr>
		</table>
		<section id="busqueda_sec">
			<?php 
		session_start();
		require_once("conexion.php");
			$sql='SELECT * FROM `anuncio` WHERE `subcategoria_cod` = '.$_GET['op'];
			$r=mysql_query($sql) or die(mysql_error());
			if(mysql_num_rows($r)==0)
			{
				echo "<span><CENTER>No hay anuncios</CENTER></span>";
			}
			else
			{
				while($rw_anuncio=mysql_fetch_assoc($r))
				{	
					//************************************CIUDADES****************************************
					$sql_ciudad='SELECT * FROM `ciudad` WHERE `ciudad_id` = '.$rw_anuncio['ciudad_cod'];
					$r_ciudad=mysql_query($sql_ciudad) or die(mysql_error());
						while($rw_ciudad=mysql_fetch_assoc($r_ciudad))
							{
								$ciudad=$rw_ciudad['ciudad_nombre'];
							}
					//************************************** DATOS PERSONA ********************************
					$sql_persona="SELECT * FROM `persona` WHERE `email` = '".$rw_anuncio['persona_email']."'";
					$r_persona=mysql_query($sql_persona) or die(mysql_error());
						while($rw_persona=mysql_fetch_assoc($r_persona))
							{
								$emailpersona=$rw_persona['email'];
								$apodopersona=$rw_persona['apodo'];
							}
					//********************************** TELEFONO *******************************************

					$r_telefono=mysql_query("SELECT * FROM `telefono` WHERE `tipo_cod` = 1 AND `persona_email` = '$rw_anuncio[persona_email]' ") or die(mysql_error());
					while($rw_telefono=mysql_fetch_assoc($r_telefono))
							{
								$telefono=$rw_telefono['telefono_numero'];
							}
					//********************************** CELULAR *******************************************

					$r_telefono=mysql_query("SELECT * FROM `telefono` WHERE `tipo_cod` = 2 AND `persona_email` = '$rw_anuncio[persona_email]' ") or die(mysql_error());
					while($rw_telefono=mysql_fetch_assoc($r_telefono))
							{
								$celular=$rw_telefono['telefono_numero'];
							}
					//********************************** TABLA *******************************************

					echo 
					"
						<table width='100%' border='1' style='background-color: #fff;' >
							<tr>
								<th width='85%'>
									<h1 style='text-align:left;'>
										".$rw_anuncio[anuncio_titulo]."  - ".$ciudad."  - ".$rw_anuncio[anuncio_precio]."</br>
									</h1>
								</th>
							</tr>
					    </table>
						<table width='100%'  style='background-color: #fff;'>
							<tr>
								<td style='width:20px;'>
									<img src='img/androide.png' width='100px'>
								</td>
			
								<td>						
									".$rw_anuncio[anuncio_descripcion]."</br>
									Por: <a href='publicaciones.php' title='Ver más publicaciones de este usuario'> ".$apodopersona ."</a> - ".$emailpersona."</br>
									
								</td>
							</tr>
						</table>
					";
				}
			}
?>
		</section>	
</body>
</html>