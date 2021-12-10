<?php
    include './DBConnection.php';
    
    $prn=$_REQUEST['prn'];
    $pwd=$_REQUEST['pwd'];
    
    
    //AdminCheking
    $sql = "SELECT admin_id, `Admin Name`, password FROM admin where (admin_id='".$prn."' OR `Admin Name`='".$prn."') AND password='".$pwd."'";
    $result = $conn->query($sql);
    
   
    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION["username"]=$row['admin_id'];
        $_SESSION["session"]=TRUE;
        $_SESSION["type"]="admin";
        $_SESSION["fname"]=$row['Admin Name'];
        header("location:admin/AdminDashboard.php");
    }
    else
    {
        //Faculty
        $sql = "SELECT faculty_id, `Faculty Name`, password FROM faculty where (faculty_id='".$prn."' OR `Faculty Name`='".$prn."') AND password='".$pwd."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            $row = $result->fetch_assoc();
            session_start();
            $_SESSION["username"]=$row['faculty_id'];
            $_SESSION["session"]=TRUE;
            $_SESSION["type"]="faculty";
            $_SESSION["fname"]=$row['Faculty Name'];
            header("location:admin/FacultyHome.php");
        }
        else
        {
            //FYBCA
            
            // 
            $sql = "SELECT app_id, prn, first_name, password FROM fybca". date('Y')." where (prn='".$prn."' OR app_id='".$prn."') AND password='".$pwd."'";
            
            $result = $conn->query($sql);

            if ($result->num_rows > 0)
            {
                $row = $result->fetch_assoc();
                session_start();
                $_SESSION["username"]=$row['app_id'];
                $_SESSION["session"]=TRUE;
                $_SESSION["type"]="fybca";
                $_SESSION["fname"]=$row['first_name'];
                header("location:FYBCAHome.php");
            }
            else
            {
                
                //SYBCA

                $sql = "SELECT app_id, prn, first_name, password FROM sybca". date('Y')." where (prn='".$prn."' OR app_id='".$prn."') AND password='".$pwd."'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0)
                {
                    $row = $result->fetch_assoc();
                    session_start();
                    $_SESSION["username"]=$row['app_id'];
                    $_SESSION["session"]=TRUE;
                    $_SESSION["type"]="sybca";
                    $_SESSION["fname"]=$row['first_name'];
                    header("location:SYBCAHome.php");
                }
                else
                {
                 //TYBCA

                    $sql = "SELECT app_id, prn, first_name, password FROM tybca". date('Y')." where (prn='".$prn."' OR app_id='".$prn."') AND password='".$pwd."'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0)
                    {
                        $row = $result->fetch_assoc();
                        session_start();
                        $_SESSION["username"]=$row['app_id'];
                        $_SESSION["session"]=TRUE;
                        $_SESSION["type"]="tybca";
                        $_SESSION["fname"]=$row['first_name'];
                        header("location:TYBCAHome.php");
                    }
                    else 
                    {   
                       //FYMSC

                        $sql = "SELECT app_id, prn, first_name, password FROM fymsc". date('Y')." where (prn='".$prn."' OR app_id='".$prn."') AND password='".$pwd."'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0)
                        {
                            $row = $result->fetch_assoc();
                            session_start();
                            $_SESSION["username"]=$row['app_id'];
                            $_SESSION["session"]=TRUE;
                            $_SESSION["type"]="fymsc";
                            $_SESSION["fname"]=$row['first_name'];
                            header("location:FYMScHome.php");
                        }
                        else 
                        {    
                            //SYMSC
                            $sql = "SELECT app_id, prn, first_name, password FROM symsc". date('Y')." where (prn='".$prn."' OR app_id='".$prn."') AND password='".$pwd."'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0)
                            {
                                $row = $result->fetch_assoc();
                                session_start();
                                $_SESSION["username"]=$row['app_id'];
                                $_SESSION["session"]=TRUE;
                                $_SESSION["type"]="symsc";
                                $_SESSION["fname"]=$row['first_name'];
                                header("location:SYMScHome.php");
                            }
                            else 
                            {
                                //FYBCA-1
                                $year=date('Y')-1;
                                $sql = "SELECT app_id, prn, first_name, password FROM sybca".$year." where (prn='".$prn."' OR app_id='".$prn."') AND password='".$pwd."'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0)
                                {
                                    $row = $result->fetch_assoc();
                                    session_start();
                                    $_SESSION["username"]=$row['app_id'];
                                    $_SESSION["session"]=TRUE;
                                    $_SESSION["type"]="fybca";
                                    $_SESSION["fname"]=$row['first_name'];
                                    header("location:FYBCAHome.php");
                                }
                                else
                                {
                                    //SYBCA-1

                                    $year=date('Y')-1;
                                    $sql = "SELECT app_id, prn, first_name, password FROM sybca".$year." where (prn='".$prn."' OR app_id='".$prn."') AND password='".$pwd."'";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0)
                                    {
                                        $row = $result->fetch_assoc();
                                        session_start();
                                        $_SESSION["username"]=$row['app_id'];
                                        $_SESSION["session"]=TRUE;
                                        $_SESSION["type"]="sybca";
                                        $_SESSION["fname"]=$row['first_name'];
                                        header("location:SYBCAHome.php");
                                    }
                                    else
                                    {  
                                        //TYBCA-1
                                     
                                        $year=date('Y')-1;
                                        $sql = "SELECT app_id, prn, first_name, password FROM tybca".$year." where (prn='".$prn."' OR app_id='".$prn."') AND password='".$pwd."'";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0)
                                        {
                                            $row = $result->fetch_assoc();
                                            session_start();
                                            $_SESSION["username"]=$row['app_id'];
                                            $_SESSION["session"]=TRUE;
                                            $_SESSION["type"]="tybca";
                                            $_SESSION["fname"]=$row['first_name'];
                                            header("location:TYBCAHome.php");
                                        }
                                        else
                                        {
                                            //FYMSC-1
                                             
                                            $year=date('Y')-1;
                                            $sql = "SELECT app_id, prn, first_name, password FROM fymsc".$year." where (prn='".$prn."' OR app_id='".$prn."') AND password='".$pwd."'";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0)
                                            {
                                                $row = $result->fetch_assoc();
                                                session_start();
                                                $_SESSION["username"]=$row['app_id'];
                                                $_SESSION["session"]=TRUE;
                                                $_SESSION["type"]="fymsc";
                                                $_SESSION["fname"]=$row['first_name'];
                                                header("location:FYMScHome.php");
                                            }
                                            else
                                            {   


                                                //SYMSC-1

                                                $year=date('Y')-1;
                                                $sql = "SELECT app_id, prn, first_name password FROM symsc". $year." where (prn='".$prn."' OR app_id='".$prn."') AND password='".$pwd."'";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0)
                                                {
                                                    $row = $result->fetch_assoc();
                                                    session_start();
                                                    $_SESSION["username"]=$row['app_id'];
                                                    $_SESSION["session"]=TRUE;
                                                    $_SESSION["type"]="symsc";
                                                    $_SESSION["fname"]=$row['first_name'];
                                                    header("location:SYMScHome.php");
                                                }
                                                else
                                                {

                                                    $msg = 'Incorrect Username or Password !';

                                                    header("location:index.php?msg=".$msg);
                                                }
                                            }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                 
                }
                
            }
        }
        
    

    $conn->close();
?>