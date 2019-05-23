<?php
	if ($_POST['login'] != "" && $_POST['passwd'] != "") {
		if (file_exists("../../private") == false)
			mkdir ("../../private", 0777);
		if (file_exists('../../private/passwd') == false)
			file_put_contents('../../private/passwd', NULL);
		else {
			$data = unserialize(file_get_contents("../../private/passwd"));
			if ($data)
				foreach ($data as $key => $value)
					if ($value["login"] == $_POST["login"]) {
						header('Location: admin.php?user=add_error');
						exit ();
					}
		}
	}
	else {
		header('Location: admin.php?user=add_error');
		exit ();
	}
	$user["login"] = $_POST["login"];
	$user["passwd"] = hash('sha256', $_POST["passwd"]);
	$data[] = $user;
	file_put_contents("../../private/passwd", serialize($data));
	header('Location: admin.php?user=add_success');
	exit ();
?>
