<?php
    $date = file("./name.txt");

    print_r ($date);

    print "<br>--------<br>";
    foreach($date as $name){
        print $name. "<br>";
    }