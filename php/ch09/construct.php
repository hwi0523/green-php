<?php
        // getters (빼는거)
        // private멤버필드 값 넣는 방법
        // 생성자를 통해서 setters 메소드를통해서 (넣는거)
    class Fruit{
        private $name;
        private $color;
        private $price;
        
        // 생성자
        function __construct($name=null,$price=null,$color=null){
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

    $apple = new Fruit(null,null,"Red");
    $banana = new Fruit("banana",500);

    $apple -> print_fruit();
    $banana -> print_fruit();