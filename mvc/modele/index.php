<?php
if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"]) && !empty($_POST["sub"])){
	$to      = 'mail@normanalie.fr';
    $subject = 'Message de : ' . htmlspecialchars($_POST["name"]);
    $message = htmlspecialchars($_POST["message"]);
    $headers = 'From: Formuaire de contact <contact@normanalie.fr>' . "\r\n" .
    'Reply-To: ' . htmlspecialchars($_POST["email"]) . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
	
	$_SESSION["form"]["contact"]["message"] = "Votre message a bien été envoyé !";
}
else if(!empty($_POST["sub"])){
	$_SESSION["form"]["contact"]["error"] = "Merci de completer tout le formulaire";
}
else{
	$_SESSION["form"]["contact"]["error"] = "";
	$_SESSION["form"]["contact"]["message"] = "";
	
}