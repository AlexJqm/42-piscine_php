#!/usr/bin/php
<?php
 	function ft_create_table($table, $number){
		foreach ($table as $cur) {
			$res[$cur[0]] = $cur[$number];
			$res[$cur[1]] = $cur[$number];
			$res[$cur[2]] = $cur[$number];
			$res[$cur[3]] = $cur[$number];
			$res[$cur[4]] = $cur[$number];
		}
		return ($res);
	}
	if ($argc !== 3 || !is_readable($argv[1]))
		exit (0);
	$file= fopen($argv[1], "r");
	while (($data = fgetcsv($file, 200, ";")) !== FALSE)
		$tab[] = $data;
	unset($tab[0]);
	$nom = ft_create_table($tab,0);
	$prenom = ft_create_table($tab,1);
	$mail = ft_create_table($tab,2);
	$IP = ft_create_table($tab,3);
	$pseudo = ft_create_table($tab,4);
	while (1) {
		echo "Enter your command: ";
		$str = fgets(STDIN);
		if (feof(STDIN))
			exit (1);
		eval($str);
	}
?>
