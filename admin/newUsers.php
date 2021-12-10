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
                  <div class="w3-container">
                      <h3 style="font-family: robotoregular;color: darkslategray">New Users</h3>
                  </div>
                </div>
                
                <div class="w3-container">
                    
    <!--FYBCA USER-->
                    <h5 class="w3-button w3-card w3-block w3-blue w3-hover-blue w3-round-large" onclick="myFunction('fybca')" style="font-family: robotoregular;">New Users - FYBCA</h5>
                    <div id="fybca" class="w3-center w3-container w3-responsive" style="display:block;">
                        
                        <?php
                            include './DBConnection.php';
                            
                                $sql="SELECT `app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone` FROM fybca".date('Y')." WHERE `verified`=1";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {


                                    echo'<table class="w3-table-all w3-margin-bottom" >';
                                    echo'<tr style="font-family: robotoregular;"> <th>Application ID</th> <th>Password</th> <th>First Name</th> <th>Middle Name</th> <th>Last Name</th> <th>Email</th> <th>Mobile No</th> <th>Verify</th></tr>';

                                    while($row = $result->fetch_assoc()) {

                                        echo '<tr style="font-family: robotoregular;">';
                                        echo '<td>'.$row['app_id'].'</td>';
                                        echo '<td>'.$row['password'].'</td>';
                                        echo '<td>'.$row['first_name'].'</td>';
                                        echo '<td>'.$row['middle_name'].'</td>';
                                        echo '<td>'.$row['last_name'].'</td>';
                                        echo '<td>'.$row['email'].'</td>';
                                        echo '<td>'.$row['phone'].'</td>';
                                        echo '<td><button type="button" name="action" onclick="verify(this);" class="w3-btn w3-red w3-hover-green w3-round-xlarge" data-app_id='.$row['app_id'].' tableyear="fybca">Verify</button></td>';
                                        echo '</tr>';

                                    }
                                    echo"</table>";

                                }
                                else{
                                    echo'<p class="w3-text-red">No New Users Registered! </p>';
                                }
                                
                        ?>
                    </div>
                    
                    
                    
    <!--SYBCA USER-->
                    <h5 class="w3-button w3-card w3-block w3-blue w3-hover-blue w3-round-large" onclick="myFunction('sybca')" style="font-family: robotoregular;">New Users - SYBCA</h5>
                    <div id="sybca" class="w3-center w3-container w3-responsive" style="display:block;">
                        
                        <?php
                            include './DBConnection.php';
                            
                                $sql="SELECT `app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone` FROM sybca".date('Y')." WHERE `verified`=1";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {


                                    echo'<table class="w3-table-all w3-margin-bottom" >';
                                    echo'<tr style="font-family: robotoregular;"> <th>Application ID</th> <th>Password</th> <th>First Name</th> <th>Middle Name</th> <th>Last Name</th> <th>Email</th> <th>Mobile No</th> <th>Verify</th></tr>';

                                    while($row = $result->fetch_assoc()) {

                                        echo '<tr style="font-family: robotoregular;">';
                                        echo '<td>'.$row['app_id'].'</td>';
                                        echo '<td>'.$row['password'].'</td>';
                                        echo '<td>'.$row['first_name'].'</td>';
                                        echo '<td>'.$row['middle_name'].'</td>';
                                        echo '<td>'.$row['last_name'].'</td>';
                                        echo '<td>'.$row['email'].'</td>';
                                        echo '<td>'.$row['phone'].'</td>';
                                        echo '<td><button type="button" name="action" onclick="verify(this);" class="w3-btn w3-red w3-hover-green w3-round-xlarge" data-app_id='.$row['app_id'].' tableyear="sybca">Verify</button></td>';
                                        echo '</tr>';

                                    }
                                    echo"</table>";

                                }
                                else{
                                    echo'<p class="w3-text-red">No New Users Registered! </p>';
                                }
                                
                        ?>
                    </div>
                    
                
    <!--TYBCA USER-->
                    <h5 class="w3-button w3-card w3-block w3-blue w3-hover-blue w3-round-large" onclick="myFunction('tybca')" style="font-family: robotoregular;">New Users - TYBCA</h5>
                    <div id="tybca" class="w3-center w3-container w3-responsive" style="display:block;">
                        
                        <?php
                            include './DBConnection.php';
                            
                                $sql="SELECT `app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone` FROM tybca".date('Y')." WHERE `verified`=1";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {


                                    echo'<table class="w3-table-all w3-margin-bottom" >';
                                    echo'<tr style="font-family: robotoregular;"> <th>Application ID</th> <th>Password</th> <th>First Name</th> <th>Middle Name</th> <th>Last Name</th> <th>Email</th> <th>Mobile No</th> <th>Verify</th></tr>';

                                    while($row = $result->fetch_assoc()) {

                                        echo '<tr style="font-family: robotoregular;">';
                                        echo '<td>'.$row['app_id'].'</td>';
                                        echo '<td>'.$row['password'].'</td>';
                                        echo '<td>'.$row['first_name'].'</td>';
                                        echo '<td>'.$row['middle_name'].'</td>';
                                        echo '<td>'.$row['last_name'].'</td>';
                                        echo '<td>'.$row['email'].'</td>';
                                        echo '<td>'.$row['phone'].'</td>';
                                        echo '<td><button type="button" name="action" onclick="verify(this);" class="w3-btn w3-red w3-hover-green w3-round-xlarge" data-app_id='.$row['app_id'].' tableyear="tybca">Verify</button></td>';
                                        echo '</tr>';

                                    }
                                    echo"</table>";

                                }
                                else{
                                    echo'<p class="w3-text-red">No New Users Registered! </p>';
                                }
                                
                        ?>
                    </div>
                    
                    
                    
    <!--FYMSC USER-->
                    <h5 class="w3-button w3-card w3-block w3-blue w3-hover-blue w3-round-large" onclick="myFunction('fymsc')" style="font-family: robotoregular;">New Users - FYMSC</h5>
                    <div id="fymsc" class="w3-center w3-container w3-responsive" style="display:block;">
                        
                        <?php
                            include './DBConnection.php';
                            
                                $sql="SELECT `app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone` FROM fymsc".date('Y')." WHERE `verified`=1";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {


                                    echo'<table class="w3-table-all w3-margin-bottom" >';
                                    echo'<tr style="font-family: robotoregular;"> <th>Application ID</th> <th>Password</th> <th>First Name</th> <th>Middle Name</th> <th>Last Name</th> <th>Email</th> <th>Mobile No</th> <th>Verify</th></tr>';

                                    while($row = $result->fetch_assoc()) {

                                        echo '<tr style="font-family: robotoregular;">';
                                        echo '<td>'.$row['app_id'].'</td>';
                                        echo '<td>'.$row['password'].'</td>';
                                        echo '<td>'.$row['first_name'].'</td>';
                                        echo '<td>'.$row['middle_name'].'</td>';
                                        echo '<td>'.$row['last_name'].'</td>';
                                        echo '<td>'.$row['email'].'</td>';
                                        echo '<td>'.$row['phone'].'</td>';
                                        echo '<td><button type="button" name="action" onclick="verify(this);" class="w3-btn w3-red w3-hover-green w3-round-xlarge" data-app_id='.$row['app_id'].' tableyear="fymsc">Verify</button></td>';
                                        echo '</tr>';

                                    }
                                    echo"</table>";

                                }
                                else{
                                    echo'<p class="w3-text-red">No New Users Registered! </p>';
                                }
                                
                        ?>
                    </div>
                    
                    
                    
    <!--SYMSC USER-->
                    <h5 class="w3-button w3-card w3-block w3-blue w3-hover-blue w3-round-large" onclick="myFunction('symsc')" style="font-family: robotoregular;">New Users - SYMSC</h5>
                    <div id="symsc" class="w3-center w3-container w3-responsive" style="display:block;">
                        
                        <?php
                            include './DBConnection.php';
                            
                                $sql="SELECT `app_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone` FROM symsc".date('Y')." WHERE `verified`=1";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {


                                    echo'<table class="w3-table-all w3-margin-bottom" >';
                                    echo'<tr style="font-family: robotoregular;"> <th>Application ID</th> <th>Password</th> <th>First Name</th> <th>Middle Name</th> <th>Last Name</th> <th>Email</th> <th>Mobile No</th> <th>Verify</th></tr>';

                                    while($row = $result->fetch_assoc()) {

                                        echo '<tr style="font-family: robotoregular;">';
                                        echo '<td>'.$row['app_id'].'</td>';
                                        echo '<td>'.$row['password'].'</td>';
                                        echo '<td>'.$row['first_name'].'</td>';
                                        echo '<td>'.$row['middle_name'].'</td>';
                                        echo '<td>'.$row['last_name'].'</td>';
                                        echo '<td>'.$row['email'].'</td>';
                                        echo '<td>'.$row['phone'].'</td>';
                                        echo '<td><button type="button" name="action" onclick="verify(this);" class="w3-btn w3-red w3-hover-green w3-round-xlarge" data-app_id='.$row['app_id'].' tableyear="symsc">Verify</button></td>';
                                        echo '</tr>';

                                    }
                                    echo"</table>";

                                }
                                else{
                                    echo'<p class="w3-text-red">No New Users Registered! </p>';
                                }
                                
                        ?>
                    </div>
                        <?php
                            $conn->close();
                        ?>
                    
                </div>

            </div>

        <script>
            
                function verify(el)
                {
                    var id = $(el).attr('data-app_id');
                    var year=$(el).attr('tableyear');
                    var action="verify";
                    //alert(id+" "+year);
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
                    xhttp.send("appid="+id+"& year="+year+"&action="+action);
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
                    if (x.style.display=="none") {
                        x.style.display="block";
                    } else { 
                        x.style.display="none";
                    }
                }
            </script>
     
</body>
</html>



