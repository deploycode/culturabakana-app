<?php
	require_once("libs/Zebra_Pagination-master/Zebra_Pagination.php");
	$resultado=4;
	$consulta=mysql_query("SELECT count(*) as total FROM anuncio  WHERE `subcategoria_cod` = ".$_GET['op'] );
	while ($reg = mysql_fetch_array($consulta))
	{
		$totalnoticias=$reg['total'];
	}

	$paginacion= new Zebra_Pagination();
	$paginacion->records($totalnoticias);
	$paginacion->records_per_page($resultado);
?>
<html>
	<head>
		<meta charset= "utf-8">
		<script type="text/javascript" language="javascript" src="js/ajax.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<style type="text/css">
			table{
				border:none;
			}
			table th{
				padding: 0.5em;

			}
			h1{
				border:none;
			}
		</style>
	</head>
	<body>

		<section id="busqueda_sec">
		<?php
			session_start();
				$inicio=0;
				$fin=5;
				$sql='SELECT * FROM `anuncio` WHERE `subcategoria_cod` = '.$_GET['op']. ' LIMIT  '.(($paginacion->get_page()-1)*$resultado).','.$resultado;
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

						echo"
							<table width='100%' style='background-color: yellow; color:black;' >
								<tr>
									<th width='85%'>
										<h1 style='text-align:left;'>
											".$rw_anuncio[anuncio_titulo]."  - ".$rw_anuncio[anuncio_precio]."

										</h1>
									</th>
									<th style='text-align:center; background-color:#fff;'>
										<a href ='index.php?op=contactar'>COMPRAR</a>
									</th>
								</tr>
						    </table>
							<table width='100%'  style='background-color: #fff;'>
								<tr>
									<td style='width:20px; '>
										<img src=img/".$rw_anuncio[anuncio_imagen]." style='width:100px;height:100px;'>
									</td>

									<td style='padding:0px; width:100%; vertical-align:top;'>
										".$rw_anuncio[anuncio_descripcion]."

									</td>

									</tr>


							</table>
						";

					}
				}

				echo "<div style='background-color:orange;'>"; $paginacion->render(); echo"</div> ";
						?>
	</section>

</body>
</html>
