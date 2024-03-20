<?php

require './DBC.php';

session_start();

echo '
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	
		<title>Usero</title>
	</head>
	<body>
		<header>

		<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Novinky</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="data.php">Data</a>
			
          </li>
          <li class="nav-item">
            <a class="nav-link" href="handle_logout.php">Odhlásit</a>
          </li>
		  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="Page01.php">Novinky</a></li>
              <li><a class="dropdown-item" href="Page02.php">Krmivo</a></li>
              <li><a class="dropdown-item" href="Page03.php">Zvířata</a></li>
            </ul>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</nav>


		

		</header>

        <br>
        <br>
        <br>
        <section>
        <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="media/Fabia III modrá Race.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">BOBR</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="media/Felicia (1994) žlutá.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">želav a plast</h5>
              <p class="card-text">This is a short card.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="media/Kamiq bílá Moon.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">bzzbzz</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="media/Superb III červená Corrida.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">panda</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card h-100">
              <img src="media/Beaver.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">krmivo roku</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
    </div>
    </section>


		<footer class="navbar navbar-dark bg-dark fixed-bottom">
		    <div class="container-fluid">
		        <a class="navbar-brand" href="#">Secret message</a>
		    </div>
		</footer>
		
	</body>
</html>
';

?>
