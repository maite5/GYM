<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--icon-->
    

    <!-- Archivos a incluir -->
    <?php 
      include('inc/menu.php');  
      include('inc/conexion.php');
    ?>

    <!-- Trabajo con BDD -->
    <?php
    $rol1 = 'administrador';
    $rol2 = 'estudiante'; 

    $consulta = "select count(distinct usuario) as usuarios from usuario";
    $consulta1 = "select count(distinct usuario )as administradores from usuario where rol = '$rol1' ";
    $consulta2 = "select count(distinct usuario )as analistas from usuario where rol = '$rol2' ";
    $consulta3 = "select distinct * from usuario";
    $consulta4 ="select distinct * from entrenador"; 

    $resultado = mysqli_query($conexion,$consulta);
    $resultado1 = mysqli_query($conexion,$consulta1);
    $resultado2 = mysqli_query($conexion,$consulta2);
    $resultado3 = mysqli_query($conexion,$consulta3);

    $resultado4 = mysqli_query($conexion,$consulta4);

    while($fila = mysqli_fetch_assoc($resultado)){
        $usuarios_total = $fila['usuarios'];
    }

    while($fila = mysqli_fetch_assoc($resultado1)){
        $usuarios_administrador = $fila['administradores'];
    }

    while($fila = mysqli_fetch_assoc($resultado2)){
        $usuarios_analistas = $fila['analistas'];
    }

    ?>


    <title>Plantilla</title>
	
  </head>
  <body background="img/font.jpg" class="container-fluid">   

    <!-- Menu de navegacion -->
    <?php //menu(); ?>

    <!-- Título de la página -->
	<?php
	include("inc/titulo.php");
	?>

    <!-- Fila 1 -->
    <div class="row">
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-primary">Usuarios: <?php echo $usuarios_total;  ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-primary">Administradores: <?php echo $usuarios_administrador;  ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-primary"> Inscriptos: <?php echo $usuarios_analistas;  ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-success">
                    <a href="alta_usuario.php" >Nuevo usuario</a>
                </button>
            </div>
        </div>
    </div><br>

    <!--Menu vertical-->
 
  <div class="btn-group-vertical" role="group" aria-label="Basic example">
   
  <a href="bdd.php" class="btn btn-primary"> Usuarios</a>
  <a href="bdd_entrenador.php" class="btn btn-primary">Entrenador</a>
  <a href="bdd_actividad.php" class="btn btn-primary">Actividad</a>
  <a href="bdd_promocion.php" class="btn btn-primary">Promocion</a> 
  <a href="bdd_inscripcion.php" class="btn btn-primary">Inscripcion</a> 
</div>
    

    <!-- Fila 2 -->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">

        <div class="table-responsive">
      <!-- <table class="table table-bordered table-sm table-hover table-dark" > -->
        <table class="table table-dark table-hover">  
        <thead>
                <tr class="text-center">
                    <td>Usuario</td><td>Clave</td><td>Rol</td><td>Nombre</td><td>Apellido</td> <td>DNI</td><td>Dirección</td> <td> Ciudad</td> <td>Telefono</td><td>Email</td> <td> <p>
              
                Editar 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
</svg>
              </a>
            </p>
                 </td> 

                <td> <p>
              Eliminar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
</svg>
            </p>
</td> 
                </tr>
            </thead>
            <tbody>
                <?php
                    while($columna =mysqli_fetch_array($resultado3)){
                        echo "<tr>";
                            echo "<td>".$columna['usuario']."</td>";
                            echo "<td>".$columna['clave']."</td>";
                            echo "<td>".$columna['rol']."</td>";
                            ECHO "<td>".$columna['Nombre']."</td>";
                            ECHO "<td>".$columna['Apellido']."</td>";
                            ECHO "<td>".$columna['DNI']."</td>";
                            ECHO "<td>".$columna['Direccion']."</td>";
                            ECHO "<td>".$columna['Ciudad']."</td>";
                            ECHO "<td>".$columna['Telefono']."</td>";
                            ECHO "<td>".$columna['Email']."</td>"; 

                            echo "<td>

                                    <a href='modifica_usuario.php?usuario=".$columna['usuario']."
                                    &clave=".$columna['clave']."
                                    &rol=".$columna['rol']."
                                    &Nombre=".$columna['Nombre']."
                                    &Apellido=".$columna['Apellido']."
                                    &DNI=".$columna['DNI']."
                                    &Direccion=".$columna['Direccion']."
                                    &Ciudad=".$columna['Ciudad']."
                                    &Telefono=".$columna['Telefono']."
                                    &Email=".$columna['Email']."
                                    '>Editar</a> 
                                    
                                    </td> <td> 
                                    
                                 

                     <a href='baja_usuario.php?usuario=".$columna['usuario']."
                                    &clave=".$columna['clave']."
                                     &rol=".$columna['rol']."
                                     &Nombre=".$columna['Nombre']."
                                     &Apellido=".$columna['Apellido']."
                                     &DNI=".$columna['DNI']."
                                     &Direccion=".$columna['Direccion']."
                                     &Ciudad=".$columna['Ciudad']."
                                     &Telefono=".$columna['Telefono']."
                                     &Email=".$columna['Email']."
                                     

                                     '>Eliminar</a> 
                                  </td>";  
                                 
                        echo "</tr>";       
                    }
                ?>



            <!--Inicio entrenador-->


            <!--Then end entrenador-->

            </tbody>
        </table>
    </div>

        </div>
        <div class="col-2"></div>
    </div>











    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>