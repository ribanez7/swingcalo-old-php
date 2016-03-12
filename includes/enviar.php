<?php
if(isset($_POST['email'])) {

$email_to = "swingcalo@gmail.com";
$email_subject = "Mail desde el Formulario Web";

if(!isset($_POST['name']) || !isset($_POST['mail']) || preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',
$_POST['mail']) || !isset($_POST['message']))
{
    echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
    echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
    die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "E-mail: " . $_POST['mail'] . "\n";
$email_message .= "Teléfono: " . $_POST['tel'] . "\n";
$email_message .= "Mensaje: " . $_POST['message'] . "\n";
$email_message .= "Valora la web con un: " . $_POST['puntua'] . "\n";
$email_message .= "Nos visita desde:" . $_POST['radios'] . "\n\n";


$headers = 'From: '.$_POST['mail']."\r\n".
'Reply-To: '.$_POST['mail']."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}

?>
