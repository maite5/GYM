<!doctype html>
	<html lang="es">
	<head>
	<!--required meta tags-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- archivos a incluir-->
	<?php 
		include('inc\menu2.php'); 
	?> 
	<link href="css\bootstrap.min.css" rel="stylesheet">
	<title>Iniciar sesion</title>
	</head>
	
	<body background="img/f2.jpg">
		<!-- Menu de navegacion-->
		<?php
			menu();
		$mensaje = 'Ingrese usuario y contraseña';

		if(isset($_GET['mensaje'])){
      if($_GET['mensaje']=='uno'){$mensaje = 'nombre de usuario o contraseña incorrectos';}
    }
		?>
		<script src="js\bootstrap.bundle.min.js"></script>
		<table  width="800px" height="600px"  bgcolor=white align="center" border="1">

  <tbody>
    <tr>

      <td><form action="iniciar_sesion_sql.php" method="post" action="" name="signup-form" align=center>
    <div class="form-element">
        <label>Usuario</label>
        <input type="text" id="user" name="user" maxlength="8" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>clave</label>
        <input type="password" id="pass" pattern="[a-zA-Z0-9]+" maxlength="8" name="pass" required />
    </div>
    <button type="submit" name="login" value="login">iniciar sesion</button>
	<br>
	 <?php echo $mensaje; ?>
	</form>
	 

	</td>
      <th><br><br><br><br><br><br><br><br><br><br><br><br><br></th>
    </tr>
    <tr>
      <th><br><br><br><br><br><br><br><br><br><br><br><br><br></th>
    </tr>
    <tr>
    </tr>
  </tbody>
</table>
		
	</body>
	</html>
	