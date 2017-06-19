<div class="mediano" style="margin: 1em; text-align: left;">
	
	<label>GESTOR DE BASE DE DATOS</label><br><br>
	<a class="boton" href="?ope=categoria&op=admonbd">CATEGORIAS</a>
	<a class="boton" href="?ope=subcategoria&op=admonbd">SUBCATEGORIAS</a>

</div>	

<?php
	error_reporting(E_ALL ^ E_WARNING AND E_NOTICE);
	session_start();
	
	if (isset($_GET["ope"])) 
	{	
		$ope = $_GET["ope"];
		if (isset($_SESSION['rol']) && $_SESSION['rol']=="admin")
		{	
			 switch($ope) 
 	 		{
    			case "categoria":
    			echo "
    				<div class='mediano'>
					<form method='POST' action='php/agregar_categoria.php'>
						<input type='text' name='categoria_txt' class='caja' placeholder='Nombre'>
						<div class='derecha'><input type='submit' class='boton' value='Agregar'></div>
					</form>
					</div>
				<table width='100%'  style='background:#fff; margin-top: 10px;'>
				<tr>
					<th>Nombre</th>	
					<th>Operaciones</th>	
				<tr>
				";
				require_once("conexion.php");
				$s="select * from categoria Order by categoria_nombre";
				$r=mysql_query($s) or die(mysql_error());
				$n=0;
				while($rw=mysql_fetch_assoc($r))
				{
					$color="#0072c6";
					$fuente="#fff";
					$n++;
					if($n%2==0)
					{
						$color="#fff";
						$fuente="#000";
					}
					echo "<tr style='background:$color; color:$fuente;'>
								<td>$rw[categoria_nombre]</td>
								<td>
								<a href='php/eliminar_categoria.php?var=$rw[categoria_id]'>Eliminar </a><br>
								<a href='php/editar_categoria.php?var=$rw[categoria_id]'>Editar </a></td>

						<tr>
						";
					
				}
					echo "	</table> ";
			    break;
			    case "subcategoria":
			    require_once("conexion.php");
			    $cat="select * from categoria";
				$rcat=mysql_query($cat) or die(mysql_error());
				$n=0;

			    echo "
			    	<div class='mediano'>
					<form method='POST' action='php/agregar_subcategoria.php'>
						<select class='select' name='categoria_slc'>
							<option>Seleccione una categoria</option>";
							while($rwcat=mysql_fetch_assoc($rcat))
							{
								echo "<option value='$rwcat[categoria_id]'> $rwcat[categoria_nombre]</option>";
							};
							    echo "</select>
						  	
						<input type='text' name='subcategoria_txt' class='caja' placeholder='Nombre'>
						<div class='derecha'><input type='submit' class='boton' value='Agregar'></div>

				
					</form>
					</div>
					";
				echo "
				<table width='100%'  style='background:#fff;; margin-top: 10px;'>
				<tr>
					
					<th>Nombre</th>	
					<th>Categoria</th>
					<th>Operaciones</th>
				<tr>
				";
				
				$s="select * from subcategoria order by subcategoria_nombre";
				$r=mysql_query($s) or die(mysql_error());
				$n=0;
				while($rw=mysql_fetch_assoc($r))
				{

					$color="#0072c6";
					$fuente="#fff";
					$n++;
					if($n%2==0)
					{
						$color="#fff";
						$fuente="#000";
					}
					$cate="select * from categoria where categoria_id = '$rw[categoria_cod]'";
					$rcate=mysql_query($cate) or die(mysql_error());
					while($rwcate=mysql_fetch_assoc($rcate))
					{
								
							
					echo "<tr style='background:$color; color:$fuente;'>
								
								<td>$rw[subcategoria_nombre]</td>
								<td>$rwcate[categoria_nombre]</td>
								<td>
								
								<a href='php/eliminar_subcategoria.php?var=$rw[subcategoria_id]'>Eliminar </a><br>
								<a href='php/editar_categoria.php?var=$rw[categoria_id]'>Editar </a></td>

						<tr>
						";
					};
				}
					echo "	</table> ";
			    break;
			    
				   
    default:
       
    break;
  }
	} 

	else 
	{
		?><script>
		window.location.href='../index.php';
		</script><?php
	}
 }
 
?>

