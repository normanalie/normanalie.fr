<!DOCTYPE HTML>
<html>
	<head>
		<title>Norman Alié</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109219390-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-109219390-1');
		</script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><strong>Norman Alié</strong></a>
					<nav id="nav">
						<a href="/">Accueil</a>
						<a href="nextcloud/">Cloud</a>
						<a href="https://node-email-1.pulsepanel.eu/" target="_blank">Mail</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Norman Alié</h1>
						<h2 style="color: white">Ce site est en cours de developpement</h2>
					</header>

					<div class="flex ">
                        
                        <div style="text-align: center">
							<span class="icon fa-rocket"></span>
							<h3>Electronique</h3>
							<p>Electronique et bricolage</p>
						</div>
                        
                        <div>
							<span class="icon fa-plane"></span>
							<h3>Drone</h3>
							<p>Drone et aviation</p>
						</div>

						<div>
							<span class="icon fa-terminal"></span>
							<h3>Programmation</h3>
							<p>Programmation et code</p>
						</div>

					</div>

					<footer style="text-align: center">
						<a href="#contact" class="button">Me contacter</a>
					</footer>
				</div>
			</section>
        <section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>SandBox</h2>
						<p>Ce site est une SandBox</p>
					</header>
					<p>J'utilise ce serveur comme SandBox: pour tester et développer des sites/web-apps. Vous trouverez peu de contenu interessant ici mais il peut arriver que de temps en temps je partage des extraits de code ou de la documentation.</p>
					<p>Pour les curieux, ce site est heberge chez pulseheberg sur un vps :)</p>
                    <p>Si vous souhaitez en savoir plus n'hésitez pas à me contacter ou à me suivre sur instagram : <a href="https://instagram.com/zeprof2c/" target="_blank">@ZeProf2C</a></p>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner" id="contact">

					<h3>Me contacter</h3>
					<p style="color: red"><?php echo $_SESSION["form"]["contact"]["error"]; ?></p>
					<p style="color: white"><?php echo $_SESSION["form"]["contact"]["message"]; ?></p>
					
					<form action="#contact" method="post">

						<div class="field half first">
							<label for="name">Nom</label>
							<input name="name" id="name" type="text" placeholder="Nom" required>
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email" required>
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message" required></textarea>
						</div>
						<ul class="actions">
							<li><input value="Envoyer" class="button alt" type="submit" name="sub"></li>
						</ul>
					</form>

					<div class="copyright">
						&copy; Norman Alié (<a href="http://normanalie.fr">normanalie.fr</a>). Template: <a href="https://templated.co">Templated</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
			<link rel="stylesheet" href="assets/css/main.css" />

	</body>
</html>