<?php session_start();?>
<?php include'server.php'; ?>
<?php include'logout.inc.php'; ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Credit card Details</title>
  
      <link rel="icon" href="../images/joobio_icon.png">
      <link rel="stylesheet" type="text/css" href="https://codepen.io/username/pen/aBcDef">
      <link rel="stylesheet" href="../css/style.css">
      <script src="cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js"></script>
      <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/jquery.card.js"></script>
</head>

<body>
  
  <form>
    <div class="form-container">
      <div class="personal-information">
        <h1>Payment Information</h1>
      </div> <!-- end of personal-information -->
      
      <input id="input-field" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Streed Address"/>
      <input id="column-left" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City"/>
      <input id="column-right" type="text" name="zipcode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code"/>
      <input id="input-field" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email"/>
    
        <div class="card-wrapper"></div>
          <input id="column-left" type="text" name="first-name" placeholder="First Name"/>
          <input id="column-right" type="text" name="last-name" placeholder="Surname"/>
          <input id="input-field" type="text" name="number" placeholder="Card Number"/>
          <input id="column-left" type="text" name="expiry" placeholder="MM / YY"/>
          <input id="column-right" type="text" name="cvc" placeholder="CCV"/>
          <a href="index.php" style="text-decoration: none;"><input id="input-button" type="submit" value=""/></a>
  </form>
</div>
<a href="index.php" style="position: relative;text-decoration: none;color: white;left: 46%;top: -45px;font-family: "Roboto";
  font-size: 1em;">Submit</a>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/jquery.card.js'></script>

    <script src="../js/index.js"></script>

</body>
</html>
