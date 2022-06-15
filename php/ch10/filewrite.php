<?php
    $filep = fopen("C:\Apache24\htdocs/lorem.txt","a");

    if(!$filep){
        die("파일을 열수 없습니다.");
    }
    print "파일을 열었습니다. <br>";

    // 이스케이프 문자 \n = <br> 모든 언어 공통 
    fputs($filep,"Romeo :I take thee at thy word \n bitch\"\"");

    fclose($filep);