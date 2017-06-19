<?php
	require_once("conexion.php");

				$s="select * from empresa WHERE titulo_empresa='mensaje'";
				$r=mysql_query($s) or die(mysql_error());
				while($rw=mysql_fetch_assoc($r))
				{
					echo "<div ><textarea readonly='readonly' cols='100%' rows='10%'>$rw[texto_empresa]</textarea></div>";

				}
?>
