<?php
    include './checkSession.php';
    include './DBConnection.php';      
?>
<!DOCTYPE html>
<html>
    <title>Admin Dashboard</title>
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
         .circle{
             width: 70px;
             height: 70px;
             border-radius: 50%;
             color:white;
             padding:10px;
             box-shadow: #000;
             
            }    
            
    </style>
    
    <body style="background-color: #f5f5f5;">

            <div class="w3-sidebar w3-bar-block w3-collapse w3-card-4 w3-animate-left" style="width:280px;background-color: #fefefe;" id="mySidebar">
              
                <div class="w3-center">
                  <button class="w3-button w3-right w3-large w3-hide-large" onclick="w3_close()">&times;</button>
                  <img class="w3-image  w3-margin-top w3-centered" height="30%" width="30%" src="../images/hat.svg" alt="hat" />
                  <p class="w3-centered" style="font-family: robotobold;font-size: 20px;">Subject Selection</p>
                </div>
                <hr>
                <div class="w3-center" style="padding: 10px;">
                    
   
                        <a href="" class="w3-bar-item w3-button w3-hover-blue w3-round-medium w3-margin-bottom w3-blue w3-text-white" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;" ><i class="material-icons">dashboard</i>&nbsp;&nbsp; Dashboard</a>
                        <a href="AdminStudentForm.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-medium w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">assignment</i>&nbsp;&nbsp; Student's Form</a>
                        <a href="AdminSubjectDetails.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-medium w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">book</i>&nbsp;&nbsp; Subject Details</a>
                        <a href="Users.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-medium w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">person</i>&nbsp;&nbsp; Users</a>
                        <a href="batch.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-medium w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">group</i>&nbsp;&nbsp; Batch</a>
                        <a href="TableList.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-medium w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">content_paste</i>&nbsp;&nbsp; Table List</a>
                        <hr>
                        <a href="logout.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-medium w3-margin-top w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;float:bottom;"><i class="material-icons">sentiment_satisfied</i>&nbsp;&nbsp; Logout</a>
                    
                    
                </div>
            </div>
            
            
            <div class="w3-main w3-mobile" style="margin-left:300px">
                
                <div>
                  <button class="w3-button w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
                  <div class="w3-container">
                      <h3 style="font-family: robotoregular;color: darkslategray">Admin Dashboard</h3>
                  </div>
                </div>
                
                <!-- Forms Submitted -->
                <div class="w3-row  w3-padding-24 " >
                    
                    <!-- BCA -->
                    <div class="w3-half w3-card-4 w3-margin  w3-white w3-center" style="max-width: 45%;" >
                        
                        <div class="w3-container w3-responsive">
                            <h4 style="font-family: robotolight;color: darkslategray">Forms Submitted -  BCA</h4>
                            <hr/>
                            
                        </div>
                        <div style="margin-left: 6%;">
                            
                            <!-- FY -->
                            <div class="w3-row">
                                <div class="w3-quarter w3-margin w3-container w3-card-4 circle" style="background-color: #59b15d;">
                                    <h4>F.Y</h4>
                                </div>
                                <div class="w3-threequarter w3-container w3-left-align">
                                    <h5 style="font-family: robotoregular;color: darkslategray">
                                        
                                        <?php
                                        
                                            $y=date('Y');
                                            $exists = mysqli_query($conn,"select 1 from fybca".$y);
        
                                            if($exists!== FALSE)
                                            {
                                                $result = mysqli_query($conn,"SELECT * FROM fybca".date('Y')." WHERE formsubmit IN(1,2)");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                            else
                                            {
                                                $y=date('Y')-1;
                                                $result = mysqli_query($conn,"SELECT * FROM fybca".$y." WHERE formsubmit IN(1,2)");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                        ?> Students
                                                                      
                                    </h5>
                                    <a href="AdminStudentForm.php" class="w3-button w3-light-gray w3-small w3-round-medium" style="font-family: robotolight;color: darkslategray">View Data</a>
                                </div>
            
                            </div>
                            
                            <!--SYBCA -->
                            <div class="w3-row">
                                <div class="w3-quarter w3-margin w3-container w3-card-4 circle" style="background-color: #ea4642;">
                                    <h4>S.Y</h4>
                                </div>
                                <div class="w3-threequarter w3-container w3-left-align">
                                    <h5 style="font-family: robotoregular;color: darkslategray">
                                    
                                    <?php
                                        
                                            $y=date('Y');
                                            $exists = mysqli_query($conn,"select 1 from sybca".$y);
        
                                            if($exists!== FALSE)
                                            {
                                                $result = mysqli_query($conn,"SELECT * FROM sybca".date('Y')." WHERE formsubmit IN(3,4)");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                            else
                                            {
                                                $y=date('Y')-1;
                                                $result = mysqli_query($conn,"SELECT * FROM sybca".$y." WHERE formsubmit IN(3,4)");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                        ?> Students
                                    
                                    </h5>
                                    <a href="AdminStudentForm.php" class="w3-button w3-light-gray w3-small w3-round-medium" style="font-family: robotolight;color: darkslategray">View Data</a>
                                </div>
                                          
                            </div>
                            
                            <!--TYBCA-->
                             <div class="w3-row w3-margin-bottom">
                                <div class="w3-quarter w3-margin w3-container w3-card-4 circle" style="background-color: #18bcd1;">
                                    <h4>T.Y</h4>
                                </div>
                                <div class="w3-threequarter w3-container w3-left-align">
                                    <h5 style="font-family: robotoregular;color: darkslategray">
                                    
                                    <?php
                                        
                                            $y=date('Y');
                                            $exists = mysqli_query($conn,"select 1 from tybca".$y);
        
                                            if($exists!== FALSE)
                                            {
                                                $result = mysqli_query($conn,"SELECT * FROM tybca".date('Y')." WHERE formsubmit IN(5)");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                            else
                                            {
                                                $y=date('Y')-1;
                                                $result = mysqli_query($conn,"SELECT * FROM tybca".$y." WHERE formsubmit IN(5)");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                        ?> Students
                                    </h5>
                                    <a href="AdminStudentForm.php" class="w3-button w3-light-gray w3-small w3-round-medium" style="font-family: robotolight;color: darkslategray">View Data</a>
                                </div>
                                          
                            </div>
                        </div>
                        
                    </div>
                    <!-- MSCIT -->
                    <div class="w3-half   w3-card-4 w3-margin  w3-white w3-center" style="max-width: 45%" >
                        
                        <div class="w3-container">
                            <h4 style="font-family: robotolight;color: darkslategray">Forms Submitted -  Msc.IT</h4>
                            <hr/>
                            
                        </div>
                        
                        <!--FYMSC-->
                        <div class="w3-margin-left">
                            
                            <div class="w3-row">
                                <div class="w3-quarter w3-margin w3-container w3-card-4 circle" style="background-color: #59b15d;">
                                    <h4>F.Y</h4>
                                </div>
                                <div class="w3-threequarter w3-container w3-left-align">
                                    <h5 style="font-family: robotoregular;color: darkslategray">
                                        
                                        <?php
                                        
                                            $y=date('Y');
                                            $exists = mysqli_query($conn,"select 1 from fymsc".$y);
        
                                            if($exists!== FALSE)
                                            {
                                                $result = mysqli_query($conn,"SELECT * FROM fymsc".date('Y')." WHERE formsubmit IN(1,2)");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                            else
                                            {
                                                $y=date('Y')-1;
                                                $result = mysqli_query($conn,"SELECT * FROM fymsc".$y." WHERE formsubmit IN(1,2)");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                        ?> Students
                                        
                                    </h5>
                                    <a href="AdminStudentForm.php" class="w3-button w3-light-gray w3-small w3-round-medium" style="font-family: robotolight;color: darkslategray">View Data</a>
                                </div>
            
                            </div>
                                                                   
                            
                            <!--SYMSC-->
                             <div class="w3-row w3-margin-bottom">
                                <div class="w3-quarter w3-margin w3-container w3-card-4 circle" style="background-color: #18bcd1;">
                                    <h4>S.Y</h4>
                                </div>
                                <div class="w3-threequarter w3-container w3-left-align">
                                    <h5 style="font-family: robotoregular;color: darkslategray">
                                        
                                        <?php
                                        
                                            $y=date('Y');
                                            $exists = mysqli_query($conn,"select 1 from symsc".$y);
        
                                            if($exists!== FALSE)
                                            {
                                                $result = mysqli_query($conn,"SELECT * FROM symsc".date('Y')." WHERE formsubmit IN(3,4)");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                            else
                                            {
                                                $y=date('Y')-1;
                                                $result = mysqli_query($conn,"SELECT * FROM symsc".$y." WHERE formsubmit IN(3,4)");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                        ?> Students
                                        
                                    </h5>
                                    <a href="AdminStudentForm.php" class="w3-button w3-light-gray w3-small w3-round-medium" style="font-family: robotolight;color: darkslategray">View Data</a>
                                </div>
                                          
                            </div>
                            </div>
                        </div>
                        
                        
                    </div>
                
                
    <!--New Users -->
                    <div class="w3-row  w3-padding-24" >
                    
                    <!-- BCA -->
                    <div class="w3-half w3-container  w3-card-4 w3-margin w3-white w3-center" style="max-width: 45%" >
                        
                        <div class="w3-container">
                            <h4 style="font-family: robotolight;color: darkslategray">New Users - BCA</h4>
                            <hr/>   
                        </div>
                        
              <!--FYBCA-->
                        <div class="w3-row  w3-margin-left">
                            
                            <div class="w3-third w3-center">
                                <div class="w3-container w3-card-4 circle w3-margin" style="background-color: #59b15d;">
                                    <h4>F.Y</h4>
                                </div>
                                <div class=" w3-container w3-left-align ">
                                    <h5 style="font-family: robotoregular;color: darkslategray">
                                        
                                        <?php
                                        
                                            $y=date('Y');
                                            $exists = mysqli_query($conn,"select 1 from fybca".$y);
        
                                            if($exists!== FALSE)
                                            {
                                                $result = mysqli_query($conn,"SELECT * FROM fybca".date('Y')." WHERE verified=1");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                            else
                                            {
                                                $y=date('Y')-1;
                                                $result = mysqli_query($conn,"SELECT * FROM fybca".$y." WHERE verified=1");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                        ?> Students
                                        
                                    </h5>
                                    <a href="newUsers.php#fybca" class="w3-button w3-light-gray w3-small w3-round-medium" style="font-family: robotolight;color: darkslategray">View Data</a>
                                </div>
            
                            </div>
                            
              <!--SYBCA-->
                            <div class="w3-third w3-center">
                                <div class="w3-margin w3-container w3-card-4 circle" style="background-color: #ea4642;">
                                    <h4>S.Y</h4>
                                </div>
                                <div class="w3-container w3-left-align">
                                    <h5 style="font-family: robotoregular;color: darkslategray">
                                        
                                        <?php
                                        
                                            $y=date('Y');
                                            $exists = mysqli_query($conn,"select 1 from sybca".$y);
        
                                            if($exists!== FALSE)
                                            {
                                                $result = mysqli_query($conn,"SELECT * FROM sybca".date('Y')." WHERE verified=1");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                            else
                                            {
                                                $y=date('Y')-1;
                                                $result = mysqli_query($conn,"SELECT * FROM sybca".$y." WHERE verified=1");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                        ?> Students
                                        
                                    </h5>
                                    <a href="newUsers.php#sybca" class="w3-button w3-light-gray w3-small w3-round-medium" style="font-family: robotolight;color: darkslategray">View Data</a>
                                </div>
                                          
                            </div>
                            
            <!--TYBCA-->
                             <div class="w3-third w3-margin-bottom w3-center">
                                <div class=" w3-margin w3-container w3-card-4 circle" style="background-color: #18bcd1;">
                                    <h4>T.Y</h4>
                                </div>
                                <div class="w3-container w3-left-align">
                                    <h5 style="font-family: robotoregular;color: darkslategray">
                                        
                                        <?php
                                        
                                            $y=date('Y');
                                            $exists = mysqli_query($conn,"select 1 from tybca".$y);
        
                                            if($exists!== FALSE)
                                            {
                                                $result = mysqli_query($conn,"SELECT * FROM tybca".date('Y')." WHERE verified=1");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                            else
                                            {
                                                $y=date('Y')-1;
                                                $result = mysqli_query($conn,"SELECT * FROM tybca".$y." WHERE verified=1");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                        ?> Students
                                        
                                    </h5>
                                    <a href="newUsers.php#tybca" class="w3-button w3-light-gray w3-small w3-round-medium" style="font-family: robotolight;color: darkslategray">View Data</a>
                                </div>
                                          
                            </div>
                        </div>
                        
                    </div>
                    
     <!-- MSCIT -->
                    
                    <div class="w3-half w3-container  w3-card-4 w3-margin  w3-white w3-center" style="max-width: 45%" >
                        
                        <div class="w3-container">
                            <h4 style="font-family: robotolight;color: darkslategray">New Users - Msc.IT</h4>
                            <hr/>   
                        </div>
                        
         <!--FYMSC-->
                        <div class="w3-row  w3-margin">
                            
                            <div class="w3-half w3-center w3-padding">
                                <div class="w3-container w3-card-4 circle" style="background-color: #59b15d;margin-left:32%;">
                                    <h4>F.Y</h4>
                                </div>
                                <div class=" w3-container w3-center ">
                                    <h5 style="font-family: robotoregular;color: darkslategray">
                                        
                                        <?php
                                        
                                            $y=date('Y');
                                            $exists = mysqli_query($conn,"select 1 from fymsc".$y);
        
                                            if($exists!== FALSE)
                                            {
                                                $result = mysqli_query($conn,"SELECT * FROM fymsc".date('Y')." WHERE verified=1");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                            else
                                            {
                                                $y=date('Y')-1;
                                                $result = mysqli_query($conn,"SELECT * FROM fymsc".$y." WHERE verified=1");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                        ?> Students
                                        
                                    </h5>
                                    <a href="newUsers.php#fymsc" class="w3-button w3-light-gray w3-small w3-round-medium" style="font-family: robotolight;color: darkslategray">View Data</a>
                                </div>
            
                            </div>
                            
        <!--SYMSC-->
                            <div class="w3-half w3-center w3-padding">
                                <div class="w3-container w3-card-4 circle" style="background-color: #ea4642;margin-left:32%;">
                                    <h4>S.Y</h4>
                                </div>
                                <div class="w3-container w3-center ">
                                    <h5 style="font-family: robotoregular;color: darkslategray">
                                        
                                        <?php
                                        
                                            $y=date('Y');
                                            $exists = mysqli_query($conn,"select 1 from symsc".$y);
        
                                            if($exists!== FALSE)
                                            {
                                                $result = mysqli_query($conn,"SELECT * FROM symsc".date('Y')." WHERE verified=1");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                            else
                                            {
                                                $y=date('Y')-1;
                                                $result = mysqli_query($conn,"SELECT * FROM symsc".$y." WHERE verified=1");
                                                $rows= mysqli_num_rows($result);
                                                echo $rows;
                                            }
                                        ?> Students
                                        
                                    </h5>
                                    <a href="newUsers.php#symsc" class="w3-button w3-light-gray w3-small w3-round-medium" style="font-family: robotolight;color: darkslategray">View Data</a>
                                </div>
                                          
                            </div>
                                                                      
                         
                        </div>
                        
                    </div>
                    
                 </div>
                        
                        
                    
                    
                </div>

            </div>

            <?php
                $conn->close();
            ?>
            
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



