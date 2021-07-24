<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
 
$EmailTo = "lotran31@hotmail.fr";
$Subject = "Nouveau message reçu";
 

$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 

$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>
