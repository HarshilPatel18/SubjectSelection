<?php   include './checkSession.php'; ?>
<!DOCTYPE html>
<html>
    <title>FYBCA - Subject Details</title>
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
    
    <body style="background-color: #f5f5f5;">
            
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
                      <h3 style="font-family: robotoregular;color: darkslategray">BCA Course List </h3>
                  </div>
                </div>
                <p id="alrt" style="display: none;" class="w3-white w3-center w3-text-green w3-border w3-border-green w3-round-xlarge" style="max-width:50%;"></p>
               <!--Sem1-->
               
                <div id="Demo1" class="w3-center w3-container">
                    
                        <?php
                            include '../DBConnection.php';
                            $sql="SELECT * FROM `bcasubjectlist` WHERE course_type<>''";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                echo '<h4 style="font-family: robotoregular;color: darkslategray">Subject Details </h4>';
                                echo'<table  class="w3-table-all  w3-margin-bottom w3-margin-top">';
                                echo'<tr style="font-family: robotoregular;"> <th>Course Code</th> <th>Course Name</th> <th>Credits</th> <th>Delete</th></tr>';

                                while($row = $result->fetch_assoc()) {

                                    echo '<tr style="font-family: robotoregular;">';
                                    echo '<td>'.$row['course_code'].'</td>';
                                    echo '<td>'.$row['course_name'].'</td>';
                                    echo '<td>'.$row['credits'].'</td>';
                                    echo '<td><button type="button" name="delete" onclick="deleteSub(this);" class="w3-btn w3-red  w3-round-xxlarge" course_code='.$row['course_code'].'>Delete</button></td>';
                                    echo '</tr>';
                                }
                                echo '</table>';
                            }
                            else {
                                echo'<p class="w3-text-red">No Subject available ! </p>';
                            }
                            $conn->close();
                        ?>
                </div>
                
               
                <div id="divadd" class="w3-row-padding w3-container w3-center" style="display: none;margin-top:4%;">
                    <form>  
                    <div class="w3-third w3-padding">
                          <input class="w3-input w3-border" id="code" placeholder="Course Code" type="text" maxlength="8" required>
                      </div>
                      <div class="w3-third w3-padding">
                        <input class="w3-input w3-border" id="cname" placeholder="Course Name" type="text" maxlength="25" required>
                      </div>
                      <div class="w3-third w3-padding">
                          <input class="w3-input w3-border" id="credits" placeholder="Credits" type="text" pattern="[0-9]{1}" maxlength="1" required>
                      </div>
                    <div>
                        <select class="w3-select w3-border w3-margin-top" id="coursetype" autocomplete="off" required="">
                            <option selected disabled hidden ><p class="w3-small w3-text-white">Select Course Type here</p></option>
                            <option value="elective">Elective</option>
                            <option value="fsbca1_core">FSBCA 1 Core</option>
                            <option value="fsbca2_core">FSBCA 2 Core</option>
                            <option value="ssbca1_core">SSBCA 1 Core</option>
                            <option value="ssbca2_core">SSBCA 2 Core</option>
                            <option value="ssbca1_core_elective">SSBCA 1 Core Elective</option>
                            <option value="ssbca2_core_elective">SSBCA 2 Core Elective</option>
                            <option value="tsbca1_core">TSBCA 1 Core</option>
                            <option value="tsbca1_core_elective">TSBCA 1 Core Elective</option>
                        </select>
                        <input onclick="addSub()" class="w3-btn w3-round-xlarge w3-border w3-border-blue w3-margin" type="submit" name="add" value="Submit Course Details"/>
                    </div>
                    </form>
                    
                </div>
               
                <div class="w3-container w3-center w3-padding-24 w3-margin-top">
                    <input class="w3-btn w3-round-xlarge w3-green" type="button" onclick="document.getElementById('divadd').style.display='block';"  value="Add Subjects" />
                </div>
            </div>
            <script>
                
                                
                function addSub()
                {
                    var code=document.getElementById('code').value;
                    var name=document.getElementById('cname').value;
                    var credits=document.getElementById('credits').value;
                    var ctype=document.getElementById('coursetype').value;
                    var action="addBCA";
                    //alert("a");
                    var xhttp;
                            if(window.XMLHttpRequest){
                                xhttp = new XMLHttpRequest();
                            }
                            else {
                                xhttp = new ActiveXObject(Microsoft.XMLHTTP);
                            }
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            //alert("a");
                            document.getElementById('alrt').innerHTML=this.responseText;
                            
                        }
                    };
                    xhttp.open("POST", "actions.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("code="+code+"&cname="+name+"&credits="+credits+"&ctype="+ctype+"&action="+action);
                    
                }
                
                
                function deleteSub(el)
                {
                    var code = $(el).attr('course_code');
                    var action="deleteBCA";
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
                    xhttp.send("code="+code+"&action="+action);
                }
                
                
            </script>

            <script>
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
            }
            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
            }
            </script>
      
</body>
</html>
           