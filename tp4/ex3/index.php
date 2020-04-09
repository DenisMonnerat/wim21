<?php
include './include/labyrinthe.php';
session_start();
// À compléter
// mettre à jour les variables
// de session en fonction des actions
// du joeur
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="http://www.iut-fbleau.fr/css/tacit.css">

		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<body container>
		<h2>Labyrinthe </h2>
		<p>Dirigez <i class='fa fa-user-o'></i> vers <i class='fa fa-sign-out'></i>
		(déplacements : <?php echo $_SESSION['mv'];?>)
		</p>
		<div grid>
			<div column="+3 6">
				<?php
				//echo "message=$message";
				afficher_labyrinthe($_SESSION['m']);
				?>
			</div>
		</div>
		<div grid>
			<div column="+3 6">
				<form>
					<button value='O' name='DIR'><i class="fa fa-arrow-left"></i></button>
					<button value='E' name='DIR'><i class="fa fa-arrow-right"></i></button>
					<button value='S' name='DIR'><i class="fa fa-arrow-down"></i></button>
					<button value='N' name='DIR'><i class="fa fa-arrow-up"></i></button>
					<button value='RESET' name='RESET'><i class="fa fa-refresh"></i></button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

