    
<!doctype html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>  Eliminar actividad !</title>

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

    $mensaje = 'Ingrese los datos de la  actividad o entrenamiento';
    if(isset($_GET['mensaje'])){
      if($_GET['mensaje']=='uno'){$mensaje = 'El usuario ya ha sido elimininado en la base de datos';}
    }

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

   // $usu =$Cod_activ; 
    ?>

  </head>
  <body>

<div class="container-fluit"> 
    
        <!-- Título de la página -->
    <div class="alert alert-dark text-center fst-italic" role="alert">
        <h3> Baja de actividad </h3> 
    </div> 
    <br>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <form action="baja_actividad_sql.php" method="POST">
            <div class="mb-3">
                    <label for="Cod_activ" class="form-label"> </label>
                    <input type="hidden"  class="form-control" id="Cod_activ" name="Cod_activ" value=<?php echo $Cod_activ ?>>
                </div> 
            <div class="mb-3">
                    <label for="Nombre" class="form-label">Eliminar nombre de la actividad</label>
                    <input type="text" disabled class="form-control" id="Nombre" name="Nombre" value=<?php echo $Nombre ?>>
                </div>
                <div class="mb-3">
                    <label for="Modalidad_semanal" class="form-label"> Eliminar los dias  </label>
                    <input type="text" class="form-control" id="Modalidad_semanal" name="Modalidad_semanal"  value=<?php echo $Modalidad_semanal ?> >
                </div>
                <div class="mb-3">
                    <label for="f_inicio" class="form-label"> Eliminar la fecha de inicio</label>
                    <input type="date" class="form-control" id="f_inicio" name="f_inicio"  value=<?php echo $f_inicio ?> >
                </div>     
                
                <div class="mb-3">
                    <label for="f_acaba" class="form-label"> Eliminar la fecha de fin </label>
                    <input type="date" class="form-control" id="f_acaba" name="f_acaba" value=<?php echo $f_acaba ?> > 
                </div> 

                <div class="mb-3">
                    <label for=" Hora_inicio " class="form-label"> Eliminar Hora inicio </label>
                    <input type="text" class="form-control" id="Hora_inicio" name=" Hora_inicio " value=<?php echo $Hora_inicio ?>>
                </div> 

                <div class="mb-3">
                    <label for=" Hora_fin" class="form-label"> Eliminar hora fin</label>
                    <input type="text" class="form-control" id="Hora_fin" name="Hora_fin " value=<?php echo $Hora_fin ?> >
                </div> 

                <div class="mb-3">
                    <label for="Cod_entrenador" class="form-label"> Eliminar codigo del entrenador </label>
                    <input type="text" class="form-control" id="Cod_entrenador" name="Cod_entrenador" value=<?php echo $Cod_entrenador ?> >
                </div>
                
                <div class="mb-3">
                    <label for="turno" class="form-label"> Eliminar el turno </label>
                    <input type="text" class="form-control" id="turno" name="turno"  value=<?php echo $turno ?> >
                </div> 

                <div class="mb-3">
                    <label for="precio" class="form-label">Eliminar el precio </label> 
                    <input type="text" class="form-control" id="precio" name="precio" value=<?php echo $precio ?> > 
                </div> 

                
                <!--campo oculto--> 
                    
                    <button type="submit" class="btn btn-primary" name='boton' value=1> Eliminar </button>
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