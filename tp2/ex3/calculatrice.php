<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title></title>
		<link rel="stylesheet" href="http://www.iut-fbleau.fr/css/tacit.css">
		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body container>
		<h3>Calculatrice</h3>
		<form  method="POST">
			<!-- opérande 1 -->

			<input placeholder="un nombre" type="text" name="op1" />

			<!-- opération -->

			<select name="operation">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="x">x</option>
				<option value="/">/</option>
			</select>

			<!-- opérande 2 -->

			<input placeholder="un nombre" type="text" name="op2" />

			<!-- bouton -->

			<button type="submit" name="soumis"> Calculer</button>

		</div>
	</body>
</html>
