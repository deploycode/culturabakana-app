<?php

	if (isset($_SESSION["rol"]))
	{
		$s="select * from empresa where titulo_empresa = 'mensaje'";
		$r=mysql_query($s) or die(mysql_error());
		while ($fila=mysql_fetch_assoc($r))
		{
			echo "<textarea class='textarea' name='texto_txa'  readonly='readonly' >". $fila['texto_empresa'] ."</textarea>";
	 	}
	} else
	{
		echo "<H1>POR FAVOR REGISTRATE <a href='index.php?op=login'>AQUÍ</a> PARA REALIZAR UNA COMPRA</H1>";
	}
?>
