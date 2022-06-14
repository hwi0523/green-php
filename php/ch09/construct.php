<?php
        // getters (빼는거)
        // 생성자를 통해서 setters 메소드를통해서 (넣는거)
    class Fruit{
        private $name;
        private $color;
        private $price;
        
        // 생성자
        function __construct($name,$price,$color){
            $this -> name = $name;
            $this -> color = $color;
            $this -> price = $price;
        }

        public function print_fruit(){
            print "name : {$this->name}<br>";
            print "color : {$this->color}<br>";
            print "price : {$this->price}<br>";
        }
    }

    $apple = new Fruit("Apple",1000,"red");
    $banana = new Fruit("Banana",500,"yellow");

    $apple -> print_fruit();
    $banana -> print_fruit();