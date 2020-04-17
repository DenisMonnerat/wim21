<?php
$OS = "Linux";
// À compléter
// pour gérer le formulaire 
// et le cookie
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="http://www.iut-fbleau.fr/css/tacit.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body container>
		<div grid="center">
			<div column="8">
					<p>
						<?php echo $OS;?>
					</p>
				<p>Rafraîchir la page <a href=""><i class="fa fa-refresh" aria-hidden="true"></i></a></p>
			</div>
			<div column="4">
				<form method="POST">
					<fieldset>
						<legend>Changez votre OS</legend>
						<label>
							<input type="radio" name="OS" value="Linux"> 
							<i class="fa fa-linux fa-2x" aria-hidden="true"></i>
						</label>
						<label>
							<input type="radio" name="OS" value="Windows"> 
							<i class="fa fa-windows fa-2x" aria-hidden="true"></i>
						</label>
						<label>
							<input type="radio" name="OS" value="Macos"> 
							<i class="fa fa-apple fa-2x" aria-hidden="true"></i>
						</label>
						<button type="submit">Envoyer</button>
					</fieldset>
				</form>
			</div>
		</div>
	</body>
</html>
