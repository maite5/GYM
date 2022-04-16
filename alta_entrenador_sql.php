
            
<?php 
      
      include('inc/conexion.php');
     //PASO 7 En el archivo que recibe los datos, guardamos dichos datos en
         //variable para ser utilizados.  -->
 //$Codi_usu=$_POST['Null'];
 $usuario = $_POST['usuario']; 
 $clave = $_POST['clave']; 
 $rol = $_POST['rol']; 
 $Nombre = $_POST['Nombre']; 
 $Apellido = $_POST['Apellido']; 
 $DNI = $_POST['DNI']; 
 $Direccion = $_POST['Direccion']; 
 $Ciudad = $_POST['Ciudad']; 
 $Telefono = $_POST['Telefono'];  
 $Email = $_POST['Email']; 
 //$Activo= $_POST['Null']; 
 //verifica si el nuevo usuario ya existe en la bdd
 $consulta2 = "select count(distinct entrenador) as nuevo from usuario where usuario = '$usuario'";
 $resultado2= mysqli_query($conexion, $consulta2);
 
 while($a = mysqli_fetch_assoc($resultado2)){
         $existe = $a['nuevo'];
 }
      // Estructura de decision
      if($existe==1){
             //Modifica mensaje y regresa al formul
         header("Location: alta_entrenador.php?mensaje=uno");
     }else {
         
     
         $alta = "insert into entrenador(usuario,clave,rol,Nombre,Apellido,DNI,Direccion,Ciudad,Telefono,Email,Activo)
     
        values ('$usuario','$clave','$rol','$Nombre','$Apellido','$DNI','$Direccion','$Ciudad','$Telefono','$Email','1')";
   
        $resultado_alta = mysqli_query($conexion,$alta);
         header("Location: bdd_entrenador.php");
         
                                
     } 
 
  //Cierro el form y recargo la pagina anterior
 
 ?>