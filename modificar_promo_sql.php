
    
	<?php 
      
      include('inc/conexion.php');
//Recibo los valores del form 
//[nombre aqui == al name del form]
$cod_promo= $_POST['cod_promo'];
$Descuento = $_POST[' Descuento '];
$activ = $_POST['activ'];

$boton = $_POST['boton'];
$usu = $_POST['usu'];   

//si el boton = 0 == cancelar
if($boton==0){
    header("Location: bdd_promocion.php");
}else{ 
    $modifica = "update promocion set cod_promo='$usu',Descuento='$Descuento',activ='$activ' where cod_promo = '$usu'" ;
    $resultado_modifica = mysqli_query($conexion, $modifica);
    header("Location: bdd_promocion.php"); 
    //$baja= "delete from usuario where usuario = '$usuario' ";
   // $resultado_baja = mysqli_query($conexion,$baja);
   // header("Location: bdd.php"); 
}



        ?>
    