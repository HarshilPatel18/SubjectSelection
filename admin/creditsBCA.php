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
                      <h3 style="font-family: robotoregular;color: darkslategray">BCA Credits</h3>
                  </div>
                </div>
                <p id="alrt" style="display: none;" class="w3-white w3-center w3-text-green w3-border w3-border-green w3-round-xlarge" style="max-width:50%;"></p>
               
                <div class="w3-row  w3-padding-24 w3-mobile" >
                    
            <!-- BCA -->
                    <div class="w3-container  w3-card-4 w3-margin w3-white w3-center"  >
                        
                        <div class="w3-container">
                            <h4 style="font-family: robotolight;color: darkslategray">Credits - BCA</h4>
                            <hr/>   
                        </div>
                        
                        <?php
                            include './DBConnection.php';
                            
                            
                        ?>
                        <div class="w3-row w3-responsive w3-margin-left">
                        <!--FYBCA-->    
                            <div class="w3-third w3-center">
                                <div class="w3-container w3-card-4 w3-center w3-text-green w3-border  w3-margin w3-padding-16">
                                    <p class="w3-card-4 w3-green w3-text-white w3-round-xlarge w3-padding">F.Y</p>
                                    
                                    <div class="w3-center w3-container"><h4>Semester 1</h4></div>
                                    <hr>
                                    <div class="w3-container w3-center">
                                        <?php
                                            $sql="SELECT `bcasubjectlist`.credits FROM `bcasubjectlist` WHERE course_code='fsbca1L'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                               $row = $result->fetch_assoc();
                                              
                                        ?>
                                            <input type="text" id="fsbca1L" value="<?php echo $row['credits'];}?>" class="w3-input w3-center w3-light-gray w3-border w3-margin w3-round-xlarge" style="font-family: robotolight;color: darkslategray;max-width: 90%;align-self: center;" />
                                        <button type="submit" onclick="setCredits('fsbca1L')" class="w3-btn w3-border w3-border-green w3-round-xlarge">Set Min Credits</button>
                                    </div>
                                    <div class="w3-container w3-center">
                                        <?php
                                            $sql="SELECT `bcasubjectlist`.credits FROM `bcasubjectlist` WHERE course_code='fsbca1H'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                               $row = $result->fetch_assoc();
                                              
                                        ?>
                                        <input type="text" id="fsbca1H" value="<?php echo $row['credits'];}?>" class="w3-input w3-center w3-light-gray w3-border w3-margin w3-round-xlarge" style="font-family: robotolight;color: darkslategray;max-width: 90%;align-self: center;" />
                                        <button type="submit" onclick="setCredits('fsbca1H')" class="w3-btn w3-border w3-border-green w3-round-xlarge">Set Max Credits</button>
                                    </div>
                                    <hr><hr>
                                    
                                    <div class="w3-center w3-container"><h4>Semester 2</h4></div>
                                    <hr>
                                    <div class="w3-container w3-center">
                                        <?php
                                            $sql="SELECT `bcasubjectlist`.credits FROM `bcasubjectlist` WHERE course_code='fsbca2L'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                               $row = $result->fetch_assoc();
                                              
                                        ?>
                                        <input type="text" id="fsbca2L" value="<?php echo $row['credits'];}?>" class="w3-input w3-center w3-light-gray w3-border w3-margin w3-round-xlarge" style="font-family: robotolight;color: darkslategray;max-width: 90%;align-self: center;" />
                                        <button type="submit" onclick="setCredits('fsbca2L')" class="w3-btn w3-border w3-border-green w3-round-xlarge">Set Min Credits</button>
                                    </div>
                                    <div class="w3-container w3-center">
                                        <?php
                                            $sql="SELECT `bcasubjectlist`.credits FROM `bcasubjectlist` WHERE course_code='fsbca2H'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                               $row = $result->fetch_assoc();
                                              
                                        ?>
                                        <input type="text" id="fsbca2H" value="<?php echo $row['credits'];}?>" class="w3-input w3-center w3-light-gray w3-border w3-margin w3-round-xlarge" style="font-family: robotolight;color: darkslategray;max-width: 90%;align-self: center;" />
                                        <button type="submit" onclick="setCredits('fsbca2H')" class="w3-btn w3-border w3-border-green w3-round-xlarge">Set Max Credits</button>
                                    </div>
                                    
                                    
                                </div>  
                            </div>
                        
                        <!--SYBCA-->    
                            <div class="w3-third w3-center">
                                <div class="w3-container w3-card-4  w3-text-red w3-border  w3-margin w3-padding-16">
                                    <p class="w3-card-4 w3-red w3-text-white w3-round-xlarge w3-padding">S.Y</p>
                                    <div class="w3-center w3-container"><h4>Semester 3</h4></div>
                                    <hr>
                                    <div class="w3-container w3-center">
                                        <?php
                                            $sql="SELECT `bcasubjectlist`.credits FROM `bcasubjectlist` WHERE course_code='ssbca1L'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                               $row = $result->fetch_assoc();
                                              
                                        ?>
                                        <input type="text" id="ssbca1L" value="<?php echo $row['credits'];}?>" class="w3-input w3-center w3-light-gray w3-border w3-margin w3-round-xlarge" style="font-family: robotolight;color: darkslategray;max-width: 90%;align-self: center;" />
                                        <button type="submit" onclick="setCredits('ssbca1L')" class="w3-btn w3-border w3-border-red w3-round-xlarge">Set Min Credits</button>
                                    </div>
                                    <div class="w3-container w3-center">
                                        <?php
                                            $sql="SELECT `bcasubjectlist`.credits FROM `bcasubjectlist` WHERE course_code='ssbca1H'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                               $row = $result->fetch_assoc();
                                              
                                        ?>
                                        <input type="text" id="ssbca1H" value="<?php echo $row['credits'];}?>" class="w3-input w3-center w3-light-gray w3-border w3-margin w3-round-xlarge" style="font-family: robotolight;color: darkslategray;max-width: 90%;align-self: center;" />
                                        <button type="submit" onclick="setCredits('ssbca1H')" class="w3-btn w3-border w3-border-red w3-round-xlarge">Set Max Credits</button>
                                    </div>
                                    <hr><hr>
                                    
                                    <div class="w3-center w3-container"><h4>Semester 4</h4></div>
                                    <hr>
                                    <div class="w3-container w3-center">
                                        <?php
                                            $sql="SELECT `bcasubjectlist`.credits FROM `bcasubjectlist` WHERE course_code='ssbca2L'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                               $row = $result->fetch_assoc();
                                              
                                        ?>
                                        <input type="text" id="ssbca2L" value="<?php echo $row['credits'];}?>" class="w3-input w3-center w3-light-gray w3-border w3-margin w3-round-xlarge" style="font-family: robotolight;color: darkslategray;max-width: 90%;align-self: center;" />
                                        <button type="submit" onclick="setCredits('ssbca2L')" class="w3-btn w3-border w3-border-red w3-round-xlarge">Set Min Credits</button>
                                    </div>
                                    <div class="w3-container w3-center">
                                        <?php
                                            $sql="SELECT `bcasubjectlist`.credits FROM `bcasubjectlist` WHERE course_code='ssbca2H'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                               $row = $result->fetch_assoc();
                                              
                                        ?>
                                        <input type="text" id="ssbca2H" value="<?php echo $row['credits'];}?>" class="w3-input w3-center w3-light-gray w3-border w3-margin w3-round-xlarge" style="font-family: robotolight;color: darkslategray;max-width: 90%;align-self: center;" />
                                        <button type="submit" onclick="setCredits('ssbca2H')" class="w3-btn w3-border w3-border-red w3-round-xlarge">Set Max Credits</button>
                                    </div>
                                </div>  
                            </div>
                        
                        <!--TYBCA-->    
                            <div class="w3-third w3-center">
                                <div class="w3-container w3-card-4  w3-text-light-blue w3-border  w3-margin w3-padding-16">
                                    <p class="w3-card-4 w3-blue w3-text-white w3-round-xlarge w3-padding">T.Y</p>
                                    <div class="w3-center w3-container"><h4>Semester 5</h4></div>
                                    <hr>
                                    <div class="w3-container w3-center">
                                        <?php
                                            $sql="SELECT `bcasubjectlist`.credits FROM `bcasubjectlist` WHERE course_code='tsbca1L'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                               $row = $result->fetch_assoc();
                                              
                                        ?>
                                        <input type="text" id="tsbca1L" value="<?php echo $row['credits'];}?>" class="w3-input w3-center w3-light-gray w3-border w3-margin w3-round-xlarge" style="font-family: robotolight;color: darkslategray;max-width: 90%;align-self: center;" />
                                        <button type="submit" onclick="setCredits('tsbca1L')" class="w3-btn w3-border w3-border-blue w3-round-xlarge">Set Min Credits</button>
                                    </div>
                                    <div class="w3-container w3-center">
                                        <?php
                                            $sql="SELECT `bcasubjectlist`.credits FROM `bcasubjectlist` WHERE course_code='tsbca1H'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                               $row = $result->fetch_assoc();
                                              
                                        ?>
                                        <input type="text" id="tsbca1H" value="<?php echo $row['credits'];}?>" class="w3-input w3-center w3-light-gray w3-border w3-margin w3-round-xlarge" style="font-family: robotolight;color: darkslategray;max-width: 90%;align-self: center;" />
                                        <button type="submit" onclick="setCredits('tsbca1H')" class="w3-btn w3-border w3-border-blue w3-round-xlarge">Set Max Credits</button>
                                    </div>
                                    
                                    
                                </div>  
                            </div>
            
                            
                        </div>
                    </div>
                </div>   
                
                <?php $conn->close(); ?>
            </div>
            
                
            <script>                   
                function setCredits(id)
                {
                    var credits=document.getElementById(id).value;
                    var name=id;
                    var action="setCredits";
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
                            alert("Credits Updated!");
                            location.reload();
                        }
                    };
                    xhttp.open("POST", "actions.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("credits="+credits+"&name="+id+"&action="+action);
                    
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
           