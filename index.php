<?php
  if (isset($_POST['amazingsubmitbutton'])) {
    $clientSecret = "6Lfu-bwUAAAAALHAXq1w3ucgBEql9JuXPIcrIcvL";
    $responseKey = $_POST['g-recaptcha-response'];
    
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$clientSecret&response=$responseKey";
    $response = file_get_contents($url);
    $response = json_decode($response);
    
    if (response->success)
      echo "Verification successful!<hr>"
     else
       echo "Verification failed.<hr>"
  }
?>
<html>
  <title>A4M-WADAM Prototype</title>
  <head>
    <script src="https://www.google.com/recaptcha/api.js"></script>
  </head>
  <body>
    <b>Things in this protoype:</b>
    <br>- Adblock Blocker
    <br>- "I'm not a robot" captcha
    <br>- Domain name + SSL certificate
    <br><b>Things I can do in the future:</b>
    <br>- Get Google ads (AND MONEY!!!!!)
    <br>- Get website on Google search results
    <br><form action="index.php" method="post">
    <div class="g-recaptcha" data-sitekey="6Lfu-bwUAAAAAEdgfkMP1MBwf92k58GgAHpgIrld"></div>
    <br>
    <input type="submit" name="amazingsubmitbutton" value="Verify">
    </form>
  </body>
</html>
