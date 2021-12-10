<?php   include './checkSession.php'; ?>
<!DOCTYPE html>
<html>
    <title>Users</title>
    <link rel="icon" href="../images/hat.svg" type="image/icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery3.0.1.min.js"></script>
    
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
                    <a href="AdminSubjectDetails.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-large w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">book</i>&nbsp;&nbsp; Subject Details</a>
                    <a href="Users.php" class="w3-bar-item w3-button w3-hover-blue w3-round-large w3-margin-bottom w3-blue w3-text-white" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">person</i>&nbsp;&nbsp; Users</a>
                    <a href="batch.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-large w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">group</i>&nbsp;&nbsp; Batch</a>
                    <a href="TableList.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-large w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">content_paste</i>&nbsp;&nbsp; Table List</a>
                    <hr>
                        <a href="logout.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-medium w3-margin-top w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;float:bottom;"><i class="material-icons">sentiment_satisfied</i>&nbsp;&nbsp; Logout</a>    
                        
                    
                    
                </div>
            </div>
            

            <div class="w3-main w3-container" style="margin-left:300px">
                <p><span id="txtHint"></span></p> 
                <div>
                  <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
                </div>
                
            <div class="w3-container w3-responsive w3-mobile w3-white">    
                <div class="w3-container w3-blue">
                    <h3 style="font-family: robotoregular;">Add User</h3>
                </div>
                <form class="w3-container w3-padding-16" action="validateAddUser.php" method="POST" style="margin-left: 4%;">
                    
                    <?php 
                        if(isset($_REQUEST['data']))
                        {
                            if($_REQUEST['data']=="added"){
                                echo "<p class=\"w3-white w3-center w3-text-green w3-border w3-border-green w3-round-xlarge\" style=\"max-width:50%;\"> New User Added</p>";
                            }
                            else{
                                echo "<p class=\"w3-white w3-center w3-text-red w3-border w3-border-red w3-round-xlarge\" style=\"max-width:50%;\"> Error Adding User !</p>";
                            }
                        }
                    ?>
                    <p>
                    <label class="w3-text-grey">Select User Type</label>
                    <select class="w3-select w3-margin-top" id="userType" name="userType" autocomplete="off">
                        <option selected disabled hidden ><p class="w3-small w3-text-white">Select here</p></option>
                        <option value="admin">Administrator</option>
                        <option value="faculty">Faculty</option>
                    </select></p>
                    <p>
                    <label class="w3-text-grey">User ID</label>
                    <input class="w3-input" name="userid" value="" type="text" required maxlength="10" onfocus="document.getElementById('alrt').innerHTML=' ';"></p>
                    <p>
                    <label class="w3-text-grey">Full Name</label>
                    <input class="w3-input" name="fname" value="" type="text" required onfocus="document.getElementById('alrt').innerHTML=' ';"></p>
                    <p>
                    <label class="w3-text-grey">Password</label>
                    <input class="w3-input" name="pwd" value="" type="text" id="pw" required minlength="6" onfocus="document.getElementById('alrt').innerHTML=' ';"></p>
                    <p>
                    <br/>
                    <p>
                    <input class="w3-btn w3-round-large w3-blue" name="add" type="submit" value="Add User"></p>
                    
                    
                    
                </form>
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



