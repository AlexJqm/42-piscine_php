#!/usr/bin/php
<?php
    $arr = [];
    $arr = explode(" ", trim(preg_replace('!\s+!', ' ', $argv[1])));
    $n = count($arr);
    for ($i = 1; $i < $n; $i++)
        echo $arr[$i] . " ";
    echo $arr[0] . "\n";
?>