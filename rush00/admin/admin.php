<?php
	$auth_usr = "admin";
	$auth_pwd = "8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918"; //password admin
	if (!isset($_SERVER['PHP_AUTH_USER'])) {
		header('WWW-Authenticate: Basic realm="Admin"');
		header('HTTP/1.0 401 Unauthorized');
		exit();
	} else {
		if ($_SERVER['PHP_AUTH_USER'] == $auth_usr && hash("sha256", $_SERVER['PHP_AUTH_PW']) == $auth_pwd) {
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Admin Panel</title>
	</head>
	<body>
		<div>
			<a href="admin_logout.php"><b>Déconnexion</b></a>
		</div>
	</body>
</html>

<?php
		} else {
			header('WWW-Authenticate: Basic realm="Admin"');
			header('HTTP/1.0 401 Unauthorized');
		}
	}
?>
