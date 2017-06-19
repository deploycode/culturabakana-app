<?php
error_reporting(E_ALL ^ E_WARNING AND E_NOTICE);
  $op = $_POST["op"];
  switch($op) 
  {
    case "buscar":
     $contenido ="buscar_persona.php";
        $titulo="Inicio";
    break;
    default:
       $contenido ="listar_usuarios.php";
        $titulo="Busqueda";
    break;
  }
?>
<section class="menu2">
				<table class="tabla2">

					<form method='POST' action='paneladmin.php' class="formulario2">
					<tr>
						<td>
							<a  href = '../index.php'>Inicio</a>
						</td>

						<td>
							<a  href = 'paneladmin.php?op="listar"'>Todos</a>
							<input type="hidden" name="op" value="buscar">
						</td>
						<td>
							<input type='text' name='email_txt'  placeholder='ejemplo@hotmail.com'>
						</td>
						<td>
							<input type='submit'  value='Buscar'>
						</td>
					</tr>		
						
					</form>
				</table>
</section>
<section id="contenido" name="contenido" class="contenedor">
	<?php include($contenido); ?>
</section>