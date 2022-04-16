
	<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>  Baja de entrenador !</title>

    <?php 
      
  include('inc/conexion.php');
    ?>

    <!-- Trabajo con BDD -->
    <?php
    // Mensaje
  //  PASO 4) Declaramos una variable para mostrar mensajes al usuario, dicha
        //variable se podrá modificar desde otras páginas mediante GET, por lo que
        //  deberemos verificar si el GET existe, y de ser así, pisamos el valor
           // previamente cargado en la variable.

    $mensaje = 'Ingrese los datos del nuevo usuario';
    if(isset($_GET['mensaje'])){
      if($_GET['mensaje']=='uno'){$mensaje = 'El usuario ya ha sido elimininado en la base de datos';}
    }

//defino las variables[name]; 
$usuario = $_GET['usuario']; 
$clave = $_GET['clave'];
$rol = $_GET['rol'];
$Nombre = $_GET['Nombre'];
$Apellido = $_GET['Apellido']; 
$DNI = $_GET['DNI']; 
$Direccion = $_GET['Direccion']; 
$Ciudad = $_GET['Ciudad']; 
$Telefono = $_GET['Telefono']; 
$Email = $_GET['Email']; 


?>

</head>
<body>

<div class="container-fluit"> 

    <!-- Título de la página -->
<div class="alert alert-dark text-center fst-italic" role="alert">
    <h3> Baja de entrenador</h3> 
</div>
<br>

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">

        <form action="baja_entrenador_sql.php" method="POST" name="form">
            <div class="mb-3">
                <label for="usuario" class="form-label"> Eliminar usuario</label>
                <input type="text"  class="form-control" id="usuario" name="usuario" value=<?php echo $usuario ?>>
            </div>
            <div class="mb-3">
                <label for="clave" class="form-label"> Eliminar la clave</label>
                <input type="text" class="form-control" id="clave" name="clave"  value=<?php echo $clave ?> >
            </div>
            <div class="mb-3">
                <label for="rol" class="form-label"> Eliminar el Rol</label>
                <input type="text" class="form-control" id="rol" name="rol"  value=<?php echo $rol ?> >
            </div>     
            
            <div class="mb-3">
                <label for="Nombre" class="form-label"> Eliminar el Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" value=<?php echo $Nombre ?> > 
            </div> 

            <div class="mb-3">
                <label for="Apellido" class="form-label"> Eliminar Apellido</label>
                <input type="text" class="form-control" id="apellido" name="Apellido" value=<?php echo $Apellido ?>>
            </div> 

            <div class="mb-3">
                <label for="dni" class="form-label"> Eliminar el DNI</label>
                <input type="text" class="form-control" id="dni" name="DNI" value=<?php echo $DNI ?> >
            </div> 

            <div class="mb-3">
                <label for="dire" class="form-label"> Eliminar la direccion</label>
                <input type="text" class="form-control" id="dire" name="Direccion" value=<?php echo $Direccion ?> >
            </div>
            
            <div class="mb-3">
                <label for="ciudad" class="form-label"> Eliminar la ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="Ciudad"  value=<?php echo $Ciudad ?> >
            </div> 

            <div class="mb-3">
                <label for="telef" class="form-label"> Eliminar el Telefono</label>
                <input type="text" class="form-control" id="telef" name="Telefono" value=<?php echo $Telefono ?> > 
            </div> 

            <div class="mb-3">
                <label for="Email" class="form-label"> Eliminar el Email</label>
                <input type="text" class="form-control" id="email" name="Email" value=<?php echo $Email ?> >
            </div> 
            <!--campo oculto-->
                
                <button type="submit" class="btn btn-primary" name='boton' value=1> Eliminar  </button>
                <button type="submit" class="btn btn-danger" name='boton' value=0>Cancelar</button>
        </form> 
        <br>
        <?php //echo $mensaje ?>   

    </div>
    <div class="col-3"></div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>