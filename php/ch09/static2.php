<?php
// 저장 공간은 한곳이다
// self = Computer  
class Computer{
    public static $brand;
    public $price;

    function myPrint(){
        print "컴퓨터 브랜드는 " . self::$brand. " 가격은 {$this->price}입니다.<br>";
    }
// static 이 붙은 함수는 static 인 것만 쓸수있다
// 객체 마다 다른 값을 붙이고 싶으면 static 을 쓰면 안된다.
    static function mystaticPrint(){
        print "컴퓨터 브랜드는 " . self::$brand. " 가격은 입니다.<br>";
    }
}

Computer::$brand = "LG";

$c = new Computer;
$c -> price = 10000;

$c2 = new Computer;
$c2 -> price = 20000;

$c -> myPrint();
$c2 -> myPrint();

