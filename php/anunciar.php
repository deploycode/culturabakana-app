<?php
	require_once("conexion.php");
	session_start();

	$archivo=$_FILES["archivo_fls"]["tmp_name"];
	$destino= "../img/producto/".date("Ymdhis");


		$s="insert into anuncio(persona_email, anuncio_titulo, subcategoria_cod, anuncio_descripcion,anuncio_precio,anuncio_imagen)
		values(
	   '".$_SESSION['email']."',
	   '$_POST[titulo_txt]',
	   '$_POST[subcategoria_slc]',
	   '$_POST[descripcion_txa]',
	   '$_POST[precio_txt]',
	   '".$destino."'
	   )";

		if (move_uploaded_file($archivo, $destino))
		{
				$e1=mysql_query($s) or die(mysql_error());
				if($e1)
				{

					echo "<script>
									alert('Registro Exitoso, el producto ha sido publicado');
									window.location.href='../index.php?op=paneluser';
					</script>";

				}else{
					echo "<script>
									alert('No se pudo publicar su anuncio');
									window.location.href='anuncio.php';
								</script>";
				}
		}else{
			echo "<script>
							alert('Se ha producido un error al tratar de cargar el archivo de imagen, verifique que sea de formato .jpg/ .png o .jpeg y que no sea mayor a 2MB');
							window.location.href='../index.php?op=paneluser';
						</script>";
		}


?>
