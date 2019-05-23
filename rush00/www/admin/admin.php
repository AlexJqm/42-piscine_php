<?php
	session_start();
	include("../database/db.php");
	$auth_usr = "admin";
	$auth_pwd = "8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918"; //password admin
	if (!isset($_SERVER['PHP_AUTH_USER'])) {
		header('WWW-Authenticate: Basic realm="admin"');
		header('HTTP/1.0 401 Unauthorized');
		exit();
	} else {
		if ($_SERVER['PHP_AUTH_USER'] == $auth_usr && hash("sha256", $_SERVER['PHP_AUTH_PW']) == $auth_pwd) {
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

		<title>Admin Panel</title>
		<style>
			table {
				max-width: 960px;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="admin.php">Admin Dashboard</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="admin.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="admin.php?product">Gestion des produits</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="admin.php?categorie">Gestion des categories</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="admin.php?user">Gestion des utilisateurs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="admin_logout.php">Se deconnecter</a>
					</li>
				</ul>
			</div>
		</nav>
		<?php
			if (isset($_GET['edit_product']))
				include("edit_product.php");
			if (isset($_GET['product']))
				include("product.php");
			if (isset($_GET['categorie']))
				include("categorie.php");
			if (isset($_GET['remove_user']))
				include("remove_user.php");
			if (isset($_GET['user']))
				include("user.php");

			if ($_GET['categorie'] == "cat_error")
				echo '<div class="alert alert-danger" role="alert">
						Erreur.
					  </div>';
			if ($_GET['categorie'] == "cat_success")
				echo '<div class="alert alert-success" role="alert">
						Succes.
					</div>';
			if ($_GET['user'] == "add_success")
				echo '<div class="alert alert-success" role="alert">
						Utilisateur créé.
					</div>';
			if ($_GET['user'] == "add_error")
				echo '<div class="alert alert-danger" role="alert">
						Erreur.
					</div>';
			if ($_GET['user'] == "del_success")
				echo '<div class="alert alert-success" role="alert">
						Utilisateur supprimé.
					</div>';
			if ($_GET['product'] == "add_success")
				echo '<div class="alert alert-success" role="alert">
						Produit créé.
					</div>';
			if ($_GET['product'] == "del_success")
				echo '<div class="alert alert-success" role="alert">
						Produit supprimé.
					</div>';
		?>
	</body>
</html>

<?php
		} else {
			header('WWW-Authenticate: Basic realm="admin"');
			header('HTTP/1.0 401 Unauthorized');
		}
	}
?>
