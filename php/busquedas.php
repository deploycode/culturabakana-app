<!DOCTYPE html>
<html>
<head>
	<meta charset= "utf-8">
	<script type="text/javascript" language="javascript" src="../js/ajax.js"></script>	
	
</head>
<body>

<form id="buscador">		
<?php 
		include("conexion.php"); 
		$sql_ciudad="select * from ciudad order by id_ciudad asc";
		$res_ciudad=$conexion->query($sql_ciudad);
		$sql="SELECT * FROM `persona` WHERE `cod_categoria` = ".$_GET['op'];
		$r=$conexion->query($sql);
?>
	<select name="ciudad_slc" id="" onchange="from(document.buscador.ciudad_slc.value,'mitabla','busquedas.php')">
			<option value="0">Ciudad</option>
			<?php while ($fila=$res_ciudad->fetch_assoc()){ ?>
			<option value="<?php echo $fila['id_ciudad']?>"><?php echo utf8_encode($fila['ciudad'])?></option>
			<?php }?>							
	</select>


<?php
while($rw=$r->fetch_assoc())
	{
	echo 
	"
	<table id='mitabla'>
	<tr>
		
		<td>
			$rw[nombre] - $rw[cod_ciudad] - $rw[cod_barrio]</br>
			$rw[direccion]</br>
			$rw[descripcion]</br>
			$rw[celular] - $rw[telefono] - $rw[email] - $rw[pagina]

		</td>
	</tr>
	
	
	";
	}
echo "</table>";
?>
</form>

</body>
</html>