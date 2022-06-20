<?php

class Calc{
    function sum($n1,$n2){
        return $n1 + $n2;
    }
}

// $c = new Calc();
// print $c -> sum(5,10);


$c = new Calc();
$result = $c -> sum(5,10);
print "$result<br>";


// calc를 객체화 변수명은 c 
// sum 메소드를 호출 5,10을더한값을 리턴받고 화면에 출력



// static 메모리에 먼저 올라갔다.
class StaticCalc{
    static function sum($n1,$n2){
        return $n1 + $n2;
    }
}

$result2 = StaticCalc::sum(10,11);
print "$result2<br>"; 