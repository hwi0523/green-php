<?php
    $arr = array();
    // array() = []

    $val =0;
    for($i=0;$i<99;$i++){
        $arr[$i] = $val;
        $val +=99;
    }

    for($i=0;$i<count($arr);$i++){
        print "arr[$i]: $arr[$i]<br>";
    }


?>