<?php
    // 메소드가 아닌애들 (멤버 필드 (변수,상수))

    class Fruit{
        private $name;
        private $color;
        private $price;

        function __construct(){} // 생성자 자동으로 public 붙음

        public function print_fruit(){
            print "name : {$this->name}<br>";
            print "color : {$this->color}<br>";
            print "price : {$this->price}<br>";
        }


        public function setName($name){
            $this->name = $name;
            return $this;
        }
        public function setColor($color){
            $this->color = $color;
            return $this;
        } 
        public function setPrice($price){
            $this->price = $price;
            return $this;
        }
    }

    $apple1 = (new Fruit) -> setName("사과"); 
    $apple1 -> print_fruit();

    $apple2 = (new Fruit)
                -> setColor("파랑")
                -> setPrice(1000);

    $apple2 -> print_fruit();

    $banana1 = new Fruit;
    $banana1 -> setColor("노랑");
    $banana1 -> setPrice(900);
    $banana1 -> print_fruit();

    