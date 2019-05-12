#!/usr/bin/php
<?php
	if ($argc == 4) {
		if (is_numeric($argv[1]) && is_numeric($argv[3])) {
			while (true) {
				if (trim($argv[3], "\t") == "0" && ($argv[2] == "/" || $argv[2] == "%"))
					exit("Stop : division or modulo by zero\n");
				if ($argv[2] == "*")
					echo trim($argv[1], "\t") * trim($argv[3], "\t");
				if ($argv[2] == "+")
					echo trim($argv[1], "\t") + trim($argv[3], "\t");
				if ($argv[2] == "/")
					echo trim($argv[1], "\t") / trim($argv[3], "\t");
				if ($argv[2] == "-")
					echo trim($argv[1], "\t") - trim($argv[3], "\t");
				if ($argv[2] == "%")
					echo trim($argv[1], "\t") % trim($argv[3], "\t");
				break ;
			}
		} else
			exit("Syntax Error\n");
	} else
		exit("Incorrect Parameters\n");
	echo "\n";
?>
