#!/usr/bin/php
<?php
    function ft_is_sort($arr) {
        $cpy = $arr;
        sort($cpy);
        foreach ($arr as $k => $v)
            if ($v != $cpy[$k])
                return false;
        return true;
    }
?>