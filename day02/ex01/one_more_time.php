#!/usr/bin/php
<?php
	if ($argc != 2)
		exit (1);
	if (preg_match("/^([A-Za-z][a-z]+) (\d\d?) ([A-Za-z][a-z]+) (\d\d\d\d) (\d\d):(\d\d):(\d\d)$/", $argv[1], $time) === 0) {
		echo "Wrong Format\n";
		exit (1);
	}
	$jour = strtolower($time[1]);
	if ($jour == "lundi" || $jour == "mardi" || $jour == "mercredi" || $jour == "jeudi" || $jour == "vendredi" ||
		$jour == "samedi" || $jour == "dimanche");
	else {
		echo "Wrong Format\n";
		exit (1);
	}
	$mois = strtolower($time[3]);
	if ($mois == "janvier")
		$mm = 1;
	else if ($mois == "fevrier")
		$mm = 2;
	else if ($mois == "mars")
		$mm = 3;
	else if ($mois == "avril")
		$mm = 4;
	else if ($mois == "mai")
		$mm = 5;
	else if ($mois == "juin")
		$mm = 6;
	else if ($mois == "juillet")
		$mm = 7;
	else if ($mois == "aout")
		$mm = 8;
	else if ($mois == "septembre")
		$mm = 9;
	else if ($mois == "octobre")
		$mm = 10;
	else if ($mois == "novembre")
		$mm = 11;
	else if ($mois == "decembre")
		$mm = 12;
	else {
		echo "Wrong Format\n";
		exit (1);
	}
	date_default_timezone_set("Europe/Paris");
	$res = mktime($time[5], $time[6], $time[7], $mm, $time[2], $time[4]);
	if (!$res)
		echo "Wrong Format\n";
	else
		echo $res."\n";
?>
