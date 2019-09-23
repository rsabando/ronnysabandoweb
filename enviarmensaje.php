<?php
$nombre=$_POST['Nom'];
$correo=$_POST['Co'];
$mensaje=$_POST['Ms'];
echo "Hola ".$nombre." con correo ".$correo." tu mensaje es: ". $mensaje;
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-3ax6xnjp29jd6fds4gc373sgvjxteol0');
$domain = "samples.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
  array('from'    => 'Excited User <excited@samples.mailgun.org>',
        'to'      => 'Mailgun Devs <rsabando93@gmail.com>',
        'subject' => 'Hello',
        'text'    => 'Testing some Mailgun awesomeness!'));


// if(mail('rsabando93@gmail.com',$correo,$mensaje )){
//   echo "Hola ".$nombre." con correo ".$correo." tu mensaje es: ". $mensaje;
// }else{
//   echo "error"
// }

 ?>
