<?php
$nombre=$_POST['Nom'];
$correo=$_POST['Co'];
$mensaje=$_POST['Ms'];
echo "Hola ".$nombre." con correo ".$correo." tu mensaje es: ". $mensaje;
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# First, instantiate the SDK with your API credentials
$mg = Mailgun::create('15d9014cf6105329170531ecb60d67d9-baa55c84-f51cd5ca
');

# Now, compose and send your message.
# $mg->messages()->send($domain, $params);
$mg->messages()->send('sandbox4ec4c77889c0425fafd2b43ff87dff61.mailgun.org', [
  'from'    => '<mailgun@sandbox4ec4c77889c0425fafd2b43ff87dff61.mailgun.org>',
  'to'      => '<rsabando93@gmail.com>',
  'subject' => 'Hello',
  'text'    => 'Testing some Mailgun awesomness!'
]);


// if(mail('rsabando93@gmail.com',$correo,$mensaje )){
//   echo "Hola ".$nombre." con correo ".$correo." tu mensaje es: ". $mensaje;
// }else{
//   echo "error"
// }

 ?>
