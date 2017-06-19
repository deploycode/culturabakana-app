
<?php
error_reporting(E_ALL ^ E_WARNING AND E_NOTICE);
 require_once("conexion.php"); 
 $sql="select * from subcategoria where categoria_cod='".$_GET['id']."'";
 $res=mysql_query($sql) or die (mysql_error());
 ?>



<select name="subcategoria_slc" class="select" required>
	<option value="">Seleccione una subcategoria</option>
	<?php while ($fila=mysql_fetch_assoc($res)){ ?>
	<option value="<?php echo $fila['subcategoria_id']?>"><?php echo $fila['subcategoria_nombre']?></option>
	<?php }?>
</select>