<?php
    session_start();
    //session_regenerate_id(true); // 세션의 ID 값 변경
    echo "session ID :", session_id();