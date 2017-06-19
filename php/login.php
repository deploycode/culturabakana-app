<div class="mediano" style="margin-right:3em; ">
	<div class="izquierda"><h1>REGISTRESE AQUÍ</h1></div>

	<form action="php/registrar.php" method="post">

		<input type="text" name="nombre_txt" id="nombre_txt" class="caja" placeholder="Nombre" required>
		<input type="email" name="email_txt" id="email_txt" class="caja" placeholder="Correo Electrónico" required>
		<input type="text" name="telefono_txt" id="telefono_txt" class="caja" placeholder="Número de contacto" required>
		<input type="password" name="pass_txt" id="pass_txt" class="caja"  placeholder="Contraseña" required>
		<input type="submit"  class="boton" value="Registrarme" class="boton" >

	</form>

</div>

<div class="mediano">
		<div class="izquierda"><h1>INGRESE AQUÍ</h1></div>

		<form action="php/loguear.php" method="post">
			<input type="text" name="user_txt" id="user_txt" class="caja" placeholder="Correo Electrónico" required>
			<input type="password" name="pass_txt" id="pass_txt" class="caja"  placeholder="Contraseña" required>

		<div class="derecha">
			<a href="">¿Olvidó su usuario o contraseña?</a><br>
		</div>

		<input type="submit"  class="boton" value="Ingresar" class="boton" >



	</form>

</div>
