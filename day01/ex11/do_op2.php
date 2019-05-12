#!/usr/bin/php
<?php
	if ($argc == 2) {
		$arr = [];
		$arr[3] = str_replace(" ", "", $argv[1]);
		$arr[0] = intval($arr[3]);
		$arr[2] = substr(substr($arr[3], strlen((string)$arr[0])), 1);
		$arr[1] = substr(substr($arr[3], strlen((string)$arr[0])), 0, 1);
		if (is_numeric($arr[0]) && is_numeric($arr[2])) {
			while (true) {
				if ($arr[2] == "0" && ($arr[1] == "/" || $arr[1] == "%"))
					exit("Stop : division or modulo by zero\n");
				if ($arr[1] == "*")
					echo $arr[0] * $arr[2];
				if ($arr[1] == "+")
					echo $arr[0] + $arr[2];
				if ($arr[1] == "/")
					echo $arr[0] / $arr[2];
				if ($arr[1] == "-")
					echo $arr[0] - $arr[2];
				if ($arr[1] == "%")
					echo $arr[0] % $arr[2];
				break ;
			}
		} else
			exit("Syntax Error\n");
	} else
		exit("Incorrect Parameters\n");
	echo "\n";
?>
