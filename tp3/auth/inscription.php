<?php
$email = $_POST['email'] ?? "";
$login = $_POST['login'] ?? "";
$password = $_POST['password'] ?? "";

if (isset($_POST['OK'])){


	if (
		filter_var($email,FILTER_VALIDATE_EMAIL) 
		&& !empty($login) 
		&& !empty($password)
	){
		$conn = mysqli_connect("localhost","user","user","cinema");
		// il faudrait vérifier l'existence  du login 
		// dans la table ! 
		$stmt = mysqli_prepare($conn, "INSERT INTO user (login , email,password) VALUES ( ? , ? , ? );"); 
		if (!$stmt) die("Erreur");
		$hash = password_hash($password,PASSWORD_DEFAULT);
		if (!mysqli_stmt_bind_param($stmt, 'sss',$login,$email,$hash)) die ("Erreur");
		if (!mysqli_stmt_execute($stmt)) $message="<section class='alert-box -warning'>Erreur BD</section>";
		else $message= "<section class='alert-box -success'>Compte créé</section>";
	}else{
		$message="<section class='alert-box -warning'>Entrées invalides</section>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Films</title>
		<link rel="stylesheet" href="http://www.iut-fbleau.fr/css/tacit.css">

		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body container>
				<h2>Inscription</h2>
<?php
if (isset($message)) echo "$message";
?>
			<form  method="POST" action="">
<fieldset>
			<label for="">Login<br><input name="login" type="text" value="<?php echo $login;?>"></label>
			<label for="">Email<br><input name="email" type="email" value="<?php echo $email;?>"></label>
			<label for="">Password<br><input type="password" name="password" value="<?php echo $password;?>"></label>
<button type="submit"name="OK">Envoyer</button>
</fieldset>
</form>
	</body>
</html>
