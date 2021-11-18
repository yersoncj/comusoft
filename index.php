<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="public/imagenes/ing_sistemas.jpg">
    <title>COMUSOFT</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="public/imagenes/logo2b.png" alt="" width="140">
        </a>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="public/paginas/crearAsignatura.php">
              <img src="public/imagenes/bookmark-plus.svg" height="30">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="public/paginas/crearTema.php">
              <img src="public/imagenes/terminal-plus.svg" height="30">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="public/paginas/login.php">
              <img src="public/imagenes/person-fill.svg" height="30">
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container" style="margin-top:50px">
      <br>
      <br>
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="4000">
            <img src="public/imagenes/banner1.jpg" class="d-block w-100" height="300">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="public/imagenes/banner4.jpg" class="d-block w-100" height="300">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="public/imagenes/banner3.jpg" class="d-block w-100" height="300">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
      <?php
      session_start();
      if(!empty($_SESSION["mensaje"])){
        echo"<div class='alert alert-success'>".$_SESSION["mensaje"]."</div><br>";
        $_SESSION["mensaje"]="";
      }
      if(!empty($_SESSION["mensajeError"])){
        echo"<div class='alert alert-danger'>".$_SESSION["mensajeError"]."</div><br>";
        $_SESSION["mensajeError"]="";
      }
       ?>
      <div class="alert alert-info" align="center">
        COMUNIDAD DE PRÁCTICA DE INGENIERÍA DE SISTEMAS DE LA U.F.P.S COMUSOFT
        <br> <small><i>UN ESPACIO PARA COMPARTIR CONOCIMIENTO CON TODOS LOS ESTUDIANTES DE INGENIERÍA DE SISTEMAS
        Y CREAR UNA COMUNIDAD VIRTUAL</i></small>
      </div>
      <div class="row row-cols-1 row-cols-md-4">
        <?php
          require_once('app/conexionBD.php');
          include ("app/modelo/listaAsignaturas.php");
          while($det= mysqli_fetch_array($resultAsignaturas)){
            $d=mt_rand(1,4);
         ?>
        <div class="col">
          <div class="card text-white
          <?php
          if($d==1){
            echo("bg-warning");
          }
          else if($d==2){
            echo("bg-danger");
          }
          else if($d==3){
            echo("bg-info");
          }
          else if($d==4){
            echo("bg-success");
          }
          ?>
          mb-3" style="max-width: 18rem;">
            <div class="card-header"><?php echo($det['nombre']); ?></div>
            <div class="card-body">
              <h5 class="card-title"><?php echo($det['codigo']); ?></h5>
              <h5 class="card-title">SEMESTRE <?php echo($det['semestre']); ?></h5>
              <p class="card-text"><?php echo($det['descripcion']); ?></p>
              <a href="public/paginas/listaTemas.php?asignatura=<?php echo($det['id']); ?>" class="btn btn-light" name="button" >VER TEMAS</a>
            </div>
          </div>
        </div>
        <?php
        }
        mysqli_close($con); // cierro conexion
         ?>
      </div>
    </div>
    <br>
    <br>
    <div class="footer-copyright white text-secondary">
      <div class="container" align="center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <hr color="orange" />
          Copyright © 2021 UFPS - Todos los Derechos Reservados
          <br>
          Desarrollado por: YERSON - CAMILO - JESUS
          <br>
          Versión: 1.0
          <br>
          -----
        </div>
      </div>
    </div>
    <div class="bg-light" align="center">
      <a href="https://ww2.ufps.edu.co/" target="_blank" class="col-4">
        <img src="public/imagenes/logo_ufps.png" height="60">
      </a>
      <a href="https://ingsistemas.cloud.ufps.edu.co/" target="_blank" class="col-4 offset-4">
        <img src="public/imagenes/logo_vertical_ingsistemas.png" height="60">
      </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
