<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inu Nihongo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Inu Nihongo</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="inicio.php">Inicio</a></li>
        <li><a href="Introduccion/Introduccion.php">Introducción al japones</a></li>
        <li><a href="hiragana/introduccionhiragana.php">Hiragana</a></li>
        <li><a href="katakana/introduccionkatakana.php">Katakana</a></li>
        <li><a href="kanji/introduccionkanji.php">Kanji</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                aria-expanded="false">Gramática<span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="N5/PresentacionN5.php">N5</a></li>
            <li><a href="#">N4</a></li>
            <li><a href="#">N3</a></li>
            <li><a href="#">N2</a></li>
            <li><a href="#">N1</a></li>
          </ul>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                aria-expanded="false">Cuestionarios<span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li class="nav-item"><a href="select_exam.php" class="nav-link">Realizar</a></li>
            <li class="nav-item"><a href="old_exam_results.php" class="nav-link">Resultados</a></li>
          </ul>
          <li><a href="contactarsoporte.php">Soporte</a></li>
          <li><a href="misionvision.php">Acerca de</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      
      <?php
      session_start();
  
      // Verifica si hay una sesión iniciada
      if (isset($_SESSION['username'])) {
          // Si hay una sesión iniciada, muestra el contenido de la página
          $username = $_SESSION['username'];
          echo "
  
          <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' 
                  aria-expanded='false'>$username<span class='caret'></span>
            </a>
            <ul class='dropdown-menu' role='menu'>
              <li><a href='logout.php'>Log Out</a></li>
            </ul>  
          ";
      } else {
          
          echo "
          <ul class='nav navbar-nav navbar-right'>
            <li><a href='./login.php'><span class='glyphicon glyphicon-user'></span> Iniciar </a></li>
            <li><a href='./register.php'><span class='glyphicon glyphicon-log-in'></span> Registrarse </a></li>
          </ul>
          ";
      }
      ?>
        </ul>

    </div>
  </nav>
<header>

  
  <section class="textos-header">
    <h1>INU NIHONGO</h1>
    <center><img src="img/logo.png" class="imagen-logo" alt=""></center>
</section><br>
<div class="wave2" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-2.55,28.18 C-4.24,174.22 490.68,-48.78 500.00,49.99 L505.36,163.37 L-12.14,169.28 Z" style="stroke: none; fill: rgb(248, 207, 230);"></path></svg></div>
</header>
   
    <div class="container">
      <div class="jumbotron">
        <h1>Bienvenidos a Inu Nihongo</h1>
        <p>Encuentra el mejor contenido para hispanohablantes para el desarrollo del aprendizaje del japonés, te apoyamos con diversos contenidos del nivel N5 en base a la prueba JLPT (Examen de competencias del idioma japonés), mediante contenido didáctico tales como; cuestionarios, sopas de letras, crucigramas, memoramas y audios de apoyo para la mejora de la pronunciación. </p>
      </div>
    </div>
    <br><br>
</body>
<br><br><br><br><br>
<footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Inicio</a></li>
      <li class="menu__item"><a class="menu__link" href="./terminosycondiciones.php">Terminos y Condiciones</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Servicios</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contactanos</a></li>

    </ul>
    <p>&copy;2023 Inu Nihongo - Todos los derechos reservados</p>
  </footer>

</html>  