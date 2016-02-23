<?php
    
    
    session_start();
    session_destroy();
    
    //echo " You've been logged out. <a href= 'index2.php' >Click here</a> to return";
    header("Location: RegisterLogin.php");
?>
