<?php



$consultaAsignatura = "select *
                         FROM   asignatura as a
                         WHERE  a.estado = 'ACTIVA'";

$resultAsignaturas = mysqli_query($con,$consultaAsignatura);

if($resultAsignaturas === false){
  echo "Falló la Conexión S: Póngase en contacto con el administrador del sistema !"; ?><br /><br /><?php
  //die(print_r( odbc_error()));
}

/********************************************************************************/

 ?>
