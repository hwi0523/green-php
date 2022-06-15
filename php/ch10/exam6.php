<?php
    // exam6.txt 파일 읽어서 전부 대문자로 변경한 후 
    // exam.6_capital.txt 에 저장해 주세요.

    $origin = file("./exam6.txt");
    $target = fopen("./exam6_capital.txt","w");

    if(!$origin){
        die("파일을 열수 없습니다.");
    }
    print "파일을 열었습니다. <br>";

    foreach($origin as $line){
        $capital = strtoupper($line);
        fputs($target,$capital);
    }

    fclose($target);

    // while($line = fgets($filep,1024)){
    //     print ($line) . "<br>";
    // }

    // $aaa = file_get_contents("./exam6.txt");

    // $line2 = strtoupper($aaa);
    // $sss = fopen("./exam6_capital.txt","a");

    // print "$sss";
    // fputs($sss,$line2);

    // fclose($sss);