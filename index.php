<!DOCTYPE html>
<html>
    <head>
        <title>Subject Selection</title>
        <link rel="icon" href="images/hat.svg" type="image/icon" />

     
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/w3.css">
       
        <?php
            session_start();
            if(isset($_SESSION["session"]))
            {
                $type=$_SESSION["type"];
                if($type=="admin")
                {
                    header("location:admin/AdminDashboard.php");
                }
                if($type=="faculty")
                {
                    header("location:faculty/FacultyDashboard.php");
                }
                if($type=="fybca")
                {
                    header("location:FYBCAHome.php");
                }
                if($type=="sybca")
                {
                    header("location:SYBCAHome.php");
                }
                if($type=="tybca")
                {
                    header("location:TYBCAHome.php");
                }
                if($type=="fymsc")
                {
                    header("location:FYMScHome.php");
                }
                if($type=="symsc")
                {
                    header("location:SYMScHome.php");
                }
            }
            else
            {
                session_destroy();
            }
        ?>
        
        
        <style>
            .form {
              position: relative;
              z-index: 1;
              background: #FFFFFF;
              max-width: 550px;
              margin: 0 auto 100px;
              padding: 30px;
              border-top-left-radius: 5px;
              border-top-right-radius: 5px;
              border-bottom-left-radius: 5px;
              border-bottom-right-radius: 5px;
              text-align: center;
            }
            .form .thumbnail {
              background: #EF3B3A;
              width: 150px;
              height: 150px;
              margin: 0 auto 30px;
              padding: 50px 30px;
              border-top-left-radius: 100%;
              border-top-right-radius: 100%;
              border-bottom-left-radius: 100%;
              border-bottom-right-radius: 100%;
              box-sizing: border-box;
            }
            .form .thumbnail img {
              display: block;
              width: 100%;
            }
            .form input {
              outline: 0;
              background: #f2f2f2;
              width: 100%;
              border: 0;
              margin: 0 0 15px;
              padding: 15px;
              border-top-left-radius: 5px;
              border-top-right-radius: 5px;
              border-bottom-left-radius: 5px;
              border-bottom-right-radius: 5px;
              box-sizing: border-box;

              font-size: 14px;
            }
            
            
            .form input[type=number]::-webkit-inner-spin-button, 
            .form input[type=number]::-webkit-outer-spin-button { 
              -webkit-appearance: none; 
              margin: 0; 
            }
            
            .form input[type=number]{
                -moz-appearance: textfield;
            }
            
            .form select {
              outline: 0;
              background: #f2f2f2;
              width: 100%;
              border: 0;
              margin: 0 0 15px;
              padding: 15px;
              border-top-left-radius: 5px;
              border-top-right-radius: 5px;
              border-bottom-left-radius: 5px;
              border-bottom-right-radius: 5px;
              box-sizing: border-box;
              
              font-size: 12px;
            }
            
            
            
            .form button {
              outline: 0;
              background: #EF3B3A;
              width: 100%;
              border: 0;
              padding: 15px;
              border-top-left-radius: 5px;
              border-top-right-radius: 5px;
              border-bottom-left-radius: 5px;
              border-bottom-right-radius: 5px;
              color: #FFFFFF;
              font-size: 14px;
              -webkit-transition: all 0.3 ease;
              transition: all 0.3 ease;
              cursor: pointer;
            }
            .form .message {
              margin: 15px 0 0;
              color: #b5b5b5;
              font-size: 12px;
            }
            .form .message a {
              color: #EF3B3A;
              text-decoration: none;
            }
            .form .register-form {
              display: none;
            }
            
            
            
            @font-face {
                font-family: 'nexabold';
                src: url('fonts/NexaBold.otf');
            }

            @font-face {
                font-family: 'nexalight';
                src: url('fonts/NexaLight.otf');
            }

            @font-face {
                font-family: 'gillsans';
                src: url('fonts/GillSans.ttf');
            }
                        
        </style>
        
    </head>
    <body style="background-color: #f5f5f5;">
        
        <div class="w3-container w3-center">
         
            <img style="width:50%;max-width:150px;margin-top: 3%;"  src="images/msu.png" alt="The Maharaja Sayajirao university of Baroda"/>
            <h3 style="font-family: nexabold;">Department of Computer Applications</h3>
            <br>
          
        
        <div class="form">
          
            <div class="thumbnail"><img src="images/hat.svg"/></div>
          
            <form id="reg" class="register-form" action="checkRegistration.php" method="post" onsubmit="return validateForm()">
                
                
               
               <select id="year" name="year" required autocomplete="off">
                  <option selected disabled hidden >Select Year</option>
                  <option value="fybca">FY-BCA</option>
                  <option value="sybca">SY-BCA</option>
                  <option value="tybca">TY-BCA</option>
                  <option value="fymsc">FY-MSC</option>
                  <option value="symsc">SY-MSC</option>
                </select>
                
                <div id="tooltip" style="display: none;margin: 5px;padding: 5px;">
                    <span class="w3-text w3-text-grey w3-small w3-responsive">App. ID should starts with <br/> "( BCA | MSC ) + Year of Course Enroll + Your Roll no."<br/>
                        for e.g BCA201532 , MSC201823</span>
                </div>
                <div id="divapp" style="display: block">
                    <input type="text" onfocus="showTooltip()" onblur="hideTooltip()" id="appid" name="appid" minlength="5" maxlength="12" placeholder="Application ID" required/>
                </div>
                
                               
                <input type="password" name="pwd" id="pw" placeholder="Password" required minlength="6"/>
                <input type="password" name="repwd" id="rpw" placeholder="Confirm Password" required minlength="6"/>
                
                <input type="text" name="fname" placeholder="First Name" required />
                <input type="text" name="mname" placeholder="Middle Name" required />
                <input type="text" name="lname" placeholder="Last Name" required />
                <input type="email" name="email" placeholder="E-mail" pattern="[a-z0-9._+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please Enter a valid Email ID " />
                <input type="text" name="mob" placeholder="Mobile No (+91)" maxlength="10" pattern="[0-9]{10}" title="Please Enter a valid Contact No.">
                
                <p id="alrt"></p>
                
                <button type="submit">Register</button>
                <p class="message">Already registered? <a href="#">Log In</a></p>
            </form>
          
            <form class="login-form" action="checkLogin.php" method="post">
                
              <input type="text" name="prn" placeholder="PRN or Application ID" maxlength="16" required/>
              <input type="password" name="pwd" placeholder="Password" maxlength="15" required/>
            
              <?php 
                if(isset($_REQUEST['msg']))
                {
                    echo '<p class="w3-white w3-text-red w3-border w3-border-red w3-round-xxlarge">'.$_REQUEST["msg"] .'</p>';
                }
              ?>
              
              <button>Login</button>
            <p class="message">Not registered? <a href="#">Sign In</a></p>
            
          </form>
        </div>
     </div>   
     
        
        <script src="js/jquery.min.js"></script>
        <script src="js/index.js"></script>
        
        <script type="text/javascript">
            
            function showTooltip() {
                
                document.getElementById("tooltip").style.display="block";
            }
            
            function hideTooltip() {
                
                document.getElementById("tooltip").style.display="none";
            }
            
            
            /*function checkYear(){
                
                var year=document.getElementById("year").value;
                
                if(year=="fybca" || year=="fymsc")
                {
                    document.getElementById("divapp").style.display="block";;
                    document.getElementById("divprn").style.display = "none";
                }
                else
                {
                    document.getElementById("divapp").style.display="none";;
                    document.getElementById("divprn").style.display = "block";
                }
            }*/
                      
            function validateForm() {
        
                
                //alert(appid);
                //var prn=document.getElementById("prn").value;
                //alert(prn);
                var year=document.getElementById("year").value;
                //alert(year);
                /*if(year=="Select Year")
                {
                    var x=document.getElementById("alrt");
                    x.innerHTML="<p class=\"w3-white w3-text-red w3-border w3-border-red w3-round-xxlarge\">Please Select Year!</p>";
                    
                    document.getElementById("year").focus();
                    return false;
                }*/
                
                
                var appid=document.getElementById("appid").value;
                
                var reg=new RegExp(/^(BCA|MSC)20[0-9]{2}[0-9]{1,3}/i)
                if(reg.test(appid))
                {
                    var a=appid.substr(0,3).toLowerCase();
                    var y=year.substr(2,5).toLowerCase();
                    if(y===a)
                    {  
                        if(document.getElementById("pw").value===document.getElementById("rpw").value)
                        {
                            var yy=appid.substr(3,4).toLowerCase().toString();
                            //alert(yy);
                            var d=new Date().getFullYear();
                            
                            if(year=="sybca" && yy==(d-1))
                            {
                                return true;
                            }
                            else if(year==="tybca" && yy==(d-2))
                            {
                                return true;
                            }
                            else if(year==="fybca" && yy==(d))
                            {
                                
                            }
                            else
                            {
                                var x=document.getElementById("alrt");
                                x.innerHTML="<p class=\"w3-white w3-text-red w3-border w3-border-red w3-round-xlarge\">Please Enter a Valid Year in Application ID !</p>";
                                return false;
                            }
                        }
                        else
                        {
                            var x=document.getElementById("alrt");
                            x.innerHTML="<p class=\"w3-white w3-text-red w3-border w3-border-red w3-round-xlarge\">Password & Confirm Password doesn't match !</p>";
                            return false;
                        }
                    }
                    else
                    {
                        var x=document.getElementById("alrt");
                        x.innerHTML="<p class=\"w3-white w3-text-red w3-border w3-border-red w3-round-xlarge\">Application ID and Selected Year doesn't match !</p>";
                        return false;
                    }
                       
                }
                else
                {
                    var x=document.getElementById("alrt");
                    x.innerHTML="<p class=\"w3-white w3-text-red w3-border w3-border-red w3-round-xlarge\">Please Enter a Valid Application ID!</p>";
                    document.getElementById("appid").focus();
                    return false;
                }
                
                
                
                
                /*if(prn=="" && appid==""){
                    var x=document.getElementById("alrt");
                    x.innerHTML="<p class=\"w3-white w3-text-red w3-border w3-border-red w3-round-xxlarge\">Please Enter Value of Application ID or PRN !</p>";
                    //alert("Please Enter Value of Application ID or PRN !");
                    document.getElementById("appid").focus();
                    return false;
                }*/
                
                /*var a=document.getElementById("divapp");
                var p=document.getElementById("divprn");
                
                if(p.style.display=="block"){
                    if(prn.length>16 || prn.length<16)
                    {                       
                        var x=document.getElementById("alrt");
                        x.innerHTML="<p class=\"w3-white w3-text-red w3-border w3-border-red w3-round-xxlarge\">PRN No. should be of 16 digit !</p>";

                        document.getElementById("prn").focus();
                        return false;
                   }
                }*/
                
                /*if(a.style.display=="block"){
                    if(appid.length>4 || appid.length<4)
                    {
                        var x=document.getElementById("alrt");
                        x.innerHTML="<p class=\"w3-white w3-text-red w3-border w3-border-red w3-round-xxlarge\">App ID. should be of 4 digit !</p>";

                        document.getElementById("appid").focus();
                        return false;
                   }
                }*/
            }           
            
        </script>
        
    </body>
</html>
