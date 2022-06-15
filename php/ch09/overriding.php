<?php

class Animl{
    function crying(){
    print "동물이 운다. <br>";
    }
}

class Dog extends Animl{
    function crying(){
        print "강아지가 멍멍. <br>";
    }
    function asd(){
        parent::crying();
    }
}

class Chiwawa extends Dog{
    function crying(){
        parent::asd();
        print "치와와가 와왕. <br>";
    }
}

class Cat extends Animl{
    function crying(){
        print "고양이가 야옹~<br>";
    }
}

class Human{
    function cryin(){
        print " 사람이말하다.";
    }
}

function doCry($ani){
    if(method_exists($ani, "crying")){
        $ani->crying();    
    }else{
        print "crying 메소드 없음!";
    }
}

doCry(new Chiwawa);
// doCry(new Cat);
// doCry(new Dog);
// doCry(new Animl);
// doCry(new Human);