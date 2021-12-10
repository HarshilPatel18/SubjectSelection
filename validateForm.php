<?php
            
      
        if($_POST['sem']=="1")
        {
            if(!empty($_POST['selectedCourse'])){
                // Loop to store and display values of individual checked checkbox.
                
                include './DBConnection.php';
                session_start();
                $appid=$_SESSION['username'];
                $type=$_SESSION["type"];
                $y;
                if($type==="fybca")
                {
                    $y=date('Y');
                }
                else if($type==="sybca")
                {
                    $y=date('Y')-1;
                }
                else if($type==="tybca")
                {
                    $y=date('Y')-2;
                }
                $sql="";
                $falg=false;
                foreach($_POST['selectedCourse'] as $selected)
                {
                    $sql.="INSERT INTO `form_fybca".$y."`(`app_id`, `course_code`, `courseSem`) VALUES('".$appid."','".$selected."',".$_POST['sem'].");";
                    echo $selected." -> ". $appid." -> ". $_POST['sem']."</br>";
                }
                
                if ($conn->multi_query($sql) === TRUE) 
                {
                    echo "New records created successfully</br>";
                    $flag=TRUE;
                } 
                else
                {
                    echo "Here";
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
                
                $sql="";
                
                if($flag)
                {
                    include './DBConnection.php';
                    $sql="UPDATE `fybca".$y."` SET `formsubmit`=1 WHERE `app_id`='".$appid."'";
                    
                    if ($conn->query($sql) === TRUE)
                        {
                            
                            if($type=="fybca")
                            {
                                header("location:FYBCAHome.php");
                            }
                            else if($type=="sybca")
                            {
                                $sql="UPDATE `sybca".date('Y')."` SET `formsubmit`=1 WHERE `app_id`='".$appid."'";
                                $conn->query($sql);
                                header("location:SYBCAHome.php");
                            }
                            else if($type=="tybca")
                            {
                                $sql="UPDATE `tybca".date('Y')."` SET `formsubmit`=1 WHERE `app_id`='".$appid."'";
                                $conn->query($sql);
                                header("location:TYBCAHome.php");
                            }
                        }
                        else {
                            echo "Error updating record: " . $conn->error;
                        }
                    $conn->close();    
                }
                
            }
        }
        
        
        
        
        
        if($_POST['sem']=="2")
        {
            if(!empty($_POST['selectedCourse'])){
                // Loop to store and display values of individual checked checkbox.
                
                include './DBConnection.php';
                session_start();
                $appid=$_SESSION['username'];
                $type=$_SESSION["type"];
                $y;
                if($type==="fybca")
                {
                    $y=date('Y');
                }
                else if($type==="sybca")
                {
                    $y=date('Y')-1;
                }
                else if($type==="tybca")
                {
                    $y=date('Y')-2;
                }
                
                $sql="";
                $falg=false;
                foreach($_POST['selectedCourse'] as $selected)
                {
                    $sql.="INSERT INTO `form_fybca".$y."`(`app_id`, `course_code`, `courseSem`) VALUES('".$appid."','".$selected."',".$_POST['sem'].");";
                    echo $selected." -> ". $appid." -> ". $_POST['sem']."</br>";
                }
                
                if ($conn->multi_query($sql) === TRUE) 
                {
                    echo "New records created successfully</br>";
                    $flag=TRUE;
                } 
                else
                {
                    echo "Here";
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
                
                $sql="";
                
                if($flag)
                {
                    include './DBConnection.php';
                    $sql="UPDATE `fybca".$y."` SET `formsubmit`=2 WHERE `app_id`='".$appid."'";
                    
                    if ($conn->query($sql) === TRUE)
                        {
                            
                            if($type=="fybca")
                            {
                                header("location:FYBCAHome.php");
                            }
                            else if($type=="sybca")
                            {
                                $sql="UPDATE `sybca".date('Y') ."` SET `formsubmit`=2 WHERE `app_id`='".$appid."'";
                                $conn->query($sql);
                                header("location:SYBCAHome.php");
                            }
                            else if($type=="tybca")
                            {
                                $sql="UPDATE `tybca".date('Y') ."` SET `formsubmit`=2 WHERE `app_id`='".$appid."'";
                                $conn->query($sql);
                                header("location:TYBCAHome.php");
                            }
                        }
                        else {
                            echo "Error updating record: " . $conn->error;
                        }
                    $conn->close();
                }
                
            }
        }
        
        
        if($_POST['sem']=="3")
        {
            if(!empty($_POST['selectedCourse'])){
                // Loop to store and display values of individual checked checkbox.
                
                include './DBConnection.php';
                session_start();
                $appid=$_SESSION['username'];
                $type=$_SESSION["type"];
                $y;
                if($type==="fybca")
                {
                    $y="null";
                }
                else if($type==="sybca")
                {
                    $y=date('Y');
                }
                else if($type==="tybca")
                {
                    $y=date('Y')-1;
                }
                $sql="";
                $falg=false;
                foreach($_POST['selectedCourse'] as $selected)
                {
                    $sql.="INSERT INTO `form_sybca".$y."`(`app_id`, `course_code`, `courseSem`) VALUES('".$appid."','".$selected."',".$_POST['sem'].");";
                    echo $selected." -> ". $appid." -> ". $_POST['sem']."</br>";
                }
                
                if ($conn->multi_query($sql) === TRUE) 
                {
                    echo "New records created successfully</br>";
                    $flag=TRUE;
                } 
                else
                {
                    echo "Here";
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
                
                $sql="";
                
                if($flag)
                {
                    $y=date('Y')-1;
                    include './DBConnection.php';
                    //$sql="UPDATE `fybca".$y."` SET `formsubmit`=3 WHERE `app_id`='".$appid."'";
                    $sql="UPDATE `sybca".date('Y')."` SET `formsubmit`=3 WHERE `app_id`='".$appid."'";
                    if ($conn->query($sql) === TRUE)
                        {
                            if($type=="fybca")
                            {
                                header("location:FYBCAHome.php");
                            }
                            else if($type=="sybca")
                            {
                                header("location:SYBCAHome.php");
                            }
                            else if($type=="tybca")
                            {
                                $sql="UPDATE `tybca".date('Y') ."` SET `formsubmit`=3 WHERE `app_id`='".$appid."'";
                                $conn->query($sql);
                                header("location:TYBCAHome.php");
                            }
                        }
                        else {
                            echo "Error updating record: " . $conn->error;
                        }
                    $conn->close();    
                }
                
            }
        }
        
        
        
        
        
        if($_POST['sem']=="4")
        {
            if(!empty($_POST['selectedCourse'])){
                // Loop to store and display values of individual checked checkbox.
                
                include './DBConnection.php';
                session_start();
                $appid=$_SESSION['username'];
                $type=$_SESSION["type"];
                $y;
                if($type==="fybca")
                {
                    $y="null";
                }
                else if($type==="sybca")
                {
                    $y=date('Y');
                }
                else if($type==="tybca")
                {
                    $y=date('Y')-1;
                }
                
                $sql="";
                $falg=false;
                foreach($_POST['selectedCourse'] as $selected)
                {
                    $sql.="INSERT INTO `form_sybca".$y."`(`app_id`, `course_code`, `courseSem`) VALUES('".$appid."','".$selected."',".$_POST['sem'].");";
                    echo $selected." -> ". $appid." -> ". $_POST['sem']."</br>";
                }
                
                if ($conn->multi_query($sql) === TRUE) 
                {
                    echo "New records created successfully</br>";
                    $flag=TRUE;
                } 
                else
                {
                    echo "Here";
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
                
                $sql="";
                
                if($flag)
                {
                    $y=date('Y')-1;
                    include './DBConnection.php';
                    //$sql="UPDATE `fybca".$y."` SET `formsubmit`=4 WHERE `app_id`='".$appid."'";
                    $sql="UPDATE `sybca".date('Y')."` SET `formsubmit`=4 WHERE `app_id`='".$appid."'";
                    if ($conn->query($sql) === TRUE)
                        {
                            if($type=="fybca")
                            {
                                header("location:FYBCAHome.php");
                            }
                            else if($type=="sybca")
                            {
                                header("location:SYBCAHome.php");
                            }
                            else if($type=="tybca")
                            {
                                $sql="UPDATE `tybca".date('Y') ."` SET `formsubmit`=4 WHERE `app_id`='".$appid."'";
                                $conn->query($sql);
                                header("location:TYBCAHome.php");
                            }
                        }
                        else {
                            echo "Error updating record: " . $conn->error;
                        }
                    $conn->close();
                }
                
            }
        }
        
        
        
        
        if($_POST['sem']=="5")
        {
            if(!empty($_POST['selectedCourse'])){
                // Loop to store and display values of individual checked checkbox.
                
                include './DBConnection.php';
                session_start();
                $appid=$_SESSION['username'];
                $type=$_SESSION["type"];
                $y;
                if($type==="tybca")
                {
                    $y=date('Y');
                }
                $sql="";
                $falg=false;
                foreach($_POST['selectedCourse'] as $selected)
                {
                    $sql.="INSERT INTO `form_tybca".$y."`(`app_id`, `course_code`, `courseSem`) VALUES('".$appid."','".$selected."',".$_POST['sem'].");";
                    echo $selected." -> ". $appid." -> ". $_POST['sem']."</br>";
                }
                
                if ($conn->multi_query($sql) === TRUE) 
                {
                    echo "New records created successfully</br>";
                    $flag=TRUE;
                } 
                else
                {
                    echo "Here";
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
                
                $sql="";
                
                if($flag)
                {
                    
                    include './DBConnection.php';
                    $sql="UPDATE `tybca".date('Y')."` SET `formsubmit`=5 WHERE `app_id`='".$appid."'";
                    if ($conn->query($sql) === TRUE)
                        {
                            if($type=="fybca")
                            {
                                header("location:FYBCAHome.php");
                            }
                            else if($type=="sybca")
                            {
                                header("location:SYBCAHome.php");
                            }
                            else if($type=="tybca")
                            {
                                header("location:TYBCAHome.php");
                            }
                        }
                        else {
                            echo "Error updating record: " . $conn->error;
                        }
                    $conn->close();    
                }
                
            }
        }
        
        
        
?>

