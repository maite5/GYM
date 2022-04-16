
        <?php 
      
      include('inc/conexion.php');
//Recibo los valores del form 
//[nombre aqui == al name del form]


    //$Cod_activ = $_POST['Cod_activ'];
    $Nombre = $_POST['Nombre'];
    $Modalidad_semanal = $_POST['Modalidad_semanal'];
    $f_inicio = $_POST['f_inicio'];
    $f_acaba = $_POST['f_acaba'];
    $Hora_inicio = $_POST['Hora_inicio'];
    $Hora_fin = $_POST['Hora_fin'];
    $Cod_entrenador = $_POST['Cod_entrenador'];
    $turno = $_POST['turno'];
    $precio = $_POST['precio']; 
    

        //verifica si el nuevo usuario ya existe en la bdd
$consulta3 = "select count(distinct actividad) as nuevo from actividad where Cod_activ = '$Cod_activ'";
$resultado3= mysqli_query($conexion, $consulta3);

while($a = mysqli_fetch_assoc($resultado3)){
        $existe = $a['nuevo'];
}
     // Estructura de decision
     if($existe==1){
            //Modifica mensaje y regresa al formul
        header("Location: alta_actividad.php?mensaje=uno");
    }else {
        
        
        $altaa = "insert into actividad(Nombre,Modalidad_semanal,f_inicio,f_acaba,Hora_inicio,Hora_fin,Cod_entrenador,turno,precio)
        values ('$Nombre','$Modalidad_semanal','$f_inicio','$f_acaba','$Hora_inicio','$Hora_fin','$Cod_entrenador','$turno','$precio')";
        

       $resultado_alta = mysqli_query($conexion,$altaa);
        header("Location: bdd_actividad.php");  
        
                               
    } 

 //Cierro el form y recargo la pagina anterior

?>