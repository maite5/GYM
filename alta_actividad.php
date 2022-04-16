    
<!doctype html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>  Alta actividad !</title>

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

    $mensaje = 'Ingrese los datos de la  actividad';
    if(isset($_GET['mensaje'])){
      if($_GET['mensaje']=='uno'){$mensaje = 'La actividad ya existe en la base de datos';}
    }

   
    ?>

  </head>
  <body>

<div class="container-fluit"> 
    
        <!-- Título de la página -->
    <div class="alert alert-dark text-center fst-italic" role="alert">
        <h3> Alta de actividad </h3>  
    </div> 
    <br>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <form action="alta_actividad_sql.php" method="POST">
        
            <div class="mb-3">
                    <label for="Nombre" class="form-label">Agregar nombre de la actividad</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre"  > 
                </div>
                <div class="mb-3">
                    <label for="Modalidad_semanal" class="form-label"> Agregar los dias  </label>
                    <input type="text" class="form-control" id="Modalidad_semanal" name="Modalidad_semanal"   >
                </div>
                <div class="mb-3">
                    <label for="f_inicio" class="form-label"> Agregar la fecha de inicio</label>
                    <input type="date" class="form-control" id="f_inicio" name="f_inicio"     >
                </div>     
                
                <div class="mb-3">
                    <label for="f_acaba" class="form-label"> Agregar la fecha de fin </label>
                    <input type="date" class="form-control" id="f_acaba" name="f_acaba"   > 
                </div> 

                <div class="mb-3">
                    <label for=" Hora_inicio " class="form-label"> Agregar Hora inicio </label>
                    <input type="text" class="form-control" id="Hora_inicio" name=" Hora_inicio " >
                </div> 

                <div class="mb-3">
                    <label for=" Hora_fin" class="form-label"> Agregar hora fin</label>
                    <input type="text" class="form-control" id="Hora_fin" name="Hora_fin "  >
                </div> 

                <div class="mb-3">
                    <label for="Cod_entrenador" class="form-label">Agregar codigo del entrenador en numero: 2(Leonel) 7(felipe) </label>
                    <input type="text" class="form-control" id="Cod_entrenador" name="Cod_entrenador"  >
                </div>
                
                <div class="mb-3">
                    <label for="turno" class="form-label"> Agregar el turno </label>
                    <input type="text" class="form-control" id="turno" name="turno"   >
                </div> 

                <div class="mb-3">
                    <label for="precio" class="form-label"> Agregar el precio </label> 
                    <input type="text" class="form-control" id="precio" name="precio"   > 
                </div> 

                
                <!--campo oculto--> 
                    
                    <button type="submit" class="btn btn-primary"> Agregar </button> 
                   

            </form> 
            <br>
            <?php echo $mensaje ?>   

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