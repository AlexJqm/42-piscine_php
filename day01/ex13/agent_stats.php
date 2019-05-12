#!/usr/bin/php
<?php
	fgets(STDIN);
	while ($data = fgets(STDIN)) {
		$arr = explode(";", $data);
		$file[$i++] = array("User" => $arr[0], "Note" => $arr[1], "Noteur" => $arr[2], "Feedback" => $arr[3]);
	} if ($file == null)
		exit();
	sort($file);

	if ($argv[1] == "moyenne") {
		foreach ($file as $key => $value)
			if ($value[Noteur] != "moulinette" && $value[Note] != null) {
				$sum += $value[Note];
				$count++;
			}
		exit ($sum / $count . "\n");
	}

	if ($argv[1] == "moyenne_user") {
		foreach ($file as $key => $value) {
			if ($tab[$value[User]] == null) {
				$tab[$value[User]] = [];
				$tab[$value[User]][Notes] = [];
			} if ($value[Note] != null && $value[Noteur] != "moulinette")
				array_push($tab[$value[User]][Notes], $value[Note]);
		}
		foreach ($tab as $user => $average) {
			$sum = 0;
			foreach ($average[Notes] as $key => $value)
				$sum += $value;
			echo $user . ":" . $sum / ($key + 1) ."\n";
		}
		exit ();
	}
	if ($argv[1] == "ecart_moulinette") {
		foreach ($file as $key => $value) {
			if ($tab[$value[User]] == null) {
				$tab[$value[User]] = [];
				$tab[$value[User]][Notes] = [];
				$tab[$value[User]][Moulinette] = [];
			} if ($value[Note] != null && $value[Noteur] != "moulinette")
				array_push($tab[$value[User]][Notes], $value[Note]);
			else if ($value[Note] != null && $value[Noteur] == "moulinette")
				array_push($tab[$value[User]][Moulinette], $value[Note]);
		}
		foreach ($tab as $user => $average) {
			$sum_user = 0;
			$sum_moulinette = 0;
			foreach ($average[Notes] as $key_user => $value)
				$sum_user += $value;
			foreach ($average[Moulinette] as $key_moulinette => $value)
				$sum_moulinette += $value;
			echo $user . ":" . (($sum_user / ($key_user + 1)) - ($sum_moulinette / ($key_moulinette + 1))) ."\n";
		}
		exit ();
	}
?>
