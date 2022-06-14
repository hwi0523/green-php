<?php
// 상수만 = public 가능 나머지 private
// public 완전 허용 / private     / protected 클래스안쪽에서만 가능
    class Student {
        private $studentId;
        private $studentName;

        public function printStudent($id,$name){
            print "ID: {$id}<br>";
            print "NAME: {$name}<br>";
        }
    }

    $obj = new Student;
    $obj -> studentId = 111;
    $obj ->printStudent(0523,"Alice");