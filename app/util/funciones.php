<?php
//funcion para validar si la pregunta generada aleatoriamente puede aplicarse por tipo de afiliado
//o por si la fecha de expedicion del documento no existe
function validarNumeroPregunta($numero){
  //verifica si es conyuge y si la pregunta seleccionada es 3,4,8,10 las cuales son solo para trabajadores
  if($_SESSION['tipoAfiliado'] == "CÓNYUGE" && ($numero == 3 || $numero == 4 || $numero == 8 || $numero == 10)){
    return false;
  }
  //si la fecha de expedicion es null o vacia no permite hacer la primera pregunta
  if(empty($_SESSION['fechaExpedicionDocumento']) && $numero == 1){
    return false;
  }
  return true;
}
function getRealIP()
{
  if (isset($_SERVER["HTTP_CLIENT_IP"]))
  {
    return $_SERVER["HTTP_CLIENT_IP"];
    }elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
        return $_SERVER["HTTP_X_FORWARDED_FOR"];
    }elseif (isset($_SERVER["HTTP_X_FORWARDED"])){
        return $_SERVER["HTTP_X_FORWARDED"];
    }elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])){
        return $_SERVER["HTTP_FORWARDED_FOR"];
    }elseif (isset($_SERVER["HTTP_FORWARDED"])){
        return $_SERVER["HTTP_FORWARDED"];
    }else{
        return $_SERVER["REMOTE_ADDR"];
    }
}


function EntradaSegura($dato) {
  $dato = trim($dato);
  $dato = stripslashes($dato);
  $dato = htmlspecialchars($dato,ENT_QUOTES,"ISO-8859-1");
  $dato = strip_tags($dato);
  $dato = htmlentities($dato);
  return $dato;
}
//devuelve el nuero de celular con X en las 6 primeras posiciones si el celular
//menos de 10 caracteres o no empieza por 3 devuelve error
function ocultarCaracteresCelular($celular){
  $array=str_split($celular);
  $tam=count($array);
  if($tam<10||$array[0]!=3)
  {
    $celular="error";
  }
  else{
    $celular="******".$array[$tam-4].$array[$tam-3].$array[$tam-2].$array[$tam-1];
  }
  return $celular;
}

function ocultarCaracteresCorreo($correo){
  $array=explode("@",$correo);
  $tam=count($array);
  if($tam!=2){
    $correo="error";
  }
  else{
    $dominio=$array[1];
    $array2=str_split($array[0]);
    $tam2=count($array2);
    $correo="";
    for($i=0;$i<$tam2 && $i<4;$i++){
      $correo=$correo.$array2[$i];
    }
    $correo=$correo."******@".$dominio;
  }

  return $correo;
}

function FechaYa(){
  $ahora=date("Y-m-d");
  return $ahora;
}

function FechaHoraYa(){
  $ahora=date("Y-m-d H:i:s");
  return $ahora;
}

function FechaDiferenciaDias($fecha){
  $date1 = new DateTime(date_format($fecha,'Y-m-d'));
  $date2 = new DateTime("now");
  $diff = $date1->diff($date2);
  return $diff->days;
}

function FechaHoraYaInformix(){
  $ahora=date("Y-d-m H:i:s");
  return $ahora;
}

/**
 *
 * Valida un email usando filter_var y comprobar las DNS.
 *  Devuelve true si es correcto o false en caso contrario
 *
 * @param    string  $str la dirección a validar
 * @return   boolean
 *
 */
function is_valid_email($str)
{
 return $result = (false !== filter_var($str, FILTER_VALIDATE_EMAIL));

}

function encriptaInformix($mclave){ //Función homóloga a la encriptación utilizada en informix para guardar claves de usuario.
  $mclaenc = '';
  $tamañoClave = strlen($mclave);
  for ($i=1; $i<=$tamañoClave; $i++){
	  $b=$i%2;
      $x = $b==0 ? 11 : 1;    // Si el ciclo es par asigna 11 si no 1
      $mkeyval = ord(substr($mclave,$i-1,1));    //  Obtengo el ASCII del caracter
      $mclaenc = $mclaenc.chr($mkeyval+$x);   // Al ASCII le sumo $x
  }
  return $mclaenc; //  RETURN mclaenc
}


/******************************************/
/******* Funciones de encriptación ********/
/******************************************/
function encripta($password) {
  return password_hash($password, PASSWORD_DEFAULT, ['cost' => 15]);
}

function desencripta($password, $hash) {
  return password_verify($password, $hash);
}

function encrypt ($input,$Key="C0mf4n0rt32020") {
    $output = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($Key), $input, MCRYPT_MODE_CBC, md5(md5($Key))));
    return $output;
  }

function decrypt ($input,$Key="C0mf4n0rt32020") {
    $output = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($Key), base64_decode($input), MCRYPT_MODE_CBC, md5(md5($Key))), "\0");
    return $output;
  }
/***************************************************/

?>
