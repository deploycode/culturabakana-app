<?php
	if (isset($_SESSION['rol']) && $_SESSION['rol']=="admin")
		 {
				echo "





				<table width='100%'  style='background:#fff;'>
				<tr>
					<th>Nombres</th>
					
					<th>Email</th>
					<th>Teléfono</th>
					<th>Rol</th>
					<th>Operaciones</th>

				<tr>
				";
				require_once("conexion.php");
				$s="select * from persona ORDER BY nombre";
				$r=mysql_query($s) or die(mysql_error());
				$n=0;
				while($rw=mysql_fetch_assoc($r))
				{


					$r4=mysql_query("select * from tipousuario where tipousuario_id =".$rw['cod_tipo']) or die(mysql_error());
					while ($rw_tipousuario=mysql_fetch_assoc($r4)) {
						$rol=$rw_tipousuario['tipousuario_nombre'];
					}
					$email=$rw['email'];
					$color="#ccc";
					$fuente="#000";
					$n++;
					if($n%2==0)
					{
						$color="#fff";
						$fuente="#212121";
					}
					echo "<tr  style='background:$color; color:$fuente;'>
								<td>$rw[nombre] $rw[apellido]</td>

								<td>$rw[email]
								<td>$rw[telefono]</td>
								<td>$rol</td>
								<td>
								<a href='php/eliminar_usuario.php?var=$email'>Eliminar </a></td>

						<tr>
						";

				}
					echo "	</table> ";
				}
				else
				{
					?><script>
					window.location.href='../index.php';
					</script><?php
				}
?>
</html>
