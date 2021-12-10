<div class="w3-container  w3-blue">
    <h3>Subject Form Semester 1</h3>
 </div>

<?php
    include './DBConnection.php';
    $sql="SELECT * FROM `fsbca-i`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {

        $str='<form class="w3-container" name="fsbca-i" action="validateForm.php" onsubmit="return validateForm()" method="post" style="font-size: 17px;margin-left:5%;">';
        $str.='<input type="hidden" name="sem" value="1"/>';
        
        
    //TotalAvailableCredits    
        
        $sql="SELECT bcasubjectlist.credits FROM bcasubjectlist WHERE bcasubjectlist.course_code='fsbca1L' AND course_name='min_Sem1'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $str.='<input type="hidden" id="minCredits" value="'.$row["credits"].'"/>';
        }
        else
        {
            $str.='<input type="hidden" id="minCredits" value="0"/>';
        }
        
        $sql="SELECT bcasubjectlist.credits FROM bcasubjectlist WHERE bcasubjectlist.course_code='fsbca1H' AND course_name='max_Sem1'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $str.='<input type="hidden" id="maxCredits" value="'.$row["credits"].'"/>';
        }
        else
        {
            $str.='<input type="hidden" id="maxCredits" value="0"/>';
        }
        
    //Core
        $str.= '<h3>Core Subjects</h3>';
        $str.='<div style="margin-left:5%;margin-top:2%;">';
        $sql="SELECT bcasubjectlist.course_code,bcasubjectlist.course_name,bcasubjectlist.credits FROM bcasubjectlist INNER JOIN `fsbca-i` ON bcasubjectlist.course_code=`fsbca-i`.course_code WHERE bcasubjectlist.course_type=\"fsbca1_core\" ORDER BY bcasubjectlist.course_code ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {

                $str.='<input type="checkbox" id="'.$row['course_code'].'" name="selectedCourse[]"  onclick="checkCourse(this)"  value="'.$row["course_code"].'"/>  &nbsp;&nbsp;  '.$row["course_code"].' &nbsp;&nbsp;  '.$row["course_name"].'  ('.$row["credits"].')';
                $str.='<p class="w3-text-red" id="p'.$row['course_code'].'" style="font-size:12px;margin-bottom:3%;"></p>';
            }
            $str.='</div>';
        }
        else{
            $str.='<p class="w3-text-red">No Core Subject has been set ! </p>';
        }
        

    //Electives
        $str.= '<h3>Elective Subjects</h3>';
        $str.='<div style="margin-left:5%;margin-top:2%;">';
        $sql="SELECT bcasubjectlist.course_code,bcasubjectlist.course_name,bcasubjectlist.credits FROM bcasubjectlist INNER JOIN `fsbca-i` ON bcasubjectlist.course_code=`fsbca-i`.course_code WHERE bcasubjectlist.course_type=\"elective\" ORDER BY bcasubjectlist.course_code ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {


                while($row = $result->fetch_assoc()) {

                    $str.='<input type="checkbox" id="'.$row['course_code'].'" name="selectedCourse[]" onclick="checkCourse(this)"  value="'.$row["course_code"].'"/>  &nbsp;&nbsp;  '.$row["course_code"].'  &nbsp;&nbsp; '.$row["course_name"].'  ('.$row["credits"].')';
                    $str.='<p class="w3-text-red" id="p'.$row['course_code'].'" style="font-size:12px;margin-bottom:3%;"></p>';
                }
                $str.='</div>';
            }
        else{
            $str.='<p class="w3-text-red">No Elective Subject has been set ! </p>';
        }
        $str.='<div id="formDetails" class="w3-container" style="display: none;font-size:14px;"></div>';
        $str.='<input type="submit" name="submit" style="margin-left:5%;margin-top:2%;margin-bottom:3%;" value="Submit Form" class="w3-btn w3-round-large w3-green"> <br>';
        //$str.='<label class="w3-text-red" style="margin-left:5%;margin-top:2%;margin-bottom:7%;">* You cannot change form once it submitted !</label></form>';
        
        echo $str;
    }
    else {
        $str.='<p class="w3-text-red">No Subject has been set ! </p>';
        $str.='</form>';
        echo $str;
    }
    $conn->close();
?>
            