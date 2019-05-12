<?php
	session_start();
	if ($_GET && $_GET['login'] && $_GET['passwd'] && $_GET['submit'] == "OK") {
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
		$msg = 'Vous êtes connectés.';
		echo '<script type="text/javascript">window.alert("'.$msg.'");</script>';
	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Index</title>
	</head>
	<body>
		<form action="index.php" method="GET">
			<div class="container">
				<label for="login"><b>Identifiant: </b></label>
				<input type="text" placeholder="Entrer Identifiant" name="login" value="<?php echo $_SESSION['login']; ?>" required>
				<label for="passwd"><b>Mot de Passe: </b></label>
				<input type="password" placeholder="Entrer Mot de Passe" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" required>
				<input type="submit" name="submit" value="OK">
			</div>
		</form>
	</body>
</html>

<?php
	session_start();
	if (isset($_GET['login'])) {
		$_SESSION['login'] = $_GET['login'];
		if (isset($_GET['passwd']))
			$_SESSION['passwd'] = $_GET['passwd'];
	}
	if (isset($_SESSION['login']))
		$login = $_SESSION['login'];
	else
		$login = '';
	if (isset($_SESSION['passwd']))
		$password = $_SESSION['passwd'];
	else
		$password = '';
?>
<html>
	<body>
		<form action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
			Identifiant: <input type="text" name="login" value="<?=$_SESSION['login']?>"/><br/>
			<br>
			Mot de passe: <input type="password" name="passwd" id="pwd" value="<?=$_SESSION['passwd'] ?>"/>
			<input type="submit" value="OK">
		</form>
	</body>
</html>
