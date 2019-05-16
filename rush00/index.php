<?php
	session_start();
	require 'database/config.php';
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Index</title>
	</head>
	<body>
		<div>
			<?php if ($_SESSION['loggued_on_user'] == null) {?>
			<a href="register.php"><b>S'inscrire</b></a>
			<a href="signin.php"><b>Se connecter</b></a>
			<a href="admin/admin.php"><b>Admin Panel</b></a>
			<?php
			} else {?>
			<a href="account.php"><b>Mes preferences</b></a>
			<a href="logout.php"><b>Déconnexion</b></a>
			<?php
			}
			?>
		</div>
	</body>
</html>
