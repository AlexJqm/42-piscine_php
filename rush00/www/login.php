<?php
	session_start();
	include ('auth.php');
	if ($_POST['login'] && $_POST['passwd'] && auth($_POST['login'], $_POST['passwd'])) {
		$_SESSION['loggued_on_user'] = $_POST['login'];
		header('Location: /index.php?products');
	}
	else {
		$_SESSION['loggued_on_user'] = "";
		header('Location: /signin.php?request=error');
		exit ("ERROR\n");
	}
?>
