<?php

$nombre=$_POST['Nom'];
$correo=$_POST['Co'];
$mensaje=$_POST['Ms'];


if(mail('rsabando93@gmail.com',$correo,$mensaje )){
  echo "Hola ".$nombre." con correo ".$correo." tu mensaje es: ". $mensaje;
}else{
  echo "error"
}

 ?>
