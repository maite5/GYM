<!doctype html>
	<html lang="es">
	<head>
	<!--required meta tags-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- archivos a incluir-->
	<?php 
		include('inc\menu2.php'); 

			
	?> 
	<link href="css\bootstrap.min.css" rel="stylesheet">
	<title>Inicio</title>
	</head>
	
	<body bgcolor="#9b9b9b">

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>

<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>

	<title>Inicio</title>
	</head>
	
	<body>
		<!-- Menu de navegacion-->
		<?php
			menu();
		?>


	<main> 
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item">
              <img class="imgcaru" src="img/3c.jpg" width="100%" height="100%"      aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect> > 
              <div class="container">
                <div class="carousel-caption">
                  <h1>Gym Bs As </h1>
                  <p>   Bs As llega <br> nivel  que tenemos para ti. Te esperamos! .</p>
                  <p><a class=" btn btn-outline-success " href="#">Quiero ser orador</a>  
                    <a class="btn btn-outline-success" href="#">Comprar Tickets</a> </p>
                </div>
              </div>
            </div>
            <div class="carousel-item active"> 
              <img class="imgcaru" src="img/2c.jpg" width="100%" height="100%"      aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect> > 
      
              <div class="container">
                <div class="carousel-caption">
                  <h1>Conf Bs As </h1>
                  <p>   Bs As lleg tenemos para ti. Te esperamos! .</p>
                  <p><a class=" btn btn-outline-success " href="#">Quiero ser orador</a>  
                    <a class="btn btn-outline-success" href="#">Comprar Tickets</a> </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
				<img class="imgcaru" src="img/4d.jpg" width="100%" height="100%"      aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect> > 
              <div class="container">
                <div class="carousel-caption">
                  <h1>Conf Bs As </h1> 
                  <p>   Bs As llega  nivel  que tenemos para ti. Te esperamos! .</p>
                  <p><a class=" btn btn-outline-success " href="#">Quiero ser orador</a>  
                    <a class="btn btn-outline-success" href="#">Comprar Tickets</a> </p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">siguiente</span>
          </button>
        </div>
      </main>
	  
	  
	  
	<div class="container marketing">
<div class="row">
	
  <div class="col-lg-4"> 
  <center> 	<img class="rounded-circle" src="img/2b.png" width="140px" height="140px"> 

	 <h2> Tomar agua </h2> 
	<p> Es recomendable tomar 2L diarios.   </p>
	<p><a class="btn btn-secondary" href="#">Ver detalles »</a></p>
    <center>   </div>    
  <div class="col-lg-4">
	<center> <img class="rounded-circle" src="img/1b.png" width="140px" height="140px"> 

	<h2> Cuidar tu salud </h2>
	<p>  Hacer ejercicios genera Bienestar además mejora el sistema cardiovascular.   </p>
	<p><a class="btn btn-secondary" href="#">Ver detalles »</a></p>
     <center> </div>
  <div class="col-lg-4">
	<center> <img class="rounded-circle" src="img/3b.png" width="140px" height="140px"> 

	<h2> Instalaciones   </h2>
	<p> Lavarte las manos antés y después de los entrenamientos.    </p>
	<p><a class="btn btn-secondary" href="#">Ver detalles »</a></p>
     <center>  </div>  
</div>



<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
	<h2 class="featurette-heading">Título del primer reportaje. <span class="text-muted">Te dejará boquiabierto.</span></h2>
	<p class="lead">Un gran contenido de marcador de posición para la primera característica aquí. Imagina una prosa emocionante aquí.</p>
  </div>
  <div class="col-md-5">
	<img class="imgcaru" src="img/1c.png" width="500px" height="500px"  >

  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
	<h2 class="featurette-heading">Oh si, es tan bueno. <span class="text-muted">Mira por ti mismo.</span></h2>
	<p class="lead">Más contenido de marcador de posición aquí para darle una idea de cómo funcionaría este diseño con contenido real del mundo real en su lugar.</p>
  </div>
  <div class="col-md-5 order-md-1">
	<img class="imgcaru" src="img/2d.jpg"  width="475px" height="500px"  >

  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
	<h2 class="featurette-heading">Y por último, esta. <span class="text-muted">Fijate</span></h2>
	<p class="lead">Y sí, este es el último bloque de contenido de marcador de posición representativo. Una vez más, no está realmente pensado para ser leído, simplemente aquí para darte una mejor vista de cómo se vería esto con algo de contenido real. Tu contenido.</p>
  </div>
  <div class="col-md-5">
	<img class="imgcaru" src="img/3d.jpg"  width="500px" height="500px" > 

  </div>
</div>

<hr class="featurette-divider">

</div> 







	<?php
	 if(!($_SESSION["usuario"]==null)){
echo '<section class="section pb-5">
<div class="container"> 
<!--Section heading-->
<h2 class="section-heading h1 pt-4">Contactanos</h2>
<!--Section description-->
<p class="section-description pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error
  amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a
  pariatur accusamus veniam.</p>

<div class="row">

  <!--Grid column-->
  <div class="col-lg-5 mb-4">

	<!--Form with header-->
	<div class="card">

	  <div class="card-body">
		<!--Header-->
		<div class="form-header blue accent-1">
		  <h3><i class="fas fa-envelope"></i> Escribenos:</h3>
		</div>

		<p>Raramente respondemos, pero solo con el mejor contenido.</p>
		<br>

		<!--Body-->
		

	  </div>

	</div>
	<!--Form with header-->

  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-lg-7">

	<!--Google map-->
	<div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
	  <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
		frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<br>
	<!--Buttons-->
	<div class="row text-center">
	  <div class="col-md-4">
		<a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
		<p>Buenos aires</p>
		<p>Argentina</p>
	  </div>

	  <div class="col-md-4">
		<a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
		<p>+ 54 2342 5862</p>
		<p>lun - vie, 8:00-22:00</p>
	  </div>

	  <div class="col-md-4">
		<a class="btn-floating blue accent-1"><i class="fas fa-envelope"></i></a>
		<p>info@gmail.com</p>
		<p>sale@gmail.com</p>
	  </div>
	</div>

  </div>
  <!--Grid column-->

</div>
	  </div>
</section>
		</footer> 

<div class="container">
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
<p class="col-md-4 mb-0 text-muted"></p>

<a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
</a>';}
?>
<ul class="nav col-md-4 justify-content-end">
<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
</ul>
</footer>
</div>



<!--Fin del futter-->


		<script src="js\bootstrap.bundle.min.js"></script>
	<!--MdBootrap-->
	<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>	
	</body>
	</html>