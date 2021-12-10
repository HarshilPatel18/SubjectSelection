<?php

    include './DBConnection.php';
    
    $year=$_REQUEST['year'];
    $appid=$_REQUEST['appid'];
    $pwd=$_REQUEST['pwd'];
    //$prn=$_REQUEST['prn'];
    $fname=$_REQUEST['fname'];
    $mname=$_REQUEST['mname'];
    $lname=$_REQUEST['lname'];
    $email=$_REQUEST['email'];
    $mob=$_REQUEST['mob'];
    
    
    
    
   
    
    //YearCheckFYBCA
    if($year=="fybca")
    {
        $y=date('Y');
        $exists = mysqli_query($conn,"select 1 from fybca".$y);
        
        
        if($exists!== FALSE)
        {
            
           $sql = 'INSERT INTO fybca'.date("Y").'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
            if ($conn->query($sql) === TRUE) 
            {
                header("location:RegisterSucceed.php?id=".$appid);
            }
            else
            {
                header("location:RegisterError.php?id=".$appid);
            }
            
        }
        else
        {
            $y=date('Y')-1;
            $sql = 'INSERT INTO fybca'.$y.'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
            if ($conn->query($sql) === TRUE) 
            {
                header("location:RegisterSucceed.php?id=".$appid);
            }
            else
            {
                 header("location:RegisterError.php?id=".$appid);
            }
           
        }
   
    }
    
    
    
    //YearCheckSYBCA
    if($year=="sybca")
    {
        $y=date('Y');
        $exists = mysqli_query($conn,"select 1 from sybca".$y);
        
        
        if($exists!== FALSE)
        {
            
           $sql = 'INSERT INTO sybca'.date("Y").'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
            if ($conn->query($sql) === TRUE) 
            {
                $y=$y-1;
                $sql = 'INSERT INTO fybca'.$y.'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
                $conn->query($sql);
                header("location:RegisterSucceed.php?id=".$appid);
            }
            else
            {
                header("location:RegisterError.php?id=".$appid);
            }
            
        }
        else
        {
            $y=date('Y')-1;
            $sql = 'INSERT INTO sybca'.$y.'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
            if ($conn->query($sql) === TRUE) 
            {
                header("location:RegisterSucceed.php?id=".$appid);
            }
            else
            {
                 header("location:RegisterError.php?id=".$appid);
            }
           
        }
   
    }
    
    
    //YearCheckTYBCA
    if($year=="tybca")
    {
        $y=date('Y');
        $exists = mysqli_query($conn,"select 1 from tybca".$y);
        
        
        if($exists!== FALSE)
        {
            
           $sql = 'INSERT INTO tybca'.date("Y").'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
            if ($conn->query($sql) === TRUE) 
            {
                $y=$y-1;
                $sql = 'INSERT INTO sybca'.$y.'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
                $conn->query($sql);
                $y=$y-1;
                $sql = 'INSERT INTO fybca'.$y.'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
                $conn->query($sql);
                header("location:RegisterSucceed.php?id=".$appid);
            }
            else
            {
                header("location:RegisterError.php?id=".$appid);
            }
            
        }
        else
        {
            $y=date('Y')-1;
            $sql = 'INSERT INTO tybca'.$y.'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
            if ($conn->query($sql) === TRUE) 
            {
                header("location:RegisterSucceed.php?id=".$appid);
            }
            else
            {
                 header("location:RegisterError.php?id=".$appid);
            }
           
        }
   
    }
    
    
    
    
    
    //YearCheckFYMSC
    if($year=="fymsc")
    {
        $y=date('Y');
        $exists = mysqli_query($conn,"select 1 from fymsc".$y);
        
        
        if($exists!== FALSE)
        {
            
           $sql = 'INSERT INTO fymsc'.date("Y").'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
            if ($conn->query($sql) === TRUE) 
            {
                header("location:RegisterSucceed.php?id=".$appid);
            }
            else
            {
                header("location:RegisterError.php?id=".$appid);
            }
            
        }
        else
        {
            $y=date('Y')-1;
            $sql = 'INSERT INTO fymsc'.$y.'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
            if ($conn->query($sql) === TRUE) 
            {
                header("location:RegisterSucceed.php?id=".$appid);
            }
            else
            {
                 header("location:RegisterError.php?id=".$appid);
            }
           
        }
   
    }
    
    
    
    
    //YearCheckSYMSC
    if($year=="symsc")
    {
        $y=date('Y');
        $exists = mysqli_query($conn,"select 1 from symsc".$y);
        
        
        if($exists!== FALSE)
        {
            
           $sql = 'INSERT INTO symsc'.date("Y").'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
            if ($conn->query($sql) === TRUE) 
            {
                $y=$y-1;
                $sql = 'INSERT INTO fymsc'.$y.'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
                $conn->query($sql);
                header("location:RegisterSucceed.php?id=".$appid);
            }
            else
            {
                header("location:RegisterError.php?id=".$appid);
            }
            
        }
        else
        {
            $y=date('Y')-1;
            $sql = 'INSERT INTO symsc'.$y.'(`app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`) VALUES ("'.$appid.'","'.$pwd.'","'.$fname.'","'.$mname.'","'.$lname.'","'.$email.'","'.$mob.'")';
            if ($conn->query($sql) === TRUE) 
            {
                header("location:RegisterSucceed.php?id=".$appid);
            }
            else
            {
                 header("location:RegisterError.php?id=".$appid);
            }
           
        }
   
    }
    

    $conn->close();
   
?>

