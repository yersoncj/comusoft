<?php



$consultaTema = "select *
                         FROM   tema as a
                         WHERE  a.estado = 'ACTIVO'
                         and a.id=$tema";

$resultTema = mysqli_query($con,$consultaTema);

if($resultTema === false){
  echo "Falló la Conexión S: Póngase en contacto con el administrador del sistema !"; ?><br /><br /><?php
  //die(print_r( odbc_error()));
}

/********************************************************************************/

 ?>
