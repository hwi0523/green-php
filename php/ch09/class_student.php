<?php
// php class 명 대문자로 시작

// public 접근 제시어 . 접근 지시어 (접근 제어 지시자)
// Access Modifier (접근할수있는 범위 지정)
// java: private /defalut /protected /public
// php: private / protected / public
// 배열은 메소드를 못가진다 // 객체는 메소드를 가질수 있다.
class Student {
    public $cnt = 3;
    public $studentId;
    public $studentName;

    public function printStudent($id, $name) {
        print "ID : {$id}<br>";
        print "Name : {$name}<br>";

        if($this->cnt == 0) {
            return;
        }
        $this->cnt--;
        $this->printStudent("111", "222");
    }
}

function printStudent($id, $name) {
    print "dddd : {$id}, {$name}";
}

$obj = new Student;
$obj->studentId = 20171234;
$obj->studentName = "Alice";
$obj->printStudent($obj->studentId, $obj->studentName);

printStudent("kkkk", "gggg");