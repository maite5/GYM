
	<?php 
	include('inc\conexion.php');

	$usuario = $_POST['user']; 
	$clave = $_POST['pass']; 
		
	$consulta = "select * from usuario where usuario = '$usuario'";

	$resultado= mysqli_query($conexion, $consulta);
	$afa=mysqli_fetch_array($resultado);
	$afa1=$afa['usuario'];
	$afa2=$afa['clave'];
		if($afa1==$usuario and $afa2==$clave){
			if($afa['rol']=='admin' or $afa['rol']=='administrador'){
		
		header('Location: bdd.php');
			}else{
		session_start();
		
		$_SESSION["usuario"] = $afa1;
		header('Location: index.php?%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20usuario=<?=$afa1?>');
			}
		}else{
        header("Location: iniciar_sesion.php?mensaje=uno");
			
		}
		

	     
		

	?>
