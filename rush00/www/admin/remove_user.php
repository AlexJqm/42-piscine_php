<?php
	$users_file = file_get_contents("../../private/passwd");
	$users = unserialize($users_file);
	$action = "del_user";
	$login = $_GET['remove_user'];
		switch ($action) {
			case "del_user":
				if (!$login) {
					break;
				}
				foreach ($users as $key => $user) {
					if ($user['login'] == $login) {
						unset($users[$key]);
						break;
					}
				}
				break;
		}
	$out = serialize($users);
	file_put_contents("../../private/passwd", $out);
	$_GET["user"] = "del_success";
?>
