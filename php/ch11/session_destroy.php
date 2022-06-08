<?php
    session_start();
    session_destroy();
    //session_unset();
    if(isset($_SESSION['var1'])){
        echo $_SESSION['var1'], "<br>";
    }
  
    
?>
<a href="confim.php">확인</a>