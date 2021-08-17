<?php 
if(isset($_POST['submit'])){
    $to = "lotran31@hotmail.fr"; 
    $from = $_POST['email']; 
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $subject = "Form submission";
    $message = $_POST['message'];
   

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Email envoyé";
    
}
?>
