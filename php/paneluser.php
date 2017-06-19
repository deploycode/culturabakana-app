<?php
	
	$s="select * from anuncio where persona_email='".$_SESSION['email']."'";
	$r=mysql_query($s) or die(mysql_error());

	if(mysql_num_rows($r)==0)
	{
		echo "No existen anuncios";
		exit;
	}
	echo "<table width='100%'  style='background:#fff;'>
	<tr>
		<th>Titulo</th>
		
		<th>Descripcion</th>
		<th>Precio</th>
		<th>Operaciones</th>
		
	<tr>
	";

	$n=0;
	while($rw=mysql_fetch_assoc($r))
	{
		$anuncio_id="anuncio_id";
		$valor_id=$rw['anuncio_id'];
		$color="#ccc";
		$fuente="#000";
		$n++;
		if($n%2==0)
		{
			$color="#fff";
			$fuente="#212121";
		}
		echo "<tr   style='background:$color; color:$fuente; '>
					<td>$rw[anuncio_titulo]</td>
					
					<td>$rw[anuncio_descripcion]</td>
					<td>$rw[anuncio_precio]</td>
					<td><a href='php/modificar_anuncio.php?$anuncio_id=$valor_id'>Editar </a><br>
					<a href='php/eliminar_anuncio.php?$anuncio_id=$valor_id'>Eliminar </a></td>

			";

	}
	echo
		"
		</table>
	";

?>