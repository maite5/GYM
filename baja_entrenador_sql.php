
    
	 <?php 
      
      include('inc\conexion.php');
//Recibo los valores del form 
//[nombre aqui == al name del form]
$usuario= $_POST['usuario'];
$clave = $_POST['clave'];
$rol = $_POST['rol'];
$Nombre = $_POST['Nombre']; 

$boton = $_POST['boton']; 

//si el boton = 0 == cancelar
if($boton==0){
    header("Location: bdd_entrenador.php");
}else{
    $baja= "DELETE FROM entrenador WHERE usuario = '$usuario'";
	

    $resultado_baja = mysqli_query($conexion,$baja);
	header("Location: bdd_entrenador.php");
}



        ?>