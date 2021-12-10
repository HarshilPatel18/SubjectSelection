<?php   include './checkSession.php'; ?>
<!DOCTYPE html>
<html>
    <title>Edit Profile</title>
    <link rel="icon" href="images/hat.svg" type="image/icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/materialfonts.css">
    <script src="js/jquery3.0.1.min.js"></script>
    <style>
        .material-icons {vertical-align:-14%}
            @font-face {
                font-family: 'robotolight';
                src: url('fonts/Roboto-Light.ttf');
            }

            @font-face {
                font-family: 'robotoregular';
                src: url('fonts/Roboto-Regular.ttf');
            }

            @font-face {
                font-family: 'robotobold';
                src: url('fonts/Roboto-Bold.ttf');
            }
            
            input[type="checkbox"]{
                content: url('images/unchecked.png');
                -ms-transform: scale(1.5); /* IE */
                -moz-transform: scale(1.5); /* FF */
                -webkit-transform: scale(1.5); /* Safari and Chrome */
                -o-transform: scale(1.5); /* Opera */

            }
            input[type="checkbox"]:checked{
                content: url('images/cheked.png');
                -ms-transform: scale(1.8); /* IE */
                -moz-transform: scale(1.8); /* FF */
                -webkit-transform: scale(1.8); /* Safari and Chrome */
                -o-transform: scale(1.8); /* Opera */

            }
            
    </style>
   
    
    <body style="background-color: #f5f5f5;">
        
        <div class="w3-sidebar w3-bar-block w3-collapse w3-card-4 w3-animate-left" style="width:280px;background-color: #fefefe;" id="mySidebar">
                
                <div class="w3-center">
                  <button class="w3-button w3-left w3-xlarge w3-hide-large" onclick="w3_close()">&#9776;</button>
                  <img class="w3-image  w3-margin-top" height="30%" width="30%" src="images/hat.svg" alt="hat" />
                  <p class="w3-centered" style="font-family: robotobold;font-size: 20px;">Subject Selection</p>
                </div>
                <hr>
                <div class="w3-center" style="padding: 10px;">
                    
                    <p class="w3-bar-item w3-round-medium w3-margin-bottom w3-text-dark-grey" style="font-family: robotobold;padding-left: 35px;font-size: large;"><i class="material-icons">person</i>&nbsp;&nbsp;<?php echo $_SESSION["fname"]; ?> </a></p>
                    <a href="FYBCAHome.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-medium w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;" ><i class="material-icons">assignment</i>&nbsp;&nbsp; View Form</a>
                        <a href="" class="w3-bar-item w3-button w3-hover-blue w3-round-medium w3-margin-bottom w3-blue w3-text-white" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">edit</i>&nbsp;&nbsp; Edit Profile</a>
                        <hr>
                        <a href="admin/logout.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-medium w3-margin-top w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;float:bottom;"><i class="material-icons">sentiment_satisfied</i>&nbsp;&nbsp; Logout</a>
                    
                    
                </div>
            </div>
        
        <div class="w3-main w3-mobile" style="margin-left:260px;">
            <div>
                <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
            </div>
            
            
            <div class="w3-container w3-responsive w3-mobile w3-white">
                <div class="w3-container w3-blue">
                    <h2 style="margin-left: 2%;">Edit Profile</h2>
                </div>
                
                <?php
                    include './DBConnection.php';
                    $str=$_SESSION["type"];
                    $str.=date('Y');
                    $sql="SELECT * FROM `".$str."` WHERE app_id='".$_SESSION["username"]."'";
                    $result = $conn->query($sql);
                    $row;
                    if ($result->num_rows > 0) {

                        $row = $result->fetch_assoc();
                    }
                    else{
                        echo '<script>alert("User Details not Found!");</script>';
                        exit();
                    }
                ?>

                <form class="w3-container w3-padding-16" action="validateEditProfile.php" onsubmit="return validateForm()" method="POST" style="margin-left: 4%;">
                    
                <?php 
                        if(isset($_REQUEST['data']))
                        {
                            if($_REQUEST['data']=="updated"){
                                echo "<p class=\"w3-white w3-center w3-text-green w3-border w3-border-green w3-round-xlarge\" style=\"max-width:50%;\"> User Details Updated</p>";
                            }
                            else{
                                echo "<p class=\"w3-white w3-center w3-text-red w3-border w3-border-red w3-round-xlarge\" style=\"max-width:50%;\"> Error Updating User Details !</p>";
                            }
                        }
                ?>
                    <p>
                    <label class="w3-text-grey">PRN</label>
                    <input class="w3-input" name="prn" value="<?php echo $row["prn"]; ?>" type="text" pattern="[0-9]{16}" title="PRN should be of 16 Digit" maxlength="16"></p>
                    <p>
                    <label class="w3-text-grey">Password</label>
                    <input class="w3-input" name="pwd" value="<?php echo $row["password"]; ?>" type="password" id="pw" required></p>
                    <p>
                    <label class="w3-text-grey">Confirm Password</label>
                    <input class="w3-input" name="rpwd" value="<?php echo $row["password"]; ?>" type="password" id="rpw" required></p>
                    <p>
                    <label class="w3-text-grey">First Name</label>
                    <input class="w3-input" name="fname" value="<?php echo $row["first_name"]; ?>" type="text" required></p>
                    <p>
                    <label class="w3-text-grey">Middle Name</label>
                    <input class="w3-input" name="mname" value="<?php echo $row["middle_name"]; ?>" type="text" required></p>
                    <p>
                    <label class="w3-text-grey">Last Name</label>
                    <input class="w3-input" name="lname" value="<?php echo $row["last_name"]; ?>" type="text" required></p>
                    <p>
                    <label class="w3-text-grey">Email</label>
                    <input class="w3-input" name="email" value="<?php echo $row["email"]; ?>" type="email" pattern="[a-z0-9._+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please Enter a valid Email ID "></p>
                    <p>
                    <label class="w3-text-grey">Phone</label>
                    <input class="w3-input" name="phone" value="<?php echo $row["phone"]; ?>" type="tel" pattern="[0-9]{10}" title="Please Enter a valid Contact No." maxlength="10"></p>
                    <br/>
                    <p>
                    <input class="w3-btn w3-round-large w3-blue" type="submit" value="Update Profile"></p>
                    
                    
                    <p id="alrt"></p>
                </form>
            </div>
            <?php $conn->close(); ?>
            
            
        </div>
        
        
        <script>
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
            }
            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
            }
            
            function validateForm() {
                    
                        if(document.getElementById("pw").value===document.getElementById("rpw").value)
                        {
                            return true;
                        }
                        else
                        {
                            var x=document.getElementById("alrt");
                            x.innerHTML="<p class=\"w3-white w3-text-red \">Error: Password & Confirm Password doesn't match !</p>";
                            return false;
                        }
                
            }
        </script>
        
         
</body>
</html>






