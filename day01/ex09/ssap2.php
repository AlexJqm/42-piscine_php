#!/usr/bin/php
<?php
    function ascii_sort($a, $b) {
 	    $a = strtolower($a);
 	    $b = strtolower($b);
 	    $i = 0;
 	    $ascii = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
 	    while (($i < strlen($a)) || ($i < strlen($b))) {
     		$pos_a = strpos($ascii, $a[$i]);
 	    	$pos_b = strpos($ascii, $b[$i]);
 	        if ($pos_a < $pos_b)
 		        return (-1);
        	else if ($pos_a > $pos_b)
 	    		return (1);
    	    else
 	    	    $i++;
 	    }
    }
    if ($argc > 1) {
        for ($i = 1; $i < $argc; $i++)
            $string .= " ".$argv[$i]." ";
        
            $string = trim($string);

        while ((strpos($string, "  ")) == true)
 	        $string = str_replace("  ", " ", $string);
        
        $tab = explode(" ", $string);
        usort($tab, "ascii_sort");
        
        foreach ($tab as $value)
 		    echo $value."\n";
    }
?>