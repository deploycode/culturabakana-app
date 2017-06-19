<?php
	$archivo1=$_FILES["fondo"]["tmp_name"];
	$destino1= "../fondo.jpg";

	if (move_uploaded_file($archivo1, $destino1)	) {
	 echo "
	 <script>
				alert('Se ha subido la imagen satisfactoriamente');
				window.location.href='../index.php';
		</script>";
	} else {
		echo "
		<script>
				alert('Error al subir la imagen verifique que la imagen sea menor a 2MB');
				window.location.href='../index.php';
		</script>";
	}


?>
