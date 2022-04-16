<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--icon-->
    <?php 
     // include('/menu.php');  
      include('.conexion.php');
    ?>


<?php
$consulta5 = "select distinct * from actividad"; ?>

<title> Dasbohar Actividad </title>
<?php 
//Paso1: Datos de conexion
$usuario = 'root';
$clave = 'root';
$servidor = 'localhost'; 
$basededatos = 'tpgym';

//PASO 2: crear la conectiopn 
//el metodo connect siempre recibe tres paratros y permite conertarse a la bdd
 $conexion = mysqli_connect($servidor,$usuario, $clave) or die ('No se pudo conectar al servidor');

 //Paso: 3 Me conecto a la bdd con el metodo q selecciona la bdd
 $db=mysqli_select_db($conexion, $basededatos) or die ('No se pudo conectar a la base de datos');

 //paso 4: Creamos la consulta SQL
$consulta = "select count(DISTINCT usuario) as usuarios from usuario";  
$consulta5 = "select * from actividad";

//paso 5 : Ejecutar la consulta de SQL 
$resultado =mysqli_query($conexion, $consulta) or die ('No se pudo ejecutar la consulta SQL');
$resultado5 = mysqli_query($conexion, $consulta5);
//PASO 6: Cierro la conexión Buena practica
mysqli_close($conexion); 
//cualquier nombre por ejemplo fila y guardar un valor dentro d mysql fetch
    while($fila =mysqli_fetch_assoc($resultado)){  
        $cantidad_usuarios= $fila['usuarios']; }  
?> 



</head>

<?php 

function horario(){ 
    
$resultado5 = mysqli_query($conexion, $consulta5);

 // <!--Inicio actividad-->
 ?>
<!-- Fila 2 -->
 <div class="row">
       <div class="col-2"></div>
       <div class="col-8">

       <div class="table-responsive">
     <!-- <table class="table table-bordered table-sm table-hover table-dark" > -->
       <table class="table table-primary table-striped">  
       <thead>
               <tr class="text-center">
                   <td>Nombre</td><td>Modalidad semanal</td><td>Fecha de Inicio</td><td>Fecha fin</td><td>Hora inicio</td> <td>Hora fin</td><td> Cod entrenador </td> <td>Turno</td><td>Precio</td>
               </tr>
           </thead>
           <tbody>
               <?php
                   while($columna =mysqli_fetch_array($resultado5)){
                       echo "<tr>";
                           echo "<td>".$columna['Nombre']."</td>";
                           echo "<td>".$columna['Modalidad_semanal']."</td>";
                           echo "<td>".$columna['f_inicio']."</td>";
                           ECHO "<td>".$columna['f_acaba']."</td>";
                           ECHO "<td>".$columna['Hora_inicio']."</td>";
                           ECHO "<td>".$columna['Hora_fin']."</td>";
                           ECHO "<td>".$columna['Cod_entrenador']."</td>";
                           ECHO "<td>".$columna['turno']."</td>";
                           ECHO "<td>".$columna['precio']."</td>";
                           //ECHO "<td>".$columna['Email']."</td>"; 

                           echo "<td>
                                   <a href='modifica_usuario.php?entrenador=".$columna['entrenador']."
                                   &Nombre=".$columna['Nombre']."
                                   &Modalidad_semanal=".$columna['modalidad_semanal']."
                                   &f_inicio=".$columna['f_inicio']."
                                   &f_acaba=".$columna['f_acaba']."
                                   &Hora_inicio=".$columna['Hora_inicio']."
                                   &Hora_fin=".$columna['Hora_fin']."
                                   &Cod_entrenador=".$columna['Cod_entrenador']."
                                   &turno=".$columna['turno']."
                                   &precio=".$columna['precio']."
                                   '>Editar</a>
                                   </td> <td> 
                                   
                                   

                                   <a href='baja_usuario.php?usuario=".$columna['usuario']."
                                   &Nombre=".$columna['Nombre']."
                                    &Modalidad_semanal=".$columna['Modalidad_semanal']."
                                    &f_inicio=".$columna['f_inicio']."
                                    &f_acaba=".$columna['f_acaba']."
                                    &Hora_inicio=".$columna['Hora_inicio']."
                                    &Hora_fin=".$columna['Hora_fin']."
                                    &Cod_entrenador=".$columna['Cod_entrenador']."
                                    &turno=".$columna['turno']."
                                    &precio=".$columna['precio']."
                                    

                                    '>Eliminar</a> 
                                 </td>";  
                                
                       echo "</tr>";       
                   }
               ?>
           </tbody>
       </table>
   </div>

       </div>
       <div class="col-2"></div>
   </div>



   







   <!--The end activity-->










<?php
} ?>
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