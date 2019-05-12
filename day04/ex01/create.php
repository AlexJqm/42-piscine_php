<?php
	if ($_POST['login'] != "" && $_POST['passwd'] != "" && $_POST['submit'] == "OK") {
		if (file_exists("../htdocs") == false) {
			mkdir ("../htdocs");
		mkdir ("../htdocs/private");
	}
	if (file_exists('../htdocs/private/passwd') == false)
		file_put_contents('../htdocs/private/passwd', NULL);
	$data = unserialize(file_get_contents("../htdocs/private/passwd"));
	foreach ($data as $key => $value)
	if ($value["login"] == $_POST["login"])
		exit ("ERROR\n");
	}
	else
		exit ("ERROR\n");
	$user["login"] = $_POST["login"];
	$user["passwd"] = hash('sha256', $_POST["passwd"]);
	$data[] = $user;
	file_put_contents("../htdocs/private/passwd", serialize($data));
	exit ("OK\n");
?>
