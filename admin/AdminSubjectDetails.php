<?php   include './checkSession.php'; ?>
<!DOCTYPE html>
<html>
    <title>Subject Details</title>
    <link rel="icon" href="../images/hat.svg" type="image/icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/materialfonts.css">
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
    </style>
   
    
    <body style="background-color: #f5f5f5;">

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
                    <a href="" class="w3-bar-item w3-button w3-hover-blue w3-round-large w3-margin-bottom w3-blue w3-text-white" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">book</i>&nbsp;&nbsp; Subject Details</a>
                    <a href="Users.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-large w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">person</i>&nbsp;&nbsp; Users</a>
                    <a href="batch.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-large w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">group</i>&nbsp;&nbsp; Batch</a>
                    <a href="TableList.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-large w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">content_paste</i>&nbsp;&nbsp; Table List</a>
                    <hr>
                        <a href="logout.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-medium w3-margin-top w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;float:bottom;"><i class="material-icons">sentiment_satisfied</i>&nbsp;&nbsp; Logout</a>    
                        
                    
                    
                </div>
            </div>
                   
        
            

            <div class="w3-main" style="margin-left:300px">
                
                <div>
                  <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
                  <div class="w3-container">
                      <h3 style="font-family: robotoregular;color: darkslategray">Subject Details</h3>
                  </div>
                </div>
                
                              
                <!--BCA View-->
                
                
                <div class="w3-container w3-center w3-mobile">
                    
                    <div class="w3-container w3-margin">
                        <h3 style="font-family: robotolight;color: darkslategray">BCA - Current Year Subjects</h3>

                        <div class="w3-card-4 w3-white w3-padding-16 w3-center w3-margin-top " style="width:70%;margin-left: 15%;">

                            <!--FYBCA-->
                            <div class="w3-row  w3-margin">

                                <div class="w3-third w3-center">
                                    <a href="editSubjectsFYBCA.php" class="w3-card w3-margin w3-btn w3-round-xlarge" style="width: 75%;  background-color: #59b15d;color:white;">
                                        <h4>F.Y</h4>
                                    </a>                                           
                                </div>

                                <!--SYBCA-->
                                <div class="w3-third w3-center">
                                    <a href="editSubjectsSYBCA.php" class="w3-card w3-margin w3-btn w3-round-xlarge" style="width: 75%;background-color: #ea4642;color:white;">
                                        <h4>S.Y</h4>
                                    </a>                                                                        
                                </div>

                                <!--TYBCA-->
                                 <div class="w3-third w3-center">
                                    <a href="editSubjectsTYBCA.php" class=" w3-card w3-margin w3-btn w3-round-xlarge" style="width: 75%;background-color: #18bcd1;color:white;">
                                        <h4>T.Y</h4>
                                    </a>                                         
                                </div>
                            </div>

                        </div>
                    </div>  
                    
                   
                    <!--MSC View-->
                    <div class="w3-container w3-margin">
                        <h3 style="font-family: robotolight;color: darkslategray">MSC.IT - Current Year Subjects</h3>

                        <div class="w3-card-4 w3-white w3-padding-16 w3-center w3-margin-top" style="width:70%;margin-left: 15%;">

                            <!--FYMSC-->
                            <div class="w3-row w3-margin">

                                <div class="w3-half w3-center">
                                    <a href="editSubjectsFYMSC.php" class="w3-card w3-margin w3-btn w3-round-xlarge" style="width: 75%;  background-color: #59b15d;color:white;">
                                        <h4>F.Y</h4>
                                    </a>                                           
                                </div>

                                <!--SYMSC-->
                                <div class="w3-half w3-center">
                                    <a href="editSubjectsSYMSC.php" class="w3-card w3-margin w3-btn w3-round-xlarge" style="width: 75%;background-color: #ea4642;color:white;">
                                        <h4>S.Y</h4>
                                    </a>                                                                        
                                </div>
                            </div>        
                        </div>        
                    </div>    
                  </div>
                    
                
               <!--ManageCourseMaster -->
                <div class="w3-container w3-margin w3-center">
                        <h3 style="font-family: robotolight;color: darkslategray">Manage Course Lists</h3>

                        <div class="w3-card-4 w3-white w3-padding-16 w3-center w3-margin-top" style="width:70%;margin-left: 15%;">

                            <!--BCA-->
                            <div class="w3-row w3-margin">

                                <div class="w3-half w3-center">
                                    <a href="bcacourselist.php" class="w3-card w3-margin w3-btn w3-round-xlarge" style="width: 75%;  background-color: #59b15d;color:white;">
                                        <h4>BCA Course List</h4>
                                    </a>                                           
                                </div>

                                <!--MSC-->
                                <div class="w3-half w3-center">
                                    <a href="msccourselist.php" class="w3-card w3-margin w3-btn w3-round-xlarge" style="width: 75%;background-color: #ea4642;color:white;">
                                        <h4>MSC Course List</h4>
                                    </a>                                                                        
                                </div>
                            </div>        
                        </div>        
                </div>  
               
               
               <!--ManageCourseMaster -->
                <div class="w3-container w3-margin w3-center">
                        <h3 style="font-family: robotolight;color: darkslategray">Set Credits</h3>

                        <div class="w3-card-4 w3-white w3-padding-16 w3-center w3-margin-top" style="width:70%;margin-left: 15%;">

                            <!--BCA-->
                            <div class="w3-row w3-margin">

                                <div class="w3-half w3-center">
                                    <a href="creditsBCA.php" class="w3-card w3-margin w3-btn w3-round-xlarge" style="width: 75%;  background-color: #59b15d;color:white;">
                                        <h4>BCA</h4>
                                    </a>                                           
                                </div>

                                <!--MSC-->
                                <div class="w3-half w3-center">
                                    <a href="" class="w3-card w3-margin w3-btn w3-round-xlarge" style="width: 75%;background-color: #ea4642;color:white;">
                                        <h4>MSC</h4>
                                    </a>                                                                        
                                </div>
                            </div>        
                        </div>        
                </div>  
               
        
        
        
        
            </div>

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



