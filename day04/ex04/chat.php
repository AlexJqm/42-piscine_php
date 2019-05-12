<?php
	date_default_timezone_set("Europe/Paris");
	session_start();
	if ($_SESSION['loggued_on_user'] && $_SESSION['loggued_on_user'] != "" &&
		file_exists('../private/chat')) {
			$data = unserialize(file_get_contents('../private/chat'));
			if ($data)
				foreach ($data as $key)
					echo "[".date('H:i', $key['time'])."] <b>".$key['login']."</b>: ".$key['msg']."<br />\n";
		}
?>
<html>
	<head>
		<meta HTTP-EQUIV="Refresh" content="1; url=/chat.php">
	</head>
	<body>
	</body>
</html>
