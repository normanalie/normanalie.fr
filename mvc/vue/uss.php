<!DOCTYPE HTML>
<html>
	<head>
		<title>Un Simple Serveur</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="http://www.normanalie.fr/serveur/" class="logo"><strong>Un Simple Serveur</strong> &nbsp; <?php echo($_SESSION["form"]["serveur"]["message"]); ?></a>
					<nav id="nav">
						<a href="http://www.normanalie.fr/unsimpleserveur.php">Accueil</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Un Simple Serveur</h2>
						<p>Serveur minecraft moddé sans plugins !</p>
					</header>

					<p>Un Simple Serveur est un serveur moddé sans plugins. Il n'y à que 5 mods !</p>

					<br><br>
					<h3>Comment y accéder ?</h3>
					<p>Un Simple Serveur est sous whitelist, c'est à dire que vous ne pouvez pas vous connecter sans autorisation préalable de l'administrateur.
					<br>Pour être whitelist, vous devez: 
					<ul>
						<li>Vous faire inviter par un joueur, ce dernier nous auras contacté à l'avance</li>
						<li>Remplir le formulaire en bas de la page, nous répondrons sous 48h</li>
					</ul>
					</p>

					<br><br>
					<h3>Ce serveur est-il premium ?</h3>
					<p>Oui, pour des raisons de sécurités évidentes, nous n'acceptons que les comptes minecraft officiels.</p>
					
					<br><br>
					<h3>Ai-je besoin d'un launcher ?</h3>
					<p>Oui, vous vous pouvez le télécharger en clicquant <a href="Un Simple Launcher.jar" target="_blank">ici</a></p>
					
					<br><br>
					<h3>Je suis joueur et je souhaite inviter quelqu'un, comment faire ?</h3>
					<p>Pour inviter quelqu'un, vous devez nous contacter via le formulaire en bas de page. Vous devez avoir un minimum d'ancienneté sur le serveur et n'avoir eu aucune sanction. Nous vous répondrons sous 48h.</p>

				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
			<div class="inner">

					<h3>Formulaire</h3>

					<form action="#" method="post">

						<div>
							<input type="radio" name="motif" id="whitelist" value="whitelist" checked><label for="whitelist">Se faire Whitelist</label>
							<input type="radio" name="motif" id="invite" value="invite"><label for="invite">Inviter quelqu'un</label>
						</div>
						<br>
						<div class="field half first">
							<label for="name">Nom</label> 
							<input name="name" id="name" type="text" placeholder="Nom" required>
						</div>
						<div class="field half">
							<label for="pseudo">Pseudo</label>
							<input name="pseudo" id="pseudo" type="text" placeholder="Pseudo MC" required>
						</div>
						<div class="field half first">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Pour vous recontacter" required>
						</div>
						<div class="field half">
							<label for="invite">Invité</label>
							<input name="invite" id="invite" type="text" placeholder="La personne qui vous invite ou celle que vous voulez inviter" required>
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Un message ?(facultatif)"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Envoyer" class="button alt" type="submit" name="sub"></li>
						</ul>
					</form>

					<div class="copyright">
						&copy; Un Simple Serveur. Design: <a href="https://normanalie.fr" target="_blank">Norman Alié</a>. Template: <a href="https://templated.co" target="_blank">Templated</a>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>