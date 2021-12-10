<?php

    if ($_POST["action"]=="verify") 
    {
        include './DBConnection.php';
        $id=$_POST["appid"];
        $y=$_POST["year"];
              
        $sql="UPDATE `".$y."".date('Y')."` SET `verified`=0 WHERE `app_id`='".$id."';";
        //$result = $conn->query($sql);
        $conn->query($sql); 
       
        $conn->close();
    }
    
    if($_POST["action"]=="add")
    {
        include './DBConnection.php';
        $code=$_POST["code"];
        $code= json_decode($code,TRUE);
        
        $type=$_POST["type"];
        $sql="";
        for ($i = 0; $i < count($code); $i++)
        {
            
            $sql.="INSERT INTO `".$type."`(`course_code`) VALUES ('".$code[$i]."');";
            
        }
        $conn->multi_query($sql);
        $conn->close();
        
    }
    
    if ($_POST["action"]=="delete") 
    {
        include './DBConnection.php';
        $code=$_POST["code"];
        $type=$_POST["type"];
        
        
        $sql="DELETE FROM `".$type."` WHERE `course_code`='".$code."';";
        //$result = $conn->query($sql);
        $conn->query($sql); 
       
        $conn->close();
    }
    
    if($_POST["action"]=="DeleteStudentForm")
    {
        include './DBConnection.php';
        $appid=$_POST["appid"];
        $year=$_POST["year"];
        
        $str="";
        //echo $year.date('Y');
        $sql="DELETE FROM `form_".$year.date('Y')."` WHERE app_id='".$appid."'";
        
        
        if ($conn->query($sql)==TRUE) {
            
            if($year=="fybca")
                $sql="UPDATE `fybca2017` SET `formsubmit` = '0' WHERE `fybca2017`.`app_id` = '".$appid."';";
            else if($year=="sybca")
            {
                $sql="UPDATE `sybca2017` SET `formsubmit` = '2' WHERE `sybca2017`.`app_id` = '".$appid."';";
            }
            else
            {
                $sql="UPDATE `tybca2017` SET `formsubmit` = '4' WHERE `tybca2017`.`app_id` = '".$appid."';";
            }
            
            if ($conn->query($sql)==TRUE) {
               // echo '<script>alert("x");</script>';
            
            }
        }
        else
        {
            if($year=="fybca")
                $sql="UPDATE `fybca2017` SET `formsubmit` = '0' WHERE `fybca2017`.`app_id` = '".$appid."';";
            else if($year=="sybca")
            {
                $sql="UPDATE `sybca2017` SET `formsubmit` = '2' WHERE `sybca2017`.`app_id` = '".$appid."';";
            }
            else
            {
                $sql="UPDATE `tybca2017` SET `formsubmit` = '4' WHERE `tybca2017`.`app_id` = '".$appid."';";
            }
            
            if ($conn->query($sql)==TRUE) {
               // echo '<script>alert("x");</script>';
            
            }
        }
        $conn->close();
    }
    
    
    if ($_POST["action"]=="fetchfsbca1") 
    {
        include './DBConnection.php';
        $type=$_POST["ctype"];
        
        
        //$sql="SELECT * FROM `bcasubjectlist` WHERE `course_type`='".$type."';";
        $sql="SELECT `bcasubjectlist`.course_code,`bcasubjectlist`.course_name,`bcasubjectlist`.credits FROM `bcasubjectlist` WHERE NOT EXISTS(SELECT course_code from `fsbca-i` WHERE `fsbca-i`.`course_code` =bcasubjectlist.course_code) AND `bcasubjectlist`.course_type='".$type."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {


            echo'<table  class="w3-table-all w3-centered w3-margin-bottom">';
            echo'<tr style="font-family: robotoregular;"> <th>Select</th> <th>Course Code</th> <th>Course Name</th> <th>Credits</th></tr>';

            while($row = $result->fetch_assoc()) {

                echo '<tr style="font-family: robotoregular;">';
                echo '<td><input type="checkbox" name="addCourse" value="'.$row['course_code'].'"/></td>';
                echo '<td>'.$row['course_code'].'</td>';
                echo '<td>'.$row['course_name'].'</td>';
                echo '<td>'.$row['credits'].'</td>';
                echo '</tr>';

            }
            echo"</table>";
        }
        else{
            echo'<p class="w3-text-red">Subjects Already Added ! </p>';
        }
        $conn->close();
    }
    
    
    if ($_POST["action"]=="fetchfsbca2")
    {
        include './DBConnection.php';
        $type=$_POST["ctype"];
        
        
        //$sql="SELECT * FROM `bcasubjectlist` WHERE `course_type`='".$type."';";
        $sql="SELECT `bcasubjectlist`.course_code,`bcasubjectlist`.course_name,`bcasubjectlist`.credits FROM `bcasubjectlist` WHERE NOT EXISTS(SELECT course_code from `fsbca-ii` WHERE `fsbca-ii`.`course_code` =bcasubjectlist.course_code) AND `bcasubjectlist`.course_type='".$type."'";
        
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {


            echo'<table  class="w3-table-all w3-centered w3-margin-bottom">';
            echo'<tr style="font-family: robotoregular;"> <th>Select</th>  <th>Course Code</th> <th>Course Name</th> <th>Credits</th></tr>';

            while($row = $result->fetch_assoc()) {

                echo '<tr style="font-family: robotoregular;">';
                echo '<td><input type="checkbox" name="addCourse" value="'.$row['course_code'].'"/></td>';
                echo '<td>'.$row['course_code'].'</td>';
                echo '<td>'.$row['course_name'].'</td>';
                echo '<td>'.$row['credits'].'</td>';
                echo '</tr>';

            }
            echo"</table>";
        }
        else{
            echo'<p class="w3-text-red">Subjects Already Added  ! </p>';
        }
        $conn->close();
    }
    
    
    if ($_POST["action"]=="fetchssbca1") 
    {
        include './DBConnection.php';
        $type=$_POST["ctype"];
        
        
        //$sql="SELECT * FROM `bcasubjectlist` WHERE `course_type`='".$type."';";
        $sql="SELECT `bcasubjectlist`.course_code,`bcasubjectlist`.course_name,`bcasubjectlist`.credits FROM `bcasubjectlist` WHERE NOT EXISTS(SELECT course_code from `ssbca-i` WHERE `ssbca-i`.`course_code` =bcasubjectlist.course_code) AND `bcasubjectlist`.course_type='".$type."'";
        
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {


            echo'<table  class="w3-table-all w3-centered w3-margin-bottom">';
            echo'<tr style="font-family: robotoregular;"> <th>Select</th>  <th>Course Code</th> <th>Course Name</th> <th>Credits</th></tr>';

            while($row = $result->fetch_assoc()) {

                echo '<tr style="font-family: robotoregular;">';
                echo '<td><input type="checkbox" name="addCourse" value="'.$row['course_code'].'"/></td>';
                echo '<td>'.$row['course_code'].'</td>';
                echo '<td>'.$row['course_name'].'</td>';
                echo '<td>'.$row['credits'].'</td>';
                echo '</tr>';

            }
            echo"</table>";
        }
        else{
            echo'<p class="w3-text-red">Subjects Already Added  ! </p>';
        }
        $conn->close();
    }
    
    
    if ($_POST["action"]=="fetchssbca2")
    {
        include './DBConnection.php';
        $type=$_POST["ctype"];
        
        
        //$sql="SELECT * FROM `bcasubjectlist` WHERE `course_type`='".$type."';";
        $sql="SELECT `bcasubjectlist`.course_code,`bcasubjectlist`.course_name,`bcasubjectlist`.credits FROM `bcasubjectlist` WHERE NOT EXISTS(SELECT course_code from `ssbca-ii` WHERE `ssbca-ii`.`course_code` =bcasubjectlist.course_code) AND `bcasubjectlist`.course_type='".$type."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {


            echo'<table  class="w3-table-all w3-centered w3-margin-bottom">';
            echo'<tr style="font-family: robotoregular;"> <th>Select</th>  <th>Course Code</th> <th>Course Name</th> <th>Credits</th></tr>';

            while($row = $result->fetch_assoc()) {

                echo '<tr style="font-family: robotoregular;">';
                echo '<td><input type="checkbox" name="addCourse" value="'.$row['course_code'].'"/></td>';
                echo '<td>'.$row['course_code'].'</td>';
                echo '<td>'.$row['course_name'].'</td>';
                echo '<td>'.$row['credits'].'</td>';
                echo '</tr>';

            }
            echo"</table>";
        }
        else{
            echo'<p class="w3-text-red">Subjects Already Added ! </p>';
        }
        $conn->close();
    }
    
    
    if ($_POST["action"]=="fetchtsbca1") 
    {
        include './DBConnection.php';
        $type=$_POST["ctype"];
        
        
        //$sql="SELECT * FROM `bcasubjectlist` WHERE `course_type`='".$type."';";
        $sql="SELECT `bcasubjectlist`.course_code,`bcasubjectlist`.course_name,`bcasubjectlist`.credits FROM `bcasubjectlist` WHERE NOT EXISTS(SELECT course_code from `tsbca-i` WHERE `tsbca-i`.`course_code` =bcasubjectlist.course_code) AND `bcasubjectlist`.course_type='".$type."'";
        
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {


            echo'<table  class="w3-table-all w3-centered w3-margin-bottom">';
            echo'<tr style="font-family: robotoregular;"> <th>Select</th>  <th>Course Code</th> <th>Course Name</th> <th>Credits</th></tr>';

            while($row = $result->fetch_assoc()) {

                echo '<tr style="font-family: robotoregular;">';
                echo '<td><input type="checkbox" name="addCourse" value="'.$row['course_code'].'"/></td>';
                echo '<td>'.$row['course_code'].'</td>';
                echo '<td>'.$row['course_name'].'</td>';
                echo '<td>'.$row['credits'].'</td>';
                echo '</tr>';

            }
            echo"</table>";
        }
        else{
            echo'<p class="w3-text-red">Subjects Already Added  ! </p>';
        }
        $conn->close();
    }

    
    if($_POST["action"]=="getForm")
    {
        include './DBConnection.php';
        $name=$_POST["name"];
        $sql="";
        
        if($name==="fybca" || $name==="fymsc")
        {
            $sql="SELECT app_id, first_name, last_name, formsubmit FROM `".$name.date('Y')."` WHERE formsubmit IN(1,2)";
        }
        else if($name==="sybca" || $name==="symsc")
        {
            $sql="SELECT app_id, first_name, last_name, formsubmit FROM `".$name.date('Y')."` WHERE formsubmit IN(3,4)";
        }
        else{
            $sql="SELECT app_id, first_name, last_name, formsubmit FROM `".$name.date('Y')."` WHERE formsubmit IN(5)";
        }
        
        $str="";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            
            $str.='<table  class="w3-table-all w3-margin-bottom">';
            $str.='<tr style="font-family: robotoregular;"> <th>Application ID</th> <th>Student Name</th> <th>Form Submitted</th> <th>View</th></tr>';

            while($row = $result->fetch_assoc()) {

                $str.= '<tr style="font-family: robotoregular;">';
                $str.= '<td>'.$row['app_id'].'</td>';
                $str.= '<td>'.$row['first_name'].' '.$row['last_name'].'</td>';
                $str.= '<td>'.$row['formsubmit'].'</td>';
                $str.= '<td><button type="button" name="view" onclick="viewForm(this);" class="w3-btn w3-white w3-text-blue w3-border w3-border-blue w3-round-xlarge" app_id="'.$row['app_id'].'" year="'.$name.'" student="'.$row['first_name'].' '.$row['last_name'].'">View</button></td>';
                $str.= '</tr>';

            }
            $str.="</table>";
        }
        else{
            $str.='<p class="w3-text-red">No Form Found ! </p>';
        }
        echo $str;
    }
    
    
    if($_POST["action"]=="viewStudentForm")
    {
        include './DBConnection.php';
        $appid=$_POST["appid"];
        $year=$_POST["year"];
        $sname=$_POST["sname"];
        $str="";
        $total=0;
        
        
        $sql="SELECT bcasubjectlist.course_code,bcasubjectlist.course_name,bcasubjectlist.credits, `form_".$year.date('Y')."`.courseSem FROM bcasubjectlist INNER JOIN `form_".$year.date('Y')."` ON bcasubjectlist.course_code=`form_".$year.date('Y')."`.`course_code` WHERE `form_".$year.date('Y')."`.app_id='".$appid."' ORDER BY `form_".$year.date('Y')."`.courseSem";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            
            $str.='<div class="w3-modal-content w3-animate-top w3-card-4">
                      <header class="w3-container w3-white"> 
                        <span onclick="document.getElementById(\'modal\').style.display=\'none\'" 
                        class="w3-button w3-display-topright">&times;</span>
                        <h5 style="font-family: robotobold;">Subject Form - '.$sname.'</h5>
                      </header>
                      <div class="w3-container">';
            
            while($row = $result->fetch_assoc()) {
                
                $str.='<p>'.$row["course_code"].' &nbsp;&nbsp;  '.$row["course_name"].'  ('.$row["credits"].')</p>';
                $total+=$row["credits"];
            }
            $str.='<p style="font-family: robotobold;font-size: medium;">Total Credits of '.strtoupper($year).' : &nbsp; '.$total.'</p>';
            $str.='</div>';
            $conn->close();
            
        }
        else
        {
            echo '<p style="font-family: robotoregular;font-size: medium;">No Subject Selected ! &nbsp;</p>';
        }
        echo $str;
    }
    
    if($_POST["action"]=="addBCA")
    {
        include './DBConnection.php';
        $code=$_POST["code"];
        $cname=$_POST["cname"];
        $credits=$_POST["credits"];
        $ctype=$_POST["ctype"];
        
        $sql="INSERT INTO `bcasubjectlist`(`course_code`, `course_name`, `credits`, `course_type`) VALUES ('".$code."','".$cname."','".$credits."','".$ctype."')";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo 'Subject '.$cname.' Added Successfully';
        }
        else
        {
            echo 'Error Adding Subject '.$cname.' !';
        }
        $conn->close();
        
    }
    
    if($_POST["action"]=="deleteBCA")
    {
        include './DBConnection.php';
        $code=$_POST["code"];
        $type=$_POST["type"];
        
        
        $sql="DELETE FROM `bcasubjectlist` WHERE `course_code`='".$code."';";
        
        if ($conn->query($sql)==TRUE) {
            echo 'Subject '.$code.' Deleted Successfully';
        }
        else
        {
            echo 'Error Deleting Subject '.$code.' !';
        }
       
        $conn->close();
    }
    if ($_POST["action"]=="setCredits") 
    {
        include './DBConnection.php';
        $name=$_POST["name"];
        $credit=$_POST["credits"];
              
        $sql="UPDATE `bcasubjectlist` SET `credits`=".$credit." WHERE `course_code`='".$name."';";
        //$result = $conn->query($sql);
        $conn->query($sql); 
       
        $conn->close();
    }
    
    
    
    if($_POST["action"]=="getEditForm")
    {
        include './DBConnection.php';
        $name=$_POST["name"];
        $sql="";
        
        if($name==="fybca" || $name==="fymsc")
        {
            $sql="SELECT app_id, first_name, last_name, formsubmit FROM `".$name.date('Y')."` WHERE formsubmit IN(1,2)";
        }
        else if($name==="sybca" || $name==="symsc")
        {
            $sql="SELECT app_id, first_name, last_name, formsubmit FROM `".$name.date('Y')."` WHERE formsubmit IN(3,4)";
        }
        else{
            $sql="SELECT app_id, first_name, last_name, formsubmit FROM `".$name.date('Y')."` WHERE formsubmit IN(5)";
        }
        
        $str="";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            
            $str.='<table  class="w3-table-all w3-margin-bottom">';
            $str.='<tr style="font-family: robotoregular;"> <th>Application ID</th> <th>Student Name</th> <th>Form Submitted</th> <th>View</th><th>Delete</th></tr>';

            while($row = $result->fetch_assoc()) {

                $str.= '<tr style="font-family: robotoregular;">';
                $str.= '<td>'.$row['app_id'].'</td>';
                $str.= '<td>'.$row['first_name'].' '.$row['last_name'].'</td>';
                $str.= '<td>'.$row['formsubmit'].'</td>';
                $str.= '<td><button type="button" name="view" onclick="viewForm(this);" class="w3-btn w3-white w3-text-blue w3-border w3-border-blue w3-round-xlarge" app_id="'.$row['app_id'].'" year="'.$name.'" student="'.$row['first_name'].' '.$row['last_name'].'">View</button></td>';
                $str.= '<td><button type="button" name="delete" onclick="deleteForm(this);" class="w3-btn w3-white w3-text-red w3-border w3-border-red w3-round-xlarge" app_id="'.$row['app_id'].'" year="'.$name.'" student="'.$row['first_name'].' '.$row['last_name'].'">Delete</button></td>';
                $str.= '</tr>';

            }
            $str.="</table>";
        }
        else{
            $str.='<p class="w3-text-red">No Form Found ! </p>';
        }
        echo $str;
    }
    
    
    
?>

