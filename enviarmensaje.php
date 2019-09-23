<?php
$nombre=$_POST['Nom'];
$correo=$_POST['Co'];
$mensaje=$_POST['Ms'];
echo "Hola ".$nombre." con correo ".$correo." tu mensaje es: ". $mensaje;

# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = new Mailgun('15d9014cf6105329170531ecb60d67d9-baa55c84-f51cd5ca');
$domain = "sandbox4ec4c77889c0425fafd2b43ff87dff61.mailgun.org";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
	'from'	=> 'Excited User <mailgun@sandbox4ec4c77889c0425fafd2b43ff87dff61.mailgun.org>',
	'to'	=> 'Baz <rsabando93@gmail.com>',
	'subject' => 'Hello',
	'text'	=> 'Testing some Mailgun awesomness!'
));


// if(mail('rsabando93@gmail.com',$correo,$mensaje )){
//   echo "Hola ".$nombre." con correo ".$correo." tu mensaje es: ". $mensaje;
// }else{
//   echo "error"
// }

 ?>
