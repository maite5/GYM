
        <?php

session_start();
include('inc/conexion.php');
//include_once('conexion.php');

if(isset($_POST['edit'])){
    $database = new ConectarDB();
    $db = $database->open();
    try{
        //$id = $_GET['id'];
       // $nombrec = $_POST['nombrecontacto'];
        //$telefonoc = $_POST['celular'];
       // $correoc = $_POST['email'];
       // $direccionc = $_POST['direccion'];
       $id = $_GET['id'];
       $Descuento = $_POST['Descuento'];
       $activ = $_POST['activ']; 

       $sql ="update promocion set Descuento ='$Descuento', activ = '$activ' where cod_promo = '$id' ";  
        //$sql = "UPDATE personas SET Nombre = '$nombrec', Telefono = '$telefonoc', Correo = '$correoc', Direccion = '$direccionc' WHERE idPersona = '$id'";
        // declaración if-else en la ejecución de nuestra consulta
        $_SESSION['message'] = ( $db->exec($sql) ) ? 'Los datos se actualizaron' : 'Ocurrio un error. No se pudo actualizar';

    }
    catch(PDOException $e){
        $_SESSION['message'] = $e->getMessage();
    }

    //cerrar conexión 
    $database->close();
}
else{
    $_SESSION['message'] = 'Primero debe llenar el formulario';
}

header('location:bdd_promocion.php');

?>