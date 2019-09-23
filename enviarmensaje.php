<?php
// $nombre=$_POST['Nom'];
// $correo=$_POST['Co'];
// $mensaje=$_POST['Ms'];
$nombre=$_POST['name'];
$correo=$_POST['email'];
$mensaje=$_POST['message'];
echo "Hola ".$nombre." con correo ".$correo." tu mensaje es: ".$mensaje;

// # Include the Autoloader (see "Libraries" for install instructions)
// require 'vendor/autoload.php';
// use Mailgun\Mailgun;
// # Instantiate the client.
// $mgClient = new Mailgun('15d9014cf6105329170531ecb60d67d9-baa55c84-f51cd5ca');
// $domain = "sandbox4ec4c77889c0425fafd2b43ff87dff61.mailgun.org";
// # Make the call to the client.
// $result = $mgClient->sendMessage($domain, array(
// 	'from'	=> 'Excited User <app146026748@heroku.com>',
// 	'to'	=> 'Baz <rsabando93@gmail.com>',
// 	'subject' => 'Hello',
// 	'text'	=> 'Testing some Mailgun awesomness!'
// ));

// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
require 'vendor/autoload.php';
$sendgrid = new SendGrid("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");
$email    = new SendGrid\Email();

$email->addTo("test@sendgrid.com")
      ->setFrom("rsabando93@gmail.com")
      ->setSubject("Sending with SendGrid is Fun")
      ->setHtml("and easy to do anywhere, even with PHP");

$sendgrid->send($email);


// if(mail('rsabando93@gmail.com',$correo,$mensaje )){
//   echo "Hola ".$nombre." con correo ".$correo." tu mensaje es: ". $mensaje;
// }else{
//   echo "error"
// }

 ?>
