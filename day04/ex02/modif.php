<?php
	if ($_POST['login'] != "" && $_POST['oldpw'] != "" && $_POST['newpw'] != "" && $_POST['submit'] == "OK") {
		$data = unserialize(file_get_contents("../htdocs/private/passwd"));
		foreach ($data as $key => $value)
			if ($value['login'] == $_POST['login'] && $value['passwd'] == hash("sha256", $_POST['oldpw'])) {
				$data[$key]['passwd'] = hash('sha256', $_POST['newpw']);
				file_put_contents("../htdocs/private/passwd", serialize($data));
				exit ("OK\n");
			}
	}
	exit ("ERROR\n");
?>
