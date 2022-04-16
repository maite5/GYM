<?php 
      
      include('inc/conexion.php');

//defino las variables[name];
    $Cod_activ = $_GET['Cod_activ'];
    //$Cod_activ =null; 
    $Nombre = $_GET['Nombre'];
    $Modalidad_semanal = $_GET['Modalidad_semanal'];
    $f_inicio = $_GET['f_inicio'];
    $f_acaba = $_GET['f_acaba'];
    $Hora_inicio = $_GET['Hora_inicio'];
    $Hora_fin = $_GET['Hora_fin'];
    $Cod_entrenador = $_GET['Cod_entrenador'];
    $turno = $_GET['turno'];
    $precio = $_GET['precio'];

    $boton = $_POST['boton']; 

//si el boton = 0 == cancelar
if($boton==0){
    header("Location: bdd_actividad.php");
}else{
    $baja= "delete from actividad where Cod_activ = '$Cod_activ' ";
    $resultado_baja = mysqli_query($conexion,$baja);
    header("Location: bdd_actividad.php"); 
}



    ?> 