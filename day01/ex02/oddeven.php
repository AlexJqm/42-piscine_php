#!/usr/bin/php
<?php
	while (true) {
		echo "Entrez un nombre : ";
		if (($value = fgets(STDIN)) == null)
			exit("\n");
		$value = trim($value);
		if (is_numeric($value)) {
			if (substr($value, -1) % 2 == 0)
				echo "Le chiffre " . $value . " est Pair\n";
			else
				echo "Le chiffre " . $value . " est Impair\n";
		} else
			echo "'" . $value . "' n'est pas un chiffre\n";
	}
?>
