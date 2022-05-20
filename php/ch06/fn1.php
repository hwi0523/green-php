<?php
    $n1 =9;
    $n2 = 5;
// 함수넣을때 꼭 필요 0함수명 파라미터 
    function print_sum($num1,$num2)
    {
        $result = $num1 + $num2;
        print "$num1 + $num2 = $result<br>";
    }
    function print_minus($num1,$num2)
    {
        $result = $num1 - $num2;
        print "$num1 - $num2 = $result<br>";
    }
    function print_multi($num1,$num2)
    {
        $result = $num1 * $num2;
        print "$num1 * $num2 = $result<br>";
    }
    function print_div($num1,$num2)
    {
        $result = $num1 / $num2;
        print "$num1 / $num2 = $result<br>";
    }
    function print_mod($num1,$num2)
    {
        $result = $num1 % $num2;
        print "$num1 % $num2 = $result<br>";
    }

    
    print_sum($n1,$n2);
    print_minus($n1,$n2);
    print_multi($n1,$n2);
    print_div($n1,$n2);
    print_mod($n1,$n2);

//   값이 retun 되면 비 보이드 함수
//   void = retun 되는 값 없는 함수 
?>