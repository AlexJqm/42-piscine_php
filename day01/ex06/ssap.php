#!/usr/bin/php
<?php
	$arr = [];
	for ($i = 1; $i < $argc; $i++)
		$arr = array_merge($arr, explode(" ", trim(preg_replace('!\s+!', ' ', $argv[$i]))));
	sort($arr);
	foreach ($arr as $value)
		echo $value . "\n";
?>
