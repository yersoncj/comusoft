<?php
$insertTema = "INSERT INTO tema
                              (titulo, asignatura, contenido, palabras_clave,codigo_youtube,enlace_github,enlace_libro,enlace_1,enlace_2,estado)
                              VALUES ('$titulo',$asignatura,'$contenido','$palabras_clave','$video','$github','$libro','$enlace1','$enlace2','ACTIVO')";

$resultInsertTema = mysqli_query($con,$insertTema);

if($resultInsertTema === false){
  $_SESSION['mensajeError']="Error: ".mysqli_error($con);
  }
  else{
    $_SESSION['mensaje']="Tema: $titulo fue creado correctamente.";
  }
  header('Refresh: 0; URL=../../index.php');

  //sqlsrv_free_stmt($resultInsertAsignatura);//libero array de result
  mysqli_close($con); // cierro conexion
 ?>
