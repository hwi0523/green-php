<?php
    $date = file("./major.txt");

    print_r ($date);

    print "<br>--------<br>";
    foreach($date as $line){
        $div = explode(" ",$line);
        // print $line ."<br>";
        // print $div[0] . ", ". $div[1] ."<br>";
         print "Name: {$div[0]}, Major: {$div[1]} <br>";
    }