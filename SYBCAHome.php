<?php   include './checkSession.php'; ?>
<!DOCTYPE html>
<html>
    <title>SY-BCA</title>
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
                        <a href="" class="w3-bar-item w3-button w3-hover-blue w3-round-medium w3-margin-bottom w3-blue w3-text-white" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;" ><i class="material-icons">assignment</i>&nbsp;&nbsp; View Form</a>
                        <a href="editProfile.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-medium w3-margin-bottom w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;"><i class="material-icons">edit</i>&nbsp;&nbsp; Edit Profile</a>
                        <hr>
                        <a href="admin/logout.php" class="w3-bar-item w3-button w3-hover-light-gray w3-round-medium w3-margin-top w3-text-dark-grey" style="font-family: robotoregular;padding-left: 30px;font-size: 16px;float:bottom;"><i class="material-icons">sentiment_satisfied</i>&nbsp;&nbsp; Logout</a>
                    
                    
                </div>
            </div>
        
        <div class="w3-main w3-mobile" style="margin-left:280px;">
            <div>
                  <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
                  
            </div>
            
            
            <?php
                include './DBConnection.php';
                //session alredy started
                $appid=$_SESSION["username"];
            
                $y=date('Y');
                $exists = mysqli_query($conn,"select 1 from sybca".$y);


                if($exists!== FALSE)
                {
                    $y=date('Y')-1;
                    $sql = "SELECT app_id, verified, formsubmit FROM sybca".date('Y')." where app_id='".$appid."'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0)
                    {
                        $conn->close();
                        $row = $result->fetch_assoc();
                        //echo'<script>alert("'.$row['verified'].'+'.$row['formsubmit'].'+'.$_SESSION["username"].'")</script>';
                        if($row['verified']==="0")
                        {
                            if($row['formsubmit']==="0")
                            {
                                include './StudentForm/fsbca1.php';
                            }
                            else if ($row['formsubmit']==="1")
                            {
                                echo '<div class="w3-container  w3-text-blue">
                                        <h4>Subject Form of Semester 1 Submitted</h4>
                                      </div>';
                                include './StudentForm/fsbca2.php';
                            }
                            else if ($row['formsubmit']==="2")
                            {
                                echo '<div class="w3-container  w3-text-blue">
                                        <h4>Subject Form of Semester 1 Submitted</h4>
                                      </div>
                                      <div class="w3-container  w3-text-blue">
                                        <h4>Subject Form of Semester 2 Submitted</h4>
                                      </div>';
                                include './StudentForm/ssbca1.php';
                                
                            }
                            else if($row['formsubmit']==="3")
                            {
                                echo '<div class="w3-container  w3-text-blue">
                                        <h4>Subject Form of Semester 1 Submitted</h4>
                                      </div>
                                      <div class="w3-container  w3-text-blue">
                                        <h4>Subject Form of Semester 2 Submitted</h4>
                                      </div>
                                      <div class="w3-container  w3-text-blue">
                                        <h4>Subject Form of Semester 3 Submitted</h4>
                                      </div>';
                                include './StudentForm/ssbca2.php';
                            }
                            else
                            {
                                
                                echo '<div class="w3-container" style="padding:2%;">
                                        <div class="w3-panel w3-round-xlarge w3-border w3-border-blue">
                                            <p style="font-family: robotoregular;font-size:large;">Subject Form of Semester 1 Submitted <button type="button" name="action" onclick="showForm1();" class="w3-btn w3-white w3-border w3-border-blue w3-hover-blue w3-small w3-round-xlarge w3-margin-left">View Form</button> </p>
                                        </div>
                                        <div id="sem1" style="display:none;" class="w3-panel w3-round-xlarge w3-responsive w3-white w3-leftbar w3-rightbar w3-border-blue"></div>

                                        <hr>

                                        <div class="w3-panel w3-round-xlarge w3-border w3-border-blue">
                                            <p style="font-family: robotoregular;font-size:large;">Subject Form of Semester 2 Submitted <button type="button" name="action" onclick="showForm2();" class="w3-btn w3-white w3-border w3-border-blue w3-hover-blue w3-small w3-round-xlarge w3-margin-left">View Form</button> </p>
                                        </div>
                                        <div id="sem2" style="display:none;" class="w3-panel w3-round-xlarge w3-responsive w3-white w3-leftbar w3-rightbar w3-border-blue"></div>


                                        <div class="w3-panel w3-round-xlarge w3-border w3-border-blue">
                                            <p style="font-family: robotoregular;font-size:large;">Subject Form of Semester 3 Submitted <button type="button" name="action" onclick="showForm3();" class="w3-btn w3-white w3-border w3-border-blue w3-hover-blue w3-small w3-round-xlarge w3-margin-left">View Form</button> </p>
                                        </div>
                                        <div id="sem3" style="display:none;" class="w3-panel w3-round-xlarge w3-responsive w3-white w3-leftbar w3-rightbar w3-border-blue"></div> 

                                        <div class="w3-panel w3-round-xlarge w3-border w3-border-blue">
                                            <p style="font-family: robotoregular;font-size:large;">Subject Form of Semester 4 Submitted <button type="button" name="action" onclick="showForm4();" class="w3-btn w3-white w3-border w3-border-blue w3-hover-blue w3-small w3-round-xlarge w3-margin-left">View Form</button> </p>
                                        </div>
                                        <div id="sem4" style="display:none;" class="w3-panel w3-round-xlarge w3-responsive w3-white w3-leftbar w3-rightbar w3-border-blue"></div> 
                                     </div>';
                                            
                                       
                            }
                            
                                
                            
                    
                        }
                        else
                        {
                            echo '<div class="w3-container w3-responsive" style="padding:2%;">
                                        <div class="w3-panel w3-center w3-text-red w3-round-large w3-border w3-border-red">
                                            <h2>Verification Error </h2>
                                            <p>Your Account has not verified yet !! Contact your Administrator for Details. </p>
                                        </div>
                                     </div>';
                        }
                    }
                    

                }
                else
                {
                    echo '<div class="w3-container" style="padding:2%;">
                                        <div class="w3-panel w3-center w3-text-red w3-round-large w3-border w3-border-red">
                                            <h2>User Form Details not found </h2>
                                            <p>Contact your Administrator for Details. </p>
                                        </div>';
                    
                }
            
                
            
            ?>
            
        </div>
        <script>
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
            }
            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
            }
        </script>
        
        <script>
                
                
                function checkCourse(el)
                {
                    if(el.checked)
                    {
                        var code=el.value;
                        var action="checkCourse";
                        var xhttp;
                            if(window.XMLHttpRequest){
                                xhttp = new XMLHttpRequest();
                            }
                            else {
                                xhttp = new ActiveXObject(Microsoft.XMLHTTP);
                            }
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                //document.getElementById("formDetails").style.display = "block";
                                document.getElementById("p"+code).innerHTML=this.responseText;
                                if(document.getElementById("exist"+code).value=="true")
                                {
                                    document.getElementById(code).checked=false;
                                    document.getElementById(code).disabled=true;
                                }
                                
                            }
                        };
                        xhttp.open("POST", "viewForm.php", true);
                        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xhttp.send("action="+action+"&code="+code);
                    }
                    
                    
                    
                }
                
                function validateForm()
                {
                    
                    //alert(maxCredits+" v "+minCredits);
                    var code=[];
                    $.each($("input[name='selectedCourse[]']:checked"),function(){
                       code.push($(this).val()); 
                    });
                    
                    var maxCredits=parseInt(document.getElementById("maxCredits").value.toString());
                    var minCredits=parseInt(document.getElementById("minCredits").value.toString());
                    var selectedCredits=0;
                    var obj=JSON.stringify(code);
                    
                    for(var i=0;i<code.length;i++)
                    {
                        selectedCredits+=parseInt(document.getElementById("credits"+code[i]).value);
                    }
                    
                    if(selectedCredits>maxCredits)
                    {
                        document.getElementById("formDetails").style.display = "block";
                        document.getElementById("formDetails").innerHTML="<p class=\"w3-text-red w3-border w3-border-red w3-round-xlarge w3-padding\">Your Total Credits are "+selectedCredits+".   Your Total Credits Should be less than "+maxCredits+" !</p>";
                        return false;
                    }
                    else if(selectedCredits<minCredits)
                    {
                        document.getElementById("formDetails").style.display = "block";
                        document.getElementById("formDetails").innerHTML="<p class=\"w3-text-red w3-border w3-border-red w3-round-xlarge w3-padding\">Your Total Credits are "+selectedCredits+".   Your Total Credits Should be greater than "+minCredits+" !</p>";
                        return false;
                    }
                    else
                    {
                        var c=confirm("You can't change the form once it submitted ! Do you want to continue ?");
                        if(c==true)
                        {
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                        
                    }
                    
                }
            
                
                
                function showForm1()
                {
                    var action="formfsbca1";
                    var year=new Date().getFullYear()-1;
                    //alert(year);
                    var xhttp;
                            if(window.XMLHttpRequest){
                                xhttp = new XMLHttpRequest();
                            }
                            else {
                                xhttp = new ActiveXObject(Microsoft.XMLHTTP);
                            }
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("sem1").style.display = "block";
                            document.getElementById("sem1").innerHTML=this.responseText;
                        }
                    };
                    xhttp.open("POST", "viewForm.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("action="+action+"&year="+year);
                }
                
                function showForm2()
                {
                    var action="formfsbca2";
                    var year=new Date().getFullYear()-1;
                    //alert(year);
                    var xhttp;
                            if(window.XMLHttpRequest){
                                xhttp = new XMLHttpRequest();
                            }
                            else {
                                xhttp = new ActiveXObject(Microsoft.XMLHTTP);
                            }
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("sem2").style.display = "block";
                            document.getElementById("sem2").innerHTML=this.responseText;
                        }
                    };
                    xhttp.open("POST", "viewForm.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("action="+action+"&year="+year);
                }
                
                function showForm3()
                {
                    var action="formssbca1";
                    var year=new Date().getFullYear();
                    //alert(year);
                    var xhttp;
                            if(window.XMLHttpRequest){
                                xhttp = new XMLHttpRequest();
                            }
                            else {
                                xhttp = new ActiveXObject(Microsoft.XMLHTTP);
                            }
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("sem3").style.display = "block";
                            document.getElementById("sem3").innerHTML=this.responseText;
                        }
                    };
                    xhttp.open("POST", "viewForm.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("action="+action+"&year="+year);
                }
                
                function showForm4()
                {
                    var action="formssbca2";
                    var year=new Date().getFullYear();
                    //alert(year);
                    var xhttp;
                            if(window.XMLHttpRequest){
                                xhttp = new XMLHttpRequest();
                            }
                            else {
                                xhttp = new ActiveXObject(Microsoft.XMLHTTP);
                            }
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("sem4").style.display = "block";
                            document.getElementById("sem4").innerHTML=this.responseText;
                        }
                    };
                    xhttp.open("POST", "viewForm.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("action="+action+"&year="+year);
                }
                
        </script>
                 
</body>
</html>






