<?php
  include'headerlinks.php';
?>
  

<link rel="stylesheet" type="text/css" href="../css/description1.css">
  <link rel="stylesheet" type="text/css" href="../css/zoom.css">
  
  <script src='../js/jquery.elevatezoom.js'></script>
<br><br><br>
<div style="position: absolute;top: 200px;left: 20px;">


<img id="zoom_01" src='../images/small/image1.png' data-zoom-image="../images/large/image1.jpg"/>
<div id="gal1">
 
  <a href="#" data-image="../images/small/image1.png" data-zoom-image="../images/large/image1.jpg">
    <img id="img_01" src="../images/thumb/image1.jpg" />
  </a>

  <a href="#" data-image="../images/small/image2.png" data-zoom-image="../images/large/image2.jpg">
    <img id="img_01" src="../images/thumb/image2.jpg" />
  </a>

  <a href="#" data-image="../images/small/image3.png" data-zoom-image="../images/large/image3.jpg">
    <img id="img_01" src="../images/thumb/image3.jpg" />
  </a>

  <a href="#" data-image="../images/small/image4.png" data-zoom-image="../images/large/image4.jpg">
    <img id="img_01" src="../images/thumb/image4.jpg" />
  </a>

</div>

<script>
  $("#zoom_01").elevateZoom({
      zoomWindowFadeIn: 500,
      zoomWindowFadeOut: 500,
      lensFadeIn: 500,
      lensFadeOut: 500
}); 

  $("#zoom_01").elevateZoom({scrollZoom : true}); 

   //initiate the plugin and pass the id of the div containing gallery images
$("#zoom_01").elevateZoom({gallery:'gal1', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 


//pass the images to Fancybox
$("#zoom_01").bind("click", function(e) {  
  var ez =   $('#zoom_01').data('elevateZoom'); 
  $.fancybox(ez.getGalleryList());
  return false;
});


</script>


</div>

<div style="position: relative;top: -500px;z-index: -1;">
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
