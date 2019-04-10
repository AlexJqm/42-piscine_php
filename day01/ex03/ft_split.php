#!/usr/bin/php
<?php
    function ft_split($str) {
        $split = explode(" ", trim(preg_replace('!\s+!', ' ', $str)));
        return $split;
    }
?>