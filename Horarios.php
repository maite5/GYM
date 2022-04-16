<!doctype html>
	<html lang="es">
	<head>
	<!--required meta tags-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- archivos a incluir-->
	<?php 
		include('inc\menu2.php'); 
		include('inc\conexion.php');
	?> 
	<link href="css\bootstrap.min.css" rel="stylesheet">
	<title>Horarios</title>
	</head>
		<body background="img/font.jpg">
		<!-- Menu de navegacion-->
		<?php
			menu();
			$consulta ="select distinct * from entrenador";
			$resultado = mysqli_query($conexion,$consulta);
			$c=0;
			 while($columna =mysqli_fetch_array($resultado)){
				 
				 $c+=1;	
				 if($c==1){
					$en1=$columna['usuario']; 
				 }else if($c==2){
					$en2=$columna['usuario'];
				 }else if($c==3){
					$en3=$columna['usuario'];
				 }else if($c==4){
					$en4=$columna['usuario'];
				 }else if($c==5){
					$en5=$columna['usuario']; 
				 }   
				
								
                    }
		?>
		

		<script src="js\bootstrap.bundle.min.js"></script>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="30%" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posición: miniatura" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img src="img/class1.jpg" class="rounded float-start" alt="Levantar Pesas"></svg>

            <div class="card-body">
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h3>Levantamiento de Pesas</h3></font></font></p>
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A cargo de el profesor <?php echo $en1;?>. </font></font></p>
			  <div class="dt-sc-class-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lunes a viernes, de 08.00 a 10.00</font></font></div>
			  
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
				<a href="#">Leer mas</a>
                 </div>
                <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 minutos</font></font></small>
              </div>
            </div>
          </div>
        </div>
			<div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="30%" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posición: miniatura" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img src="img/class2.jpg" class="rounded float" alt="Entrenamiento De Piernas"></svg>

            <div class="card-body">
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h3>Entrenamiento De Piernas</h3></font></font></p>
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A cargo de el profesor <?php echo $en2;?>. </font></font></p>
<div class="dt-sc-class-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lunes a viernes, de 10:00 a 12.00</font></font></div>
			  
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
				<a href="#">Leer mas</a>
                 </div>
                <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 minutos</font></font></small>
              </div>
            </div>
          </div>
        </div>
			<div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="30%" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posición: miniatura" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img src="img/class3.jpg" class="rounded float" alt="Levantamiento corporal"></svg>

            <div class="card-body">
			<p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h3>Levantamiento corporal</h3></font></font></p>
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A cargo de el profesor <?php echo $en3;?>. </font></font></p>
			  <div class="dt-sc-class-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">De lunes a viernes, de 12.00 a 14.00</font></font></div>
			  
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
				<a href="#">Leer mas</a>
                </div>
                <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 minutos</font></font></small>
              </div>
            </div>
          </div>
        </div>
		</div>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="30%" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posición: miniatura" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img src="img/class4.jpg" class="rounded float" alt="Triceps"></svg>

            <div class="card-body">
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h3>Triceps</h3></font></font></p>
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A cargo de el profesor <?php echo $en4;?>. </font></font></p>
<div class="dt-sc-class-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lunes a viernes, de 14:00 a 16.00</font></font></div>
			  
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
				<a href="#">Leer mas</a>
                 </div>
                <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 minutos</font></font></small>
              </div>
            </div>
          </div>
        </div>
			<div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="30%" height="0" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posición: miniatura" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img src="img/class5.jpg" class="rounded float" alt="Abdominales"></svg>

            <div class="card-body">
			<p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><h3>Abdominales</h3></font></font></p>
              <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A cargo de el profesor <?php echo $en5;?>. </font></font></p>
			  <div class="dt-sc-class-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">De lunes a viernes, de 16.00 a 18.00</font></font></div>
			  
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
				<a href="#">Leer mas</a>
                </div>
                <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9 minutos</font></font></small>
              </div>
            </div>
          </div>
        </div>
		</div>
</body>
</html>