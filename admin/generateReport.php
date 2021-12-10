<?php   include './checkSession.php'; ?>

<!DOCTYPE html>
<html>
    <title>Student's Form</title>
    <link rel="icon" href="../images/hat.svg" type="image/icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <a href="" class="w3-bar-item w3-button w3-hover-blue w3-round-large w3-margin-bottom w3-blue w3-text-white" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">assignment</i>&nbsp;&nbsp; Student's Form</a>
                    <a href="AdminSubjectDetails.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-large w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">book</i>&nbsp;&nbsp; Subject Details</a>
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
                      <h3 style="font-family: robotoregular;color: darkslategray">Student's Form</h3>
                  </div>
            


        <?php

            if(isset($_POST['submit1']))
            {
                include './DBConnection.php';
                echo $_POST['submit1'];
                $year= date('Y');
                $records= array();
                $sql="SELECT course_code FROM `fsbca-i`";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    
                    $form=$result;
                    echo'<table  class="w3-table-all w3-centered w3-margin-bottom w3-responsive">';
                    echo'<tr style="font-family: robotoregular;"> <th>Student Name</th> ';
                    while($row=$result->fetch_assoc())
                    {
                        echo '<th>'.$row['course_code'].'</th> ';
                        
                    }
                    echo '</tr>';
                    echo 'ab';
                    while($row1=$result->fetch_assoc())
                    {
                        echo '<tr>';
                        $sql="SELECT app_id,course_code FROM `form_fybca".$year."` WHERE course_code='".$row['course_code']."'";
                        $result = $conn->query($sql);
                        while($row=$result->fetch_assoc())
                        {
                            $sql="SELECT first_name,middle_name, last_name FROM `fybca".$year."` WHERE app_id='".$row['app_id']."'";
                            $result = $conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                echo '<td>'.$row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].'</td>';
                            }
                            $row=$result->fetch_assoc();
                            echo '<td>'.$row['course_code'].'</td>';
                        }
                        echo '<tr>';
                    }
                    
                    
                    echo"</table>";
                    

                }
                else
                {
                    echo '<p style="font-family: robotoregular;font-size: medium;">No Subject Found ! &nbsp;</p>';
                }
                $conn->close();
            }
        ?>
        </div>
</body>