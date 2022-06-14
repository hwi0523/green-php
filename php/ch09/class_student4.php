<?php
    class Student {
        private $studentId;
        private $studentName;

        // getters 읽는거 (파라미터 x 리턴 o)
        public function getStudentId(){
            return $this -> studentId;
        }
        public function getStudentName(){
            return $this -> studentName;
        }


        //setters 쓰는거 (파라미터 o 리턴 x)
        public function setStudentId($studentId){
            $this -> studentId = $studentId;
        }
        public function setStudentName($studentName){
            $this -> studentName = $studentName;
        }


        public function printStudent(){
            print "ID: {$this -> studentId}<br>";
            print "NAME: {$this -> studentName}<br>";
        }
    }

    $obj = new Student;
    $obj -> setStudentId(1122);
    $obj -> setStudentName("Alice");
    $obj -> printStudent();
