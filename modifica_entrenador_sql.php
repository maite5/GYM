<?php 
      
      include('inc/conexion.php');
//Recibo los valores del form 
//[nombre aqui == al name del form]
$usuario= $_POST['usuario'];
$clave = $_POST['clave'];
$rol = $_POST['rol'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido']; 
$DNI = $_POST['DNI']; 
$Direccion = $_POST['Direccion']; 
$Ciudad = $_POST['Ciudad']; 
$Telefono = $_POST['Telefono']; 
$Email = $_POST['Email'];

$boton = $_POST['boton'];
$usu = $_POST['usu'];   

//si el boton = 0 == cancelar
if($boton==0){
    header("Location: bdd_entrenador.php");
}else{ 
    $modifica = "update entrenador set usuario='$usu',clave='$clave',rol='$rol',Nombre='$Nombre',Apellido='$Apellido',DNI='$DNI',Direccion='$Direccion',Ciudad='$Ciudad',Telefono='$Telefono',Email='$Email' where usuario = '$usu'" ;
    $resultado_modifica = mysqli_query($conexion, $modifica);
    header("Location: bdd_entrenador.php"); 
    //$baja= "delete from usuario where usuario = '$usuario' ";
   // $resultado_baja = mysqli_query($conexion,$baja);
   // header("Location: bdd.php"); 
}



        ?>
    