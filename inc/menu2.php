<?php
	function menu(){
		session_start();
		  $_SESSION["usuario"]=isset($_GET['usuario']);?>
		  	<?php 
			 if(!($_SESSION["usuario"]==null)){
				 echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Entren para la fuerza</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
	
		
          <a class="nav-link active"  aria-current="page" href="index.php?%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20usuario=<?=$afa1?>">Pagina principal</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Galeria
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="maquinas.php?%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20usuario=<?=$afa1?>">Maquinas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="pesas.php?%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20usuario=<?=$afa1?>">Pesas</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="horarios.php?%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20usuario=<?=$afa1?>">Horarios de clase</a>
		';
			  }else{
				  echo '
				  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Entrena para la fuerza</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Pagina principal</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Galeria
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="maquinas.php">Maquinas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="pesas.php">Pesas</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="horarios.php">Horarios de clase</a>
		';
			  }
		?>
        </li>
      </ul>
	  <?php

	  if(!($_SESSION["usuario"]==null)){
		  
		echo '<form class="d-flex" action="cerrar_sesion.php">
        <button class="btn btn-outline-success" type="submit">cerrar sesion</button>
        
      </form>';
	  }else{
	
      echo '<form class="d-flex"  action="iniciar_sesion.php">
        <button class="btn btn-outline-success" type="submit">iniciar sesion</button>
      </form>
	  <form class="d-flex" action="Registrarse.php">
        <button class="btn btn-outline-success" type="submit">Registrarse</button>
      </form>';}
	  session_destroy();
	  ?>
	  
    </div>
  </div>
</nav>
	<?php
	}
	?>