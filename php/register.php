

<!--url-->
<?php $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<?php
  include'login_registerlink.php';
?>
<?php include'signup.inc.php'; ?>
<!--login link-->
<link rel="stylesheet" type="text/css" href="../css/registerform.css">    

    
    <section id="form_before_launch">
   
   	<p onclick="animate()" id="on">Register</p>
   	<form id="form" method="post" action="register.php" >
   		<div>
   		    <div id="img"><img src="../images/faces-avatar-circle-portrait-young-boy-glasses-vector-illustration-eps-flat-cartoon-style-83654284.jpg"></div>
   		    <div>
   			<input type="text" id="firstname" name="firstname" placeholder="First Name" required="" />
   			<i class="fa fa-user"></i>
   			</div>
   			<div>
   			<input type="text" id="lastname" name="lastname" placeholder="Last Name" required="" />
   			<i class="fa fa-user"></i>
   			</div>
   			<div>
   			<input type="text" id="username" name="username" placeholder="Username" required="" />
   			<i class="fa fa-user"></i>
   			</div>
            <div>
            <input type="text" id="email" name="email" placeholder="Email ID" required="" />
            <i class="fa fa-envelope"></i>
            </div>
        
   			<div>
   			<input type="password" id="password" name="password1" placeholder="Password" required="" />
   			<i class="fa fa-lock"></i>
   			</div>
            <div>
            <input type="password" id="confirm-password" name="password2" placeholder="Confirm Password" required="" />
            <i class="fa fa-lock"></i>
            </div>
   			
   			<span style="position: absolute;right: 10px;font-family: arial;font-size: 12px;vertical-align: bottom;">Already a Member : <a href="login.php"> Sign In</a></span>
   			<p class="error-msg">Wrong Credential</p>
   			<div id="btn">
   			<div class="bt"></div>
   			<input type="submit" id="submit" name="register" value="Register" />
   			
   			</div>
   		</div>
   	</form>
   </section>
   <div style="position: absolute;top: 400px;left: 10px;background: #ffdddd;width: auto;height: auto;">
   <!--url-->
   <?php
   
   
   if(strpos($url, 'error=username') !== false){
   	echo "<div style='color: #a94442;
	background-color: #f2dede;
    border-left: 6px solid #f44336;
    padding: 10px;position:absolute;left: 200px;width: auto'>USERNAME already Exist</div>";
   } 
   ?>
   <!-- error specifier-->
   <?php include'errors.php'; ?></div>
   <script src="../js/register.js"></script>

  <div style="position: absolute;top: 800px;z-index: -1;width: 100%">
<div class="foot">
  <div style="font-size: 15px;color: #dd4b39;">Payment method</div>
  <div style="margin-top: 20px;">
  <span><img src="../images/196561.svg" width="120px" height="70px"></span> 
  <span><img src="../images/196578.svg" width="120px" height="70px"></span>
  <span><img src="../images/196566.svg" width="120px" height="70px"></span>
  <span><img src="../images/196560.svg" width="120px" height="70px"></span>
  <span><img src="../images/196556.svg" width="120px" height="70px"></span>
    <span><img src="../images/196539.svg" width="120px" height="70px"></span>
    <span><img src="../images/196543.svg" width="120px" height="70px"></span>
    <span><img src="../images/196546.svg" width="120px" height="70px"></span>   
    <span><img src="../images/196557.svg" width="120px" height="70px"></span>
    <span><img src="../images/196575.svg" width="120px" height="70px"></span>
    
  </div>
</div>
<div class="foot" style="display: flex;background-color: #131a22;">
    
  <div class="part" style="flex: 1;justify-content: space-between;">
    <ul>
      <li><a href="#"><strong>Get To Know Us</strong></a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Careers</a></li>
      <li><a href="#">Press Releases</a></li>
      <li><a href="#">Joobio Cares</a></li>
      <li><a href="#">Gift a Smile</a></li>
    </ul>
  </div>
  <div class="part" style="flex: 1;justify-content: space-between;">
    <ul>
      <li><a href="#"><strong>Contact with Us</strong></a></li>
      <li><a href="#" id="f"><span class="fa fa-facebook-f" style="color: #3b5998;"></span>&nbsp; &nbsp; &nbsp; Facebook</a></li>
      <li><a href="#" id="t"><span class="fa fa-twitter" style="color: #00aced;"></span>&nbsp; &nbsp; &nbsp; Twitter</a></li>
      <li><a href="#" id="i"><span class="fa fa-instagram" style="color: #bc2a8d;"></span>&nbsp; &nbsp; &nbsp; Instagram</a></li>
      <li><a href="#" ><span class="fa fa-google-plus" style="color: #dd4b39;"></span>&nbsp; &nbsp; &nbsp; Google</a></li>
      <li><a href="#" id="y"><span class="fa fa-youtube-play" style="color: #bb0000;"></span>&nbsp; &nbsp; &nbsp; Youtube</a></li>
      <li><a href="#" id="l"><span class="fa fa-linkedin" style="color: #007bb6;"></span>&nbsp; &nbsp; &nbsp; Linkedin</a></li>
    </ul>
  </div>
  <div class="part" style="flex: 1;justify-content: space-between;">
    <ul>
      <li><a href="#"><strong>Make money with Us</strong></a></li>
      <li><a href="#">Sell on Joobio</a></li>
      <li><a href="#">Become an Affiliate</a></li>
      <li><a href="#">Fulfilment by Joobio</a></li>
      <li><a href="#">Advertise your Products</a></li>
      <li><a href="#">Joobio Pay on Merchants</a></li>
      <li><a href="#">Become an Author</a></li>
    </ul>
  </div>
  <div class="part" style="flex: 1;justify-content: space-between;">
    <ul>
      <li><a href="#"><strong>Let Us Help You</strong></a></li>
      <li><a href="#"><span><img src="../images/145867.svg" width="20px" height="20px"></span> Your Account</a></li>
      <li><a href="#"><span><img src="../images/214320.svg" width="20px" height="20px"></span> TRACK YOUR ORDER</a></li>
      <li><a href="#"><span><img src="../images/214343.svg" width="20px" height="20px"></span> 100% Purchase Protection</a></li>
      <li><a href="#"><span><img src="../images/62290.png" width="20px" height="20px"></span> FREE & EASY RETURNS</a></li>
      <li><a href="#"><span><img src="../images/458594.svg" width="20px" height="20px"></span> ONLINE CANCELLATIONS</a></li>
      <li><a href="#"><span><img src="../images/313193.png" width="20px" height="20px"></span> NO Delivery Charges</a></li>
    </ul>
  </div>
  
</div>
<div class="foot" style="position: relative;display: flex;background-color: #131a22;border-top: 1px solid #3a4553;padding: 0px; padding-top: 40px;">
  <img src="../images/joobio.png" width="90px" height="30px" style="margin: 0px auto;">
    
</div>
<div class="foot" style="margin: 0px auto;background-color: #131a22;padding: 0px;text-align: center;padding-top: 10px;padding-bottom: 15px;">
  <span style="word-spacing: 10px;"> 
   <a href="#" style="color: white;"><span><img src="../images/330439.png" width="30px" height="30px"></span> INDIA </a>/ 
   <a href="#" style="color: white;"><span><img src="../images/330459.png" width="30px" height="30px"></span> USA  </a>/
   <a href="#" style="color: white;"><span><img src="../images/330622.png" width="30px" height="30px"></span> JAPAN  </a>/
   <a href="#" style="color: white;"><span><img src="../images/330425.png" width="30px" height="30px"></span> UK  </a>/
   <a href="#" style="color: white;"><span><img src="../images/330442.png" width="30px" height="30px"></span> CANADA </a> /
   <a href="#" style="color: white;"><span><img src="../images/330430.png" width="30px" height="30px"></span> BRAZIL </a> </span>
</div>
<div class="foot" style="margin: 0px auto;background-color: #111;padding: 0px;text-align: center;padding-top: 10px;padding-bottom: 15px;">
<span style="color: #f2f2f2;">Conditions of use and sale &nbsp;&nbsp;&nbsp;&nbsp; Privacy Notice &nbsp;&nbsp;&nbsp;&nbsp;Interest Based-Ads  </span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy; &nbsp;&nbsp;2016-2017 &nbsp;Joobio.com
</div>
</div>

</body>
</html>