<title>Logout</title>
<link rel="icon" href="images/hat.svg" type="image/icon" />
<link rel="stylesheet" href="css/w3.css">
<?php

    session_start();
    if($_SESSION['session']==TRUE)
    {
        session_unset();
        session_destroy();
        $msg = 'You have logged out!';
        header("location:./index.php?msg=".$msg);
        
    }
 else {
        header("location:./index.php");
}
    

?>

