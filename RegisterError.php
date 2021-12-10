<html>
    <title>Registration Successful</title>
    <link rel="icon" href="images/hat.svg" type="image/icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/materialfonts.css">
    <div class="w3-container w3-responsive" style="padding:4%;">
    <div class="w3-panel w3-center w3-white w3-text-red w3-round-xlarge w3-border w3-border-red">
        <h1>Registration Unsuccessful !</h1>
        
        <?php 
        if(isset($_REQUEST["id"]))
        {
            echo '<h3>User Already Exists with Same Application ID ( '.$_REQUEST["id"].' ) .</h3>';
        }
        ?>
        <h4>Contact Administrator for Login Credentials.</h4>
        <a href="index.php" class="w3-btn w3-red w3-round-large w3-margin">Go to Login</a>
    </div>
</div>
</html>
