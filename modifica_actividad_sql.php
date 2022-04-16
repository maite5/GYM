<?php 
      
      include('inc/conexion.php');
//Recibo los valores del form 
//[nombre aqui == al name del form]


    $Cod_activ = $_POST['Cod_activ'];
    $Nombre = $_POST['Nombre'];
    $Modalidad_semanal = $_POST['Modalidad_semanal'];
    $f_inicio = $_POST['f_inicio'];
    $f_acaba = $_POST['f_acaba'];
    $Hora_inicio = $_POST['Hora_inicio'];
    $Hora_fin = $_POST['Hora_fin'];
    $Cod_entrenador = $_POST['Cod_entrenador'];
    $turno = $_POST['turno'];
    $precio = $_POST['precio']; 
    
$boton = $_POST['boton'];
 //$usu = $_POST['usu'];    Campo oculto del hidden
 $usu = $_POST['usu'];

//si el boton = 0 == cancelar
if($boton==0){
    header("Location: bdd_actividad.php"); 
}else{ 
    //$modifica = "update usuario set usuario='$usu',clave='$clave',rol='$rol',Nombre='$Nombre',Apellido='$Apellido',DNI='$DNI',Direccion='$Direccion',Ciudad='$Ciudad',Telefono='$Telefono',Email='$Email' where usuario = '$usu'" ;
    $modifica = "update actividad set Cod_activ ='$usu', Nombre='$Nombre',Modalidad_semanal='$Modalidad_semanal',f_inicio='$f_inicio',f_acaba='$f_acaba',Hora_inicio='$Hora_inicio',Hora_fin='$Hora_fin',Cod_entrenador='$Cod_entrenador',turno='$turno',precio='$precio' where Cod_activ = '$usu'  ";
    $resultado_modifica = mysqli_query($conexion, $modifica);
    header("Location: bdd_actividad.php"); 
    //$baja= "delete from usuario where usuario = '$usuario' ";
   // $resultado_baja = mysqli_query($conexion,$baja);
   // header("Location: bdd.php"); 
}



        ?>
    