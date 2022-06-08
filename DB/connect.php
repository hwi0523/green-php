<?php
/*
    create database board1;
    use board1;
    create table t_board ( 
        i_board int unsigned primary key auto_increment, 
        title varchar(200) not null, 
        ctnt varchar(3000) not null, 
        create_at datetime default now()
    );
*/

    error_log("test", 3, "./err.log");

    define("URL", "localhost"); // 127.0.0.1 === localhost
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board1");
    
    $conn = mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME); // 맞는지 확인
    $sql = "INSERT INTO t_board(title, ctnt) 
    VALUES('test', 'content');"; // 값 만듬
    mysqli_query($conn, $sql); // 값 전달
    mysqli_close($conn); // 연결 종료

    // 1. (INSERT, UPDATE, DELETE) => 0,1
    // 2. SELECT - 최대 1개 가져오는것! 0,1 (배열)91%구분 방법 where 절에 PK 가 들어가냐
    // 3. SELECT - 여러개!!! 0,1,2 => 배열(배열)    
?>