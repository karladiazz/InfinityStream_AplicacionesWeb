<?php

   session_start();

   if(!isset($_SESSION['usuario'])){
    echo '
     <script>
       alert("debes iniciar sesion");
       window.location = "index.php";
     </script>
     ';
     session_destroy();
     die();
   }
  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity Stream</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">InfinityStream</div>
        <nav>
            <ul>
                <li><a href="bienvenida.php#inicio">Inicio</a></li>
                <li><a href="bienvenida.php#peliculas">Películas</a></li>
                <li><a href="bienvenida.php#documentales">Documentales</a></li>
                <li><a href="bienvenida.php#series">Series</a></li>
                <li><a href="php/cerrar_sesion.php">Salir</a></li>
            </ul>
        </nav>
    </div>

    <div class="main-content">
        <section id="inicio" class="hero-section">
            <h1>Bienvenido a InfinityStream</h1>
            <p>Explora un mundo de entretenimiento sin fin</p>
        </section>

        <section id="peliculas" class="category">
            <h2><a href="peliculas.html">Películas</a></h2>
            <div class="content-grid">
                <div class="content-card">
                    <div class="overlay">
                        <h3>Ver Pelicula</h3>
                    </div>
                    <img src="img/movie1.svg" alt="Película 1">
                </div>
                <div class="content-card">
                    <div class="overlay">
                        <h3>Ver Pelicula</h3>
                    </div>
                    <img src="img/movie2.svg" alt="Película 2">
                </div>
                <!-- Añadir más tarjetas de contenido según sea necesario -->
            </div>
        </section>

        <section id="documentales" class="category">
            <h2><a href="documentales.html">Documentales</a></h2>
            <div class="content-grid">
                <div class="content-card">
                    <div class="overlay">
                        <h3>Ver Documental</h3>
                    </div>
                    <img src="img/documentary1.svg" alt="Documental 1">
                </div>
                <div class="content-card">
                    <div class="overlay">
                        <h3>Ver Documental</h3>
                    </div>
                    <img src="img/documentary2.svg" alt="Documental 2">
                </div>
                <!-- Añadir más tarjetas de contenido según sea necesario -->
            </div>
        </section>

        <section id="series" class="category">
            <h2><a href="series.html">Series</a></h2>
            <div class="content-grid">
                <div class="content-card">
                    <div class="overlay">
                        <h3>Ver Serie</h3>
                    </div>
                    <img src="img/series1.svg" alt="Serie 1">
                </div>
                <div class="content-card">
                    <div class="overlay">
                        <h3>Ver Serie</h3>
                    </div>
                    <img src="img/series2.svg" alt="Serie 2">
                </div>
                <!-- Añadir más tarjetas de contenido según sea necesario -->
            </div>
        </section>
    </div>

</body>
</html>
