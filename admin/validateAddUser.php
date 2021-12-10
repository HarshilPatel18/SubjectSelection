<?php
    if(isset($_POST["add"]))
    {
        include './DBConnection.php';
        session_start();
        if($_POST["userType"]=="admin")
        {
            $sql="INSERT INTO `admin`(`admin_id`, `Admin Name`, `password`) VALUES ('".$_POST['userid']."','".$_POST['fname']."','".$_POST['pwd']."')";
            if ($conn->query($sql) === TRUE)
            {
                header("location:addUser.php?data=added");
            }
            else{
                header("location:addUser.php?data=err");
            }
        }
        else
        {
            $sql="INSERT INTO `faculty`(`faculty_id`, `Faculty Name`, `password`, `admin_id`) VALUES ('".$_POST['userid']."','".$_POST['fname']."','".$_POST['pwd']."','".$_SESSION['username']."')";
            if ($conn->query($sql) === TRUE)
            {
                header("location:addUser.php?data=added");
            }
            else{
                header("location:addUser.php?data=error");
            }
        }
        $conn->close();
    }
?>