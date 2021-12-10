<?php
    session_start();
    $id=$_SESSION['username'];
    
    $pwd=$_POST['pwd'];
    $name=$_POST['name'];
    
    
    $_SESSION['fname']=$name;
    include './DBConnection.php';
    $str=$_SESSION["type"];
    if($str=="faculty")
    {
       $sql="UPDATE `".$str."` SET `Faculty Name`='".$name."',`password`='".$pwd."' WHERE `faculty_id`='".$id."'";
    }
    else
    {
        $sql="UPDATE `".$str."` SET `Admin Name`='".$name."',`password`='".$pwd."' WHERE `admin_id`='".$id."'";
    }
    
    
    if ($conn->query($sql) === TRUE)
    {
        //echo "<p class=\"w3-white w3-text-green w3-border w3-border-green w3-round-xlarge\">Password & Confirm Password doesn't match !</p>";
        header("location:editProfile.php?data=updated");
    }
    else{
        header("location:editProfile.php?data=error");
    }

?>

