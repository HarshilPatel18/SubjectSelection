<?php
    session_start();
    $appid=$_SESSION['username'];
    $prn=$_POST['prn'];
    $pwd=$_POST['pwd'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    
    $_SESSION['fname']=$fname;
    include './DBConnection.php';
    $str=$_SESSION["type"];
    $str.=date('Y');
    $sql="UPDATE `".$str."` SET `prn`='".$prn."',`password`='".$pwd."',`first_name`='".$fname."',`middle_name`='".$mname."',`last_name`='".$lname."',`email`='".$email."',`phone`='".$phone."' WHERE `app_id`='".$appid."'";
    if ($conn->query($sql) === TRUE)
    {
        //echo "<p class=\"w3-white w3-text-green w3-border w3-border-green w3-round-xlarge\">Password & Confirm Password doesn't match !</p>";
        header("location:editProfile.php?data=updated");
    }
    else{
        header("location:editProfile.php?data=error");
    }

?>

