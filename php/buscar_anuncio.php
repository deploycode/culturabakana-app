<?php
		$ciudad=$_GET['id'];
		$sql="SELECT * FROM `anuncio` WHERE `subcategoria_cod` = $op";
			$r=mysql_query($sql) or die(mysql_error());
			if(mysql_num_rows($r)==0)
			{
				echo "<span><CENTER>No hay anuncios</CENTER></span>";
			}
			else
			{
				while($rw_anuncio=mysql_fetch_assoc($r))
				{
													//************************************** DATOS PERSONA ********************************
					$sql_persona="SELECT * FROM `persona` WHERE `email` = '".$rw_anuncio['persona_email']."'";
					$r_persona=mysql_query($sql_persona) or die(mysql_error());
						while($rw_persona=mysql_fetch_assoc($r_persona))
							{
								$emailpersona=$rw_persona['email'];
							}

					//********************************** TABLA *******************************************

					echo
					"
						<table width='100%' border='1' style='background-color: #ccc;' >
							<tr>
								<th width='85%'>
									<h1 style='text-align:left;'>
										".$rw_anuncio[anuncio_titulo]."  - ".$rw_anuncio[anuncio_precio]."</br>
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
									Por: <a href='publicaciones.php' title='Ver más publicaciones de este usuario'> </a> - ".$emailpersona."</br>
									Publicado: "
								</td>
							</tr>
						</table>
					";
				}
			}
?>

?>
