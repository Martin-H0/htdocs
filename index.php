<?php

require './DBC.php';

session_start();

echo '
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	
		<title>Usero</title>
	</head>
	<body>
		<header>

		<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Chovatelé zvířat</a>
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
            <a class="nav-link active" aria-current="page" href="register.php">Register</a>
			
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log In</a>
          </li>
		  
          
        </ul>
        
      </div>
    </div>
  </div>
</nav>

		
			<a href="register.php">Register</a>
			<a href="login.php">Log In</a>';
if (!empty($_SESSION["username"]))
{
	echo '<a href="data.php">Data</a>
	Logged in as <b>' . $_SESSION["username"] . '</b>
	<a href="handle_logout.php">Log Out</a>
	';
}
echo '
		</header>
		<br>
        <br>
        <br>

		<section>
            <div class="text-with-image margin - right">
                <img src="media/beaver.jpg" alt="Chovatelé zvířat" class="image-right">
                <div class="content-left">
                    <h2>Důležité odkazy:</h2>
                    <ul>
                        <li><a href="#">Nákup zvířat</a></li>
                        <li><a href="#">Chovatelské tipy</a></li>
                        <li><a href="#">Zdraví a péče</a></li>
                    </ul>
                    <p>
                        Tento web je věnován chovatelům zvířat. Najdete zde užitečné informace o chovu, péči o zvířata, tipy a triky od zkušených chovatelů a mnoho dalšího.
                    </p>
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
