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
                </div>
                <div id="modal" class="w3-modal"></div>
                
                <div class="w3-container w3-center">
                    
    <!--FYBCA Form-->
                    <h5 class="w3-button w3-card w3-block w3-white w3-round-xlarge w3-border w3-border-blue" onclick="myFunction('fybca')" style="font-family: robotoregular;">Studnet's Form - FYBCA</h5>
                    <div id="fybca" class="w3-center w3-container w3-responsive" style="display:none;"></div>
                    
                    
                    
    <!--SYBCA Form-->
                    <h5 class="w3-button w3-card w3-block w3-white w3-round-xlarge w3-border w3-border-blue" onclick="myFunction('sybca')" style="font-family: robotoregular;">Studnet's Form - SYBCA</h5>
                    <div id="sybca" class="w3-center w3-container w3-responsive" style="display:none;"></div>
                    
                
    <!--TYBCA Form-->
                    <h5 class="w3-button w3-card w3-block w3-white w3-round-xlarge w3-border w3-border-blue" onclick="myFunction('tybca')" style="font-family: robotoregular;">Studnet's Form - TYBCA</h5>
                    <div id="tybca" class="w3-center w3-container w3-responsive" style="display:none;"></div>
                    
                    
                    
    <!--FYMSC Form-->
                    <h5 class="w3-button w3-card w3-block w3-white w3-round-xlarge w3-border w3-border-blue" onclick="myFunction('fymsc')" style="font-family: robotoregular;">Studnet's Form - FYMSC</h5>
                    <div id="fymsc" class="w3-center w3-container w3-responsive" style="display:none;"></div>
                    
                    
                    
    <!--SYMSC Form-->
                    <h5 class="w3-button w3-card w3-block w3-white w3-round-xlarge w3-border w3-border-blue" onclick="myFunction('symsc')" style="font-family: robotoregular;">Studnet's Form - SYMSC</h5>
                    <div id="symsc" class="w3-center w3-container w3-responsive" style="display:none;"></div>
                        
                
        
                    
    <!--Generate Reports-->           
                <div class="w3-row  w3-padding-24 w3-mobile" >
                    
            <!-- BCA -->
                    <div class="w3-container  w3-card-4 w3-margin w3-white w3-center"  >
                        
                        <div class="w3-container">
                            <h4 style="font-family: robotolight;color: darkslategray">Generate Reports - BCA</h4>
                            <hr/>   
                        </div>
                        
                        
                        <div class="w3-row w3-responsive w3-margin-left">
                        <!--FYBCA-->    
                            <div class="w3-third w3-center">
                                <div class="w3-container w3-card-4  w3-text-green w3-border  w3-margin w3-padding-16">
                                    <p class="w3-card-4 w3-green w3-text-white w3-round-xlarge w3-padding">F.Y</p>
                                    <form action="generateReport.php" method="post">
                                        <input type="submit" name="submit1" class="w3-button w3-light-gray w3-border w3-border-green w3-medium w3-round-xlarge" style="font-family: robotolight;color: darkslategray" value="Semester 1"/>
                                        <input type="submit" name="submit2" class="w3-button w3-light-gray w3-border w3-border-green w3-medium w3-round-xlarge" style="font-family: robotolight;color: darkslategray" value="Semester 2">                                    
                                    </form>
                                </div>  
                            </div>
                        
                        <!--SYBCA-->    
                            <div class="w3-third w3-center">
                                <div class="w3-container w3-card-4  w3-text-red w3-border  w3-margin w3-padding-16">
                                    <p class="w3-card-4 w3-red w3-text-white w3-round-xlarge w3-padding">S.Y</p>
                                  
                                    <a href="" class="w3-button w3-light-gray w3-border w3-border-red w3-medium w3-round-xlarge" style="font-family: robotolight;color: darkslategray">Semester 3</a>
                                    <a href="" class="w3-button w3-light-gray w3-border w3-border-red w3-medium w3-round-xlarge" style="font-family: robotolight;color: darkslategray">Semester 4</a>
                                </div>  
                            </div>
                        
                        <!--SYBCA-->    
                            <div class="w3-third w3-center">
                                <div class="w3-container w3-card-4  w3-text-light-blue w3-border  w3-margin w3-padding-16">
                                    <p class="w3-card-4 w3-blue w3-text-white w3-round-xlarge w3-padding">T.Y</p>
                                  
                                    <a href="" class="w3-button w3-light-gray w3-border w3-border-blue w3-medium w3-round-xlarge" style="font-family: robotolight;color: darkslategray">Semester 5</a>
                                    
                                </div>  
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
            
            function myFunction(id) {
                    var x = document.getElementById(id);
                    if (x.style.display=="none") {
                        x.style.display="block";
                        
                        var name=id;
                        var action="getEditForm";
                        var xhttp;
                                if(window.XMLHttpRequest){
                                    xhttp = new XMLHttpRequest();
                                }
                                else {
                                    xhttp = new ActiveXObject(Microsoft.XMLHTTP);
                                }
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById(id).innerHTML = this.responseText;
                            }
                        };
                        xhttp.open("POST", "actions.php", true);
                        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xhttp.send("name="+name+"&action="+action);
                    }
                    else
                    {
                        x.style.display="none";
                    }
            }
            
            function viewForm(el)
            {
                var appid=$(el).attr('app_id');
                var year=$(el).attr('year');
                var sname=$(el).attr('student');
                //alert(appid+" "+year+" "+sname);
                var action="viewStudentForm";
                
                var xhttp;
                            if(window.XMLHttpRequest){
                                xhttp = new XMLHttpRequest();
                            }
                            else {
                                xhttp = new ActiveXObject(Microsoft.XMLHTTP);
                            }
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById('modal').style.display='block';
                            document.getElementById('modal').innerHTML=this.responseText;
                        }
                    };
                    xhttp.open("POST", "actions.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("appid="+appid+"&year="+year+"&action="+action+"&sname="+sname);
            }
            
            function deleteForm(el)
            {
                var appid=$(el).attr('app_id');
                var year=$(el).attr('year');
                
                //alert(appid+" "+year);
                var action="DeleteStudentForm";
                
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
                    xhttp.send("appid="+appid+"&year="+year+"&action="+action);
            }
            </script>
     
</body>
</html>



