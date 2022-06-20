<?php

class Computer{
    private static $cnt=0;
    private $modelName;
    private $price;

    function __construct($modelName = null, $price = null){
        self::$cnt++;
        $this-> modelName = $modelName;
        $this-> price = $price;
    }

    function printInto(){
        print "모델명: {$this-> modelName}, 가격: {$this-> price}<br>";
    }

    static function totalproductCnt(){
        print "총 생산된 컴퓨터 수 :" . self::$cnt . "<br>";
    }
}

$c1 = new Computer("abc-123",40000);
$c2 = new Computer("xkk-222",50000);
$c3 = new Computer("y2k-ggg",60000);
$c4 = new Computer("32k-mas",70000);

$c1 ->printInto();
$c2 ->printInto();
$c3 ->printInto();

// $c1 -> totalproductCnt();
// $c2 -> totalproductCnt();
// $c3 -> totalproductCnt();

Computer::totalproductCnt();