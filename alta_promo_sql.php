
    
<?php 
      
      include('inc/conexion.php');
     //PASO 7 En el archivo que recibe los datos, guardamos dichos datos en
         //variable para ser utilizados.  -->
 //$cod_promo=$_POST['cod_promo'];
    $Descuento = $_POST['Descuento']; 
    $activ = $_POST['activ ']; 
  
 //verifica si el nuevo usuario ya existe en la bdd
 $consulta4 = "select count(distinct promocion) as nuevo from promocion where cod_promo = '$cod_promo'";
 $resultado4= mysqli_query($conexion, $consulta4);
 
 while($a = mysqli_fetch_assoc($resultado4)){
         $existe = $a['nuevo'];
 }
      // Estructura de decision
      if($existe==1){
             //Muestra el mensaje q existe y regresa al formul
         header("Location: alta_promo.php?mensaje=uno");
     }else {
        
         //Agregamos una promocion con insert
         $alta = "insert into promocion(Descuento,activ)
                        values ('$Descuento','$activ')";
    
 
        $resultado_alta = mysqli_query($conexion,$alta);
         header("Location: bdd_promocion.php"); 
         
                                
     } 
 
  //Cierro el form y recargo la pagina anterior
 
 ?>