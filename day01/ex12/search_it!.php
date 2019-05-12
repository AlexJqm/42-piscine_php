#!/usr/bin/php
<?php
	if ($argc > 2) {
		$key = $argv[1];
		unset($argv[0], $argv[1]);
		foreach ($argv as $value) {
			$value = explode(":", $value);
			if ($key == $value[0])
				exit($value[1]."\n");
		}
	}
?>
