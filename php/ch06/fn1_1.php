<?php

// 비 void
function sum($n1,$n2){
    return $n1 + $n2;
}
// void 
function void_sum($n1,$n2){
    print "sum : " . $n1 + $n2;
}

$n1 =10;
$n2 =20;

 // void_sum($n1,$n2);

$result =sum($n1 ,$n2); // = 함수호출은 99.9% 비 void 함수

print $n1+$n2+$n1 . "<br>";
print $result*100; 