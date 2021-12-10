<html>
    <title>Registration Successful</title>
    <link rel="icon" href="images/hat.svg" type="image/icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/materialfonts.css">
    <div class="w3-container w3-responsive" style="padding:4%;">
    <div class="w3-panel w3-center w3-white w3-text-green w3-round-xlarge w3-border w3-border-green">
        <h1>Registration Successful</h1>
        <h4>Please wait for your Administrator to verify your login credentials.</h4>
        <?php 
        if(isset($_REQUEST["id"]))
        {
            echo '<h4>Please make a note of Your Application ID as it will be used for Subject Selection till end of your Course.</h4>';
            echo '<h3>Your Application ID : '.$_REQUEST["id"].'</h3>';
        }
        ?>
        
        <a href="index.php" class="w3-btn w3-green w3-round-large w3-margin">Go to Login</a>
    </div>
</div>
</html>