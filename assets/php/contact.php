<?php

$errorMSG = "";

// NAME
if (empty($_POST["nombre"])) {
    $errorMSG = "Es necesario el nombre";
} else {
    $nombre = $_POST["nombre"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Es necesario el email";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["mensaje"])) {
    $errorMSG .= "Es necesario el mensaje";
} else {
    $mensaje = $_POST["mensaje"];
}


$EmailTo = "SisTecGolfo@gmail.com";
$Subject = "MENSAJE DEL SITIO WEB DE SISTECGOLFO";

// prepare email body text
$Body = "";
$Body .= "NOMBRE: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "MENSAJE: ";
$Body .= $mensaje;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>