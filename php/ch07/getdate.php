<?php
    $seoul = getdate();


    print "현재시간 :" .
        $seoul["year"] . "년" .
        $seoul["mon"] . "월" .
        $seoul["mday"] . "일" .
        $seoul["hours"] . "시" .
        $seoul["minutes"] . "분" .
        $seoul["seconds"] . "초" ;

    print "<br>----------------<br>";

    $year =gmdate("Y");
    $mon =gmdate("m");
    $day =gmdate("d");
    $hours =gmdate("H");
    $min =gmdate("i");
    $sec =gmdate("s"); // gmt 세계 표준 시간

    print "현재시간 ${year}년${mon}월${day}일 ${hours}:${min}:${sec} <br>";

    print rand(1,10);

?>