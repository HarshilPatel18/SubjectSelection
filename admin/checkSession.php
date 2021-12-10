<?php
    //admin
    session_start();
    if(!$_SESSION['session']==TRUE)
    {
        header("location:../index.php");
    }
?>
