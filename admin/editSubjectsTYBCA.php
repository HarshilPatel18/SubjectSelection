<?php   include './checkSession.php'; ?>
<!DOCTYPE html>
<html>
    <title>TYBCA - Subject Details</title>
    <link rel="icon" href="../images/hat.svg" type="image/icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery3.0.1.min.js"></script>
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/materialfonts.css">
    <script src="../js/jquery3.0.1.min.js"></script>
    <style>
        .material-icons {vertical-align:-14%}
            @font-face {
                font-family: 'robotolight';
                src: url('../fonts/Roboto-Light.ttf');
            }

            @font-face {
                font-family: 'robotoregular';
                src: url('../fonts/Roboto-Regular.ttf');
            }

            @font-face {
                font-family: 'robotobold';
                src: url('../fonts/Roboto-Bold.ttf');
            }
            
            .select {
              outline: 0;
              background: #f2f2f2;
              width: 50%;
              border: 0;
              margin: 15px;
              padding: 10px;
              border-top-left-radius: 5px;
              border-top-right-radius: 5px;
              border-bottom-left-radius: 5px;
              border-bottom-right-radius: 5px;
              box-sizing: border-box;
              
              font-size: 15px;
            }
    </style>
    
    <body style="background-color: #f5f5f5;" onload="document.getElementById('fh1').click();document.getElementById('fh2').click();">
            
        <!--Sidebar-->
            <div class="w3-sidebar w3-bar-block w3-collapse w3-card-4 " style="width:280px;background-color: #fefefe;" id="mySidebar">
              
                <div class="w3-center">
                  <button class="w3-button w3-right w3-hide-large" onclick="w3_close()">&times;</button>
                  <img class="w3-image  w3-margin-top w3-centered" height="30%" width="30%" src="../images/hat.svg" alt="hat" />
                  <p class="w3-centered" style="font-family: robotobold;font-size: 20px;">Subject Selection</p>
                </div>
                <hr>
                <div class="w3-center" style="padding: 10px;">
                    
   
                    <a href="AdminDashboard.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-large w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;" ><i class="material-icons">dashboard</i>&nbsp;&nbsp; Dashboard</a>
                    <a href="AdminStudentForm.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-large w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">assignment</i>&nbsp;&nbsp; Student's Form</a>
                    <a href="AdminSubjectDetails.php" class="w3-bar-item w3-button w3-hover-blue w3-round-large w3-margin-bottom w3-blue w3-text-white" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">book</i>&nbsp;&nbsp; Subject Details</a>
                    <a href="Users.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-large w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">person</i>&nbsp;&nbsp; Users</a>
                    <a href="batch.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-large w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">group</i>&nbsp;&nbsp; Batch</a>
                    <a href="TableList.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-large w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">content_paste</i>&nbsp;&nbsp; Table List</a>
                    <hr>
                        <a href="logout.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-medium w3-margin-top w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;float:bottom;"><i class="material-icons">sentiment_satisfied</i>&nbsp;&nbsp; Logout</a>    
                </div>
            </div>
            
        
        
            
            <!--Main Window-->
            <div class="w3-main" style="margin-left:300px">
                
                <div>
                  <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
                  <div class="w3-container">
                      <h3 style="font-family: robotoregular;color: darkslategray">Current Year Subjects - TYBCA </h3>
                  </div>
                </div>
                
               <!--Sem1-->
                <h5 class="w3-button w3-card w3-block w3-white w3-hover-blue w3-round-large" id="fh1" onclick="myFunction('Demo1')" style="font-family: robotoregular;">Semester 5</h5>
                <div id="Demo1" class="w3-hide w3-center w3-container">
                        <?php
                            include '../DBConnection.php';
                            $sql="SELECT * FROM `tsbca-i`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {



                                //Core
                                echo '<h4 style="font-family: robotoregular;">Core Subjects</h4>';
                                $sql="SELECT bcasubjectlist.course_code,bcasubjectlist.course_name,bcasubjectlist.credits FROM bcasubjectlist INNER JOIN `tsbca-i` ON bcasubjectlist.course_code=`tsbca-i`.course_code WHERE bcasubjectlist.course_type=\"tsbca1_core\" ORDER BY bcasubjectlist.course_code ";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {


                                    echo'<table  class="w3-table-all  w3-margin-bottom w3-margin-top">';
                                    echo'<tr style="font-family: robotoregular;"> <th>Course Code</th> <th>Course Name</th> <th>Credits</th>  <th>Delete</th></tr>';

                                    while($row = $result->fetch_assoc()) {

                                        echo '<tr style="font-family: robotoregular;">';
                                        echo '<td>'.$row['course_code'].'</td>';
                                        echo '<td>'.$row['course_name'].'</td>';
                                        echo '<td>'.$row['credits'].'</td>';
                                        //echo '<td><button type="button" name="update" onclick="updateSub(this);" class="w3-btn w3-blue w3-round-xlarge" course_code='.$row['course_code'].' courseType="tsbca-i">Update</button></td>';
                                        echo '<td><button type="button" name="delete" onclick="deleteSub(this);" class="w3-btn w3-red  w3-round-xxlarge" course_code='.$row['course_code'].' courseType="tsbca-i">Delete</button></td>';
                                        echo '</tr>';

                                    }
                                    echo"</table>";

                                }
                                else{
                                    echo'<p class="w3-text-red">No Core Subject has been set ! </p>';
                                }
                                
                                
                                //CoreElectives
                                echo '<h4 style="font-family: robotoregular;">Core Elective Subjects</h4>';
                                $sql="SELECT bcasubjectlist.course_code,bcasubjectlist.course_name,bcasubjectlist.credits FROM bcasubjectlist INNER JOIN `tsbca-i` ON bcasubjectlist.course_code=`tsbca-i`.course_code WHERE bcasubjectlist.course_type=\"tsbca1_core_elective\" ORDER BY bcasubjectlist.course_code ";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {


                                    echo'<table  class="w3-table-all  w3-margin-bottom w3-margin-top">';
                                    echo'<tr style="font-family: robotoregular;"> <th>Course Code</th> <th>Course Name</th> <th>Credits</th>  <th>Delete</th></tr>';

                                    while($row = $result->fetch_assoc()) {

                                        echo '<tr style="font-family: robotoregular;">';
                                        echo '<td>'.$row['course_code'].'</td>';
                                        echo '<td>'.$row['course_name'].'</td>';
                                        echo '<td>'.$row['credits'].'</td>';
                                        //echo '<td><button type="button" name="update" onclick="updateSub(this);" class="w3-btn w3-blue w3-round-xlarge" course_code='.$row['course_code'].' courseType="tsbca-i">Update</button></td>';
                                        echo '<td><button type="button" name="delete" onclick="deleteSub(this);" class="w3-btn w3-red  w3-round-xlarge" course_code='.$row['course_code'].' courseType="tsbca-i">Delete</button></td>';
                                        echo '</tr>';

                                    }
                                    echo"</table>";
                                }
                                else{
                                    echo'<p class="w3-text-red">No Core Elective Subject has been set ! </p>';
                                }
                                
                                
                                
                                //Electives
                                echo '<h4 style="font-family: robotoregular;">Elective Subjects</h4>';
                                $sql="SELECT bcasubjectlist.course_code,bcasubjectlist.course_name,bcasubjectlist.credits FROM bcasubjectlist INNER JOIN `tsbca-i` ON bcasubjectlist.course_code=`tsbca-i`.course_code WHERE bcasubjectlist.course_type=\"elective\" ORDER BY bcasubjectlist.course_code ";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {


                                    echo'<table  class="w3-table-all  w3-margin-bottom w3-margin-top">';
                                    echo'<tr style="font-family: robotoregular;"> <th>Course Code</th> <th>Course Name</th> <th>Credits</th>  <th>Delete</th></tr>';

                                    while($row = $result->fetch_assoc()) {

                                        echo '<tr style="font-family: robotoregular;">';
                                        echo '<td>'.$row['course_code'].'</td>';
                                        echo '<td>'.$row['course_name'].'</td>';
                                        echo '<td>'.$row['credits'].'</td>';
                                        //echo '<td><button type="button" name="update" onclick="updateSub(this);" class="w3-btn w3-blue w3-round-xlarge" course_code='.$row['course_code'].' courseType="tsbca-i">Update</button></td>';
                                        echo '<td><button type="button" name="delete" onclick="deleteSub(this);" class="w3-btn w3-red  w3-round-xlarge" course_code='.$row['course_code'].' courseType="tsbca-i">Delete</button></td>';
                                        echo '</tr>';

                                    }
                                    echo"</table>";
                                }
                                else{
                                    echo'<p class="w3-text-red">No Elective Subject has been set ! </p>';
                                }


                            }
                            else {
                                echo'<p class="w3-text-red">No Subject has been set ! </p>';
                            }
                            $conn->close();
                        ?>
                        
                    
                    <div>
                            
                            <button class="w3-btn w3-green w3-round-xlarge w3-margin" onclick="document.getElementById('adds1').style.display='block'">Add Subject</button>
                               
                                <!--Sem1-AddSubjects-->
                                <div id="adds1" class="w3-modal">
                                    <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-round-large">
                                      <header class="w3-container w3-green"> 
                                        <span onclick="document.getElementById('adds1').style.display='none'" 
                                        class="w3-button w3-display-topright">&times;</span>
                                        <h4>Add Subject Sem-5</h4>
                                      </header>
                                        <div class="w3-container">
                                        
                                            <select class="select" id="listsem5" onchange="fetchTSBCA1()" autocomplete="off">
                                                 <option selected disabled hidden >Select Course Type</option>
                                                <option value="tsbca1_core">Core Subjects</option>
                                                <option value="tsbca1_core_elective">Core Electives</option>    
                                                <option value="elective">Electives</option>                                            
                                            </select>
                                            <p id="tsbca1data"></p>
                                          
                                        </div>
                                        <footer class="w3-container w3-padding-24">
                                             <input type="button" onclick="addSub(this)" courseType="tsbca-i" class="w3-btn w3-round-xlarge w3-green" value="Add Subjects" />
                                        </footer>
                                        
                                    </div>
                                </div>
                                
                                
                            
                            
                        </div>
                    </div>
            </div>
            
            <script>
                function fetchTSBCA1()
                {
                    var s=document.getElementById("listsem5").value;
                    //alert(s);
                    var action="fetchtsbca1";
                    var xhttp;
                            if(window.XMLHttpRequest){
                                xhttp = new XMLHttpRequest();
                            }
                            else {
                                xhttp = new ActiveXObject(Microsoft.XMLHTTP);
                            }
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("tsbca1data").innerHTML = this.responseText;
                        }
                    };
                    xhttp.open("POST", "actions.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("ctype="+s+"&action="+action);
                }
                
                                                
                function addSub(el)
                {
                    var data=[];
                    $.each($("input[name='addCourse']:checked"),function(){
                       data.push($(this).val()); 
                    });
                    //alert(data.join(" , "));
                   
                    var obj=JSON.stringify(data);
                    var type=$(el).attr('courseType');
                    
                    var xhttp;
                            if(window.XMLHttpRequest){
                                xhttp = new XMLHttpRequest();
                            }
                            else {
                                xhttp = new ActiveXObject(Microsoft.XMLHTTP);
                            }
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            
                            location.reload();
                            
                        }
                    };
                    var action="add";
                    xhttp.open("POST", "actions.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("code="+obj+"&type="+type+"&action="+action);
                    
                }

                
                
                function deleteSub(el)
                {
                    var code = $(el).attr('course_code');
                    var type=$(el).attr('courseType');
                    var action="delete";
                    //alert(code+" "+type);
                    var xhttp;
                            if(window.XMLHttpRequest){
                                xhttp = new XMLHttpRequest();
                            }
                            else {
                                xhttp = new ActiveXObject(Microsoft.XMLHTTP);
                            }
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            location.reload(); 
                        }
                    };
                    xhttp.open("POST", "actions.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("code="+code+"&type="+type+"&action="+action);
                }
                
                function updateSub(el)
                {
                    var code = $(el).attr('course_code');
                    var type=$(el).attr('courseType');
                    var action="update";
                    //alert(code+" "+type);
                    var xhttp;
                            if(window.XMLHttpRequest){
                                xhttp = new XMLHttpRequest();
                            }
                            else {
                                xhttp = new ActiveXObject(Microsoft.XMLHTTP);
                            }
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            location.reload(); 
                        }
                    };
                    xhttp.open("POST", "actions.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("code="+code+"&type="+type+"&action="+action);
                }
            </script>

            <script>
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
            }
            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
            }
            
            
                
            
                function myFunction(id) {
                    var x = document.getElementById(id);
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                        x.previousElementSibling.className = 
                        x.previousElementSibling.className.replace("w3-white", "w3-blue");
                    } else { 
                        x.className = x.className.replace(" w3-show", "");
                        x.previousElementSibling.className = 
                        x.previousElementSibling.className.replace("w3-blue", "w3-white");
                    }
                }
    

            </script>
      
</body>
</html>
           