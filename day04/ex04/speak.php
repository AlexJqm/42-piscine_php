<?php
	date_default_timezone_set("Europe/Paris");
	session_start();
	if ($_SESSION['loggued_on_user'] && $_SESSION['loggued_on_user'] != "") {
		if ($_POST['msg']) {
			if (file_exists('../private/chat') == false)
				file_put_contents('../private/chat', NULL);
		$data = unserialize(file_get_contents('../private/chat'));
		$fd = fopen('../private/chat', 'w');
		flock($fd, LOCK_EX);
		$data[] = array("login" => $_SESSION['loggued_on_user'], "time" => time(), "msg" => $_POST['msg']);
		file_put_contents('../private/chat', serialize($data));
	}
?>
<html>
	<head>
		<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
	</head>
	<body>
		<form action="speak.php" method="POST">
			<input type="text" placeholder="Entrer votre message" name="msg">
			<input type="submit" name="submit" value="Envoyer">
		</form>
	</body>
</html>
<?php
	}
	else
		echo "ERROR\n";
?>
