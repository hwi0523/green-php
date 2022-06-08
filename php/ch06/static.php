<?php

    function inc()
    {
        static $i =1; 
    // static 정적변수 호출할때만 값이 할당됨 최초 한번만 실행
        print $i . "<br>";
        $i +=1;
    }
    for($i=0;$i<10;$i++)
    {
        inc();
    }
    
    $z =100;
    function inc2()
    {
        global $z; // glocal 을 사용하여야 땡겨서 쓸수있다.
        print $z . "<br>";
        $z +=1;
    }

    for($i=0;$i<10;$i++)
    {
        inc2();
    }

    
?>