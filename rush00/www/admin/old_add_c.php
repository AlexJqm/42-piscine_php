<?php
	session_start();
	if (!isset($_SERVER['PHP_AUTH_USER'])) {
		header('WWW-Authenticate: Basic realm="Admin"');
		header('HTTP/1.0 401 Unauthorized');
		exit();
	} else {
		if ($_SERVER['PHP_AUTH_USER'] == "admin" && hash("sha256", $_SERVER['PHP_AUTH_PW']) == "8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918") {
			include("includes/db.php");
?>
<form action="add_cat.php" method="post" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td><h2>Ajouter une categorie</h2></td>
		</tr>
		<tr>
			<td><b>Nom de la categorie:</b></td>
			<td><input type="text" name="cat_title" size="60" required/></td>
		</tr>
		<tr>
			<td><input type="submit" name="insert_post" value="Envoyer"/></td>
		</tr>
	</table>
</form>
<?php
			if (isset($_POST['insert_post'])){
				global $con;
				$get_cats = "select * from categories";
				$run_cats = mysqli_query($con, $get_cats);
				$cat_title = $_POST['cat_title'];
				while ($row_cats = mysqli_fetch_array($run_cats)) {
					if ($row_cats['cat_title'] == $cat_title) {
						echo "<script>window.open('admin.php?request=cat_error','_self')</script>";
						exit ();
					}
				}
				$insert_product = "insert into categories (cat_title) values ('$cat_title');";
				$insert_pro = mysqli_query($con, $insert_product);
				if ($insert_pro)
					echo "<script>window.open('admin.php?list_product=add_success','_self')</script>";
			}
		}
	}
?>
