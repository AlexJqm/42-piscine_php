<?php
	session_start();
	include ('auth.php');
	if ($_POST['login'] && $_POST['passwd'] && auth($_POST['login'], $_POST['passwd'])) {
		$_SESSION['loggued_on_user'] = $_POST['login'];
?>
<html>
	<head>
	</head>
		<body>
			<iframe class="chat" name="chat" src="chat.php" width="100%" height="550px"></iframe>
			<iframe class="speak" name="speak" src="speak.php" width="100%" height="50px"></iframe>
	</body>
</html>
<?php
	}
	else {
		$_SESSION['loggued_on_user'] = "";
		header('Location: /index.html');
		exit ("ERROR\n");
	}
?>
