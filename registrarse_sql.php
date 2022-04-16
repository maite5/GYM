    
<?php 
      
     include('inc/conexion.php');
    //PASO 7 En el archivo que recibe los datos, guardamos dichos datos en
        //variable para ser utilizados.  -->
//$Codi_usu=$_POST['Null'];
$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING); 
$clave = filter_var($_POST['clave'], FILTER_SANITIZE_STRING);
$Nombre = filter_var($_POST['Nombre'], FILTER_SANITIZE_STRING); 
$Apellido = filter_var($_POST['Apellido'], FILTER_SANITIZE_STRING); 
$DNI = filter_var($_POST['DNI'], FILTER_SANITIZE_STRING); 
$Direccion = filter_var($_POST['Direccion'], FILTER_SANITIZE_STRING); 
$Ciudad = filter_var($_POST['Ciudad'], FILTER_SANITIZE_STRING); 
$Telefono = filter_var($_POST['Telefono'], FILTER_SANITIZE_STRING);  
$Email = filter_var($_POST['Email'], FILTER_SANITIZE_STRING); 
//$Activo= $_POST['Null']; 
//verifica si el nuevo usuario ya existe en la bdd
$consulta1 = "select count(distinct usuario) as nuevo from usuario where usuario = '$usuario'";
$resultado1= mysqli_query($conexion, $consulta1);

while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
}
     // Estructura de decision
     if($existe==1){
            //Modifica mensaje y regresa al formul
        header("Location: Registrarse.php?mensaje=uno");
    }else {

        //new codigo
        $alta = "insert into usuario(usuario,clave,rol,Nombre,Apellido,DNI,Direccion,Ciudad,Telefono,Email,Activo)
     
	    values ('$usuario','$clave','$rol','$Nombre','$Apellido','$DNI','$Direccion','$Ciudad','$Telefono','$Email','1')";
   // }else  { 
	//$alta .= "values($Codi_usu','$usuario','$clave','$rol','$Nombre','$Apellido','$DNI','$Direccion','$Ciudad','$Telefono','$Email','$Activo)";

	
    $resultado_alta = mysqli_query($conexion,$alta);
	
	$consulta2 = "select count(distinct usuario) as nuevo from usuario where usuario = '$usuario'";
	$resultado2= mysqli_query($conexion, $consulta2);
	$a = mysqli_fetch_assoc($resultado2);
	$existe2 = $a['nuevo'];
	if($existe2==1){
        header("Location: index.php");
	}else{
        header("Location: Registrarse.php?mensaje=dos");
	}
        
                               
    } 

 //Cierro el form y recargo la pagina anterior

?>