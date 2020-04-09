<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="http://www.iut-fbleau.fr/css/tacit.css">
		<link rel="stylesheet" href="./css/style.css">

		<title></title>
	</head>
	<body container>
		<h4>Pierre, Feuille, Ciseaux</h4>
		<div>
			<p>Choississez votre coup </p>
			<a href="?coup=0"><img width="50px" src="./images/pierre.png"></a>
			<a href="?coup=1"><img width="50px" src="./images/feuille.png"></a>
			<a href="?coup=2"><img width="50px" src="./images/ciseaux.png"></a>
		</div>
		<?php
			if (isset($_GET['coup'])):
				$coup_joueur = $_GET['coup'];
			/* A completer */
		?>
				<div grid>
					<div column>
						<h5>Votre Coup</h5>
						<div>
							<img src="./images/">
						</div>
					</div>
					<div column>
						<h5>Celui de l'ordinateur</h5>
						<div>
							<img src="./images/">
						</div>
					</div>
				</div>
				<h2></h2>
		<?php 
		endif;
		?>
			</div>	
		</body>
	</html>
