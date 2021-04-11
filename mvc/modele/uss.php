<?php
if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["pseudo"]) && !empty($_POST["motif"]) && !empty($_POST["sub"])){
	$to      = 'mail@normanalie.fr';
    $subject = 'Message de : ' . htmlspecialchars($_POST["name"]);
    $message = "Nom: ".htmlspecialchars($_POST["name"]).
		"\r\n Pseudo:".htmlspecialchars($_POST["pseudo"]).
		"\r\n Motif: ".htmlspecialchars($_POST["motif"]).
		"\r\n Mail: ".htmlspecialchars($_POST["email"]).
		"\r\n Invité: ".htmlspecialchars($_POST["invite"]).
		"\r\n Message: ".htmlspecialchars($_POST["message"]);
    $headers = 'From: CastleCity <unsimpleserveur@normanalie.fr>' . "\r\n" .
    'Reply-To: ' . htmlspecialchars($_POST["email"]) . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
	
	$_SESSION["form"]["serveur"]["message"] = "Votre message a bien été envoyé !";
}
else if(!empty($_POST["sub"])){
	$_SESSION["form"]["serveur"]["message"] = "Merci de compléter tout le formulaire";
}
else{
	$_SESSION["form"]["serveur"]["message"] = "";
}
?>