<?php

    
    if($_POST["action"]=="checkCourse")
    {
        include './DBConnection.php';
        session_start();
        $appid=$_SESSION["username"];
        $code=$_POST["code"];
        $str="";
        
        //checkingFYBCA
        if($_SESSION["type"]==="fybca")
        {
            $sql="SELECT * FROM `form_fybca".date('Y')."` WHERE app_id='".$_SESSION['username']."' AND course_code='".$code."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $str='This Course is alreday opted in Semester '.$row['courseSem'].' .';
                $str.='<input type="hidden" id="exist'.$code.'" value="true"/>';
                echo $str;
            }
            else
            {
                $sql="SELECT credits FROM `bcasubjectlist` WHERE course_code='".$code."'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $str.='<input type="hidden" id="exist'.$code.'" value="false"/>';
                    $str.='<input type="hidden" id="credits'.$code.'" value="'.$row['credits'].'"/>';
                    echo $str;
                }
            }
        }
        
        //checkingSYBCA
        else if($_SESSION["type"]==="sybca")
        {
            $sql="SELECT * FROM `form_sybca".date('Y')."` WHERE app_id='".$_SESSION['username']."' AND course_code='".$code."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $str='This Course is alreday opted in Semester '.$row['courseSem'].' .';
                $str.='<input type="hidden" id="exist'.$code.'" value="true"/>';
                echo $str;
            }
            else
            {
                $y=date('Y')-1;
                $sql="SELECT * FROM `form_fybca".$y."` WHERE app_id='".$_SESSION['username']."' AND course_code='".$code."'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $str='This Course is alreday opted in Semester '.$row['courseSem'].' .';
                    $str.='<input type="hidden" id="exist'.$code.'" value="true"/>';
                    echo $str;
                }
                else
                {
                    $sql="SELECT credits FROM `bcasubjectlist` WHERE course_code='".$code."'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $str.='<input type="hidden" id="exist'.$code.'" value="false"/>';
                        $str.='<input type="hidden" id="credits'.$code.'" value="'.$row['credits'].'"/>';
                        echo $str;
                    }
                }
                
            }
        }
        
        else if($_SESSION["type"]==="tybca")
        {
            $sql="SELECT * FROM `form_tybca".date('Y')."` WHERE app_id='".$_SESSION['username']."' AND course_code='".$code."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $str='This Course is alreday opted in Semester '.$row['courseSem'].' .';
                $str.='<input type="hidden" id="exist'.$code.'" value="true"/>';
                echo $str;
            }
            else
            {
                $y=date('Y')-1;
                $sql="SELECT * FROM `form_sybca".$y."` WHERE app_id='".$_SESSION['username']."' AND course_code='".$code."'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $str='This Course is alreday opted in Semester '.$row['courseSem'].' .';
                    $str.='<input type="hidden" id="exist'.$code.'" value="true"/>';
                    echo $str;
                }
                else
                {
                    $y=date('Y')-2;
                    $sql="SELECT * FROM `form_fybca".$y."` WHERE app_id='".$_SESSION['username']."' AND course_code='".$code."'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $str='This Course is alreday opted in Semester '.$row['courseSem'].' .';
                        $str.='<input type="hidden" id="exist'.$code.'" value="true"/>';
                        echo $str;
                    }
                    else
                    {
                        $sql="SELECT credits FROM `bcasubjectlist` WHERE course_code='".$code."'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $str.='<input type="hidden" id="exist'.$code.'" value="false"/>';
                            $str.='<input type="hidden" id="credits'.$code.'" value="'.$row['credits'].'"/>';
                            echo $str;
                        }
                    
                    }
                }
                
            }
        }
        
        
        $conn->close();
    }

    if ($_POST["action"]=="formfsbca1") 
    {
        include './DBConnection.php';
        session_start();
        $appid=$_SESSION["username"];
        $year=$_POST["year"];
        $total=0;
        $sql="SELECT bcasubjectlist.course_code,bcasubjectlist.course_name,bcasubjectlist.credits FROM bcasubjectlist INNER JOIN `form_fybca".$year."` ON bcasubjectlist.course_code=`form_fybca".$year."`.`course_code` WHERE `form_fybca".$year."`.app_id='".$appid."' AND courseSem=1 ORDER BY bcasubjectlist.course_code";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $str='<h5 style="font-family: robotobold;">Subject Form Semester 1</h5>';
            while($row = $result->fetch_assoc()) {

                $str.='<p>'.$row["course_code"].' &nbsp;&nbsp;  '.$row["course_name"].'  ('.$row["credits"].')</p>';
                $total+=$row["credits"];
            }
            $str.='<p style="font-family: robotobold;font-size: medium;">Total Credits of Semester 1 : &nbsp; '.$total.'</p>';
            
            $conn->close();
            echo $str;
        }
        else
        {
            echo '<p style="font-family: robotoregular;font-size: medium;">No Subject Selected ! &nbsp;</p>';
        }
    }
    
    if ($_POST["action"]=="formfsbca2") 
    {
        include './DBConnection.php';
        session_start();
        $appid=$_SESSION["username"];
        $year=$_POST["year"];
        $total=0;
        $sql="SELECT bcasubjectlist.course_code,bcasubjectlist.course_name,bcasubjectlist.credits FROM bcasubjectlist INNER JOIN `form_fybca".$year."` ON bcasubjectlist.course_code=`form_fybca".$year."`.`course_code` WHERE `form_fybca".$year."`.app_id='".$appid."' AND courseSem=2 ORDER BY bcasubjectlist.course_code";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $str='<h5 style="font-family: robotobold;">Subject Form Semester 2</h5>';
            while($row = $result->fetch_assoc()) {

                $str.='<p>'.$row["course_code"].' &nbsp;&nbsp;  '.$row["course_name"].'  ('.$row["credits"].')</p>';
                $total+=$row["credits"];
            }
            $str.='<p style="font-family: robotobold;font-size: medium;">Total Credits of Semester 2 : &nbsp; '.$total.'</p>';
            
            $conn->close();
            echo $str;
        }
        else
        {
            echo '<p style="font-family: robotoregular;font-size: medium;">No Subject Selected ! &nbsp;</p>';
        }
    }
    
    if ($_POST["action"]=="formssbca1") 
    {
        include './DBConnection.php';
        session_start();
        $appid=$_SESSION["username"];
        $year=$_POST["year"];
        $total=0;
        $sql="SELECT bcasubjectlist.course_code,bcasubjectlist.course_name,bcasubjectlist.credits FROM bcasubjectlist INNER JOIN `form_sybca".$year."` ON bcasubjectlist.course_code=`form_sybca".$year."`.`course_code` WHERE `form_sybca".$year."`.app_id='".$appid."' AND courseSem=3 ORDER BY bcasubjectlist.course_code";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $str='<h5 style="font-family: robotobold;">Subject Form Semester 3</h5>';
            while($row = $result->fetch_assoc()) {

                $str.='<p>'.$row["course_code"].' &nbsp;&nbsp;  '.$row["course_name"].'  ('.$row["credits"].')</p>';
                $total+=$row["credits"];
            }
            $str.='<p style="font-family: robotobold;font-size: medium;">Total Credits of Semester 3 : &nbsp; '.$total.'</p>';
            
            $conn->close();
            echo $str;
        }
        else
        {
            echo '<p style="font-family: robotoregular;font-size: medium;">No Subject Selected ! &nbsp;</p>';
        }
    }
    
    if ($_POST["action"]=="formssbca2") 
    {
        include './DBConnection.php';
        session_start();
        $appid=$_SESSION["username"];
        $year=$_POST["year"];
        $total=0;
        $sql="SELECT bcasubjectlist.course_code,bcasubjectlist.course_name,bcasubjectlist.credits FROM bcasubjectlist INNER JOIN `form_sybca".$year."` ON bcasubjectlist.course_code=`form_sybca".$year."`.`course_code` WHERE `form_sybca".$year."`.app_id='".$appid."' AND courseSem=4 ORDER BY bcasubjectlist.course_code";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $str='<h5 style="font-family: robotobold;">Subject Form Semester 4</h5>';
            while($row = $result->fetch_assoc()) {

                $str.='<p>'.$row["course_code"].' &nbsp;&nbsp;  '.$row["course_name"].'  ('.$row["credits"].')</p>';
                $total+=$row["credits"];
            }
            $str.='<p style="font-family: robotobold;font-size: medium;">Total Credits of Semester 2 : &nbsp; '.$total.'</p>';
            
            $conn->close();
            echo $str;
        }
        else
        {
            echo '<p style="font-family: robotoregular;font-size: medium;">No Subject Selected ! &nbsp;</p>';
        }
    }
    
    
    if ($_POST["action"]=="formtsbca1") 
    {
        include './DBConnection.php';
        session_start();
        $appid=$_SESSION["username"];
        $year=$_POST["year"];
        $total=0;
        $sql="SELECT bcasubjectlist.course_code,bcasubjectlist.course_name,bcasubjectlist.credits FROM bcasubjectlist INNER JOIN `form_tybca".$year."` ON bcasubjectlist.course_code=`form_tybca".$year."`.`course_code` WHERE `form_tybca".$year."`.app_id='".$appid."' AND courseSem=5 ORDER BY bcasubjectlist.course_code";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $str='<h5 style="font-family: robotobold;">Subject Form Semester 5</h5>';
            while($row = $result->fetch_assoc()) {

                $str.='<p>'.$row["course_code"].' &nbsp;&nbsp;  '.$row["course_name"].'  ('.$row["credits"].')</p>';
                $total+=$row["credits"];
            }
            $str.='<p style="font-family: robotobold;font-size: medium;">Total Credits of Semester 5 : &nbsp; '.$total.'</p>';
            
            $conn->close();
            echo $str;
        }
        else
        {
            echo '<p style="font-family: robotoregular;font-size: medium;">No Subject Selected ! &nbsp;</p>';
        }
    }
?>