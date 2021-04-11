<?php session_start();?>
<?php include'server.php';?>
<?php include'logout.inc.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Jobbio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fontawsome link-->
	<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    
  <!-- footer link-->
  <link rel="stylesheet" type="text/css" href="../css/foot.css">
	
	<!-- navigationbar link-->
	<link rel="stylesheet" type="text/css" href="../css/navigationbar.css">
    
    <!-- sliders link-->
    <link rel="stylesheet" type="text/css" href="../css/slider1.css">
    
    <!-- countdown timer container link-->
    <link rel="stylesheet" type="text/css" href="../css/countdown1.css">
	
	<!-- logo link-->
	<link rel="icon" href="../images/joobio_icon.png">
    
    <!-- socialmedia icons link-->
	<link rel="stylesheet" type="text/css" href="../bootstrap-social-gh-pages/bootstrap-social.css">
	
	<!-- bootstrap link-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- multiple images sliding link-->
    <link href="../css/resCarousel1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong:300,400,400i,500,600,700" />
    <script src="../js/resCarousel.js"></script>
	
	<!-- menulist link-->
    <link rel="stylesheet" type="text/css" href="../css/menulist1.css" />
    <link rel="stylesheet" type="text/css" href="../css/menulist22.css" />
    <script src="../js/modernizr.custom.js"></script>

  <!--description-->
  <link rel="stylesheet" type="text/css" href="../css/description1.css">
    
</head>

<body class="entire-body">


<nav class="nav1">
	<div class="left">India's Fastest Shopping Destination</div>
    <ol class="right">
    <li><a href="#">Help Center</a></li>
    <li><a href="#">Sell on Joobio</a></li>
    <li><a href="#">About us</a></li> 
    <li><a href="#"><i class="glyphicon glyphicon-phone"></i> Download Mobile App</span></a></li>       
    </ol>
</nav>

<nav class="navbar navbar-inverse nav2" data-spy="affix" data-offset-top="30">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="../images/joobio.png"></a>
    </div>
    
    <form class="navbar-form navbar-left ">
      <div class="input-group " style="padding: 10px 0px 0px 40px; width: 580px;">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn searchbtn" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    
    
    <div class="navbar-right cart" >
      <ul class="nav navbar-nav navbar-right">
      <?php 
      include'cart.inc.php';
      if(isset($_SESSION['username'])){
        echo "
        <li><a href='session_user_details.php'><span class='glyphicon glyphicon-user'></span> Hii ".$_SESSION['username']."</a></li>
        
        <li><a href='#' class='dropdown-toggle' data-toggle='dropdown' name='cart'><span class='glyphicon glyphicon-shopping-cart'></span> Cart <span class='badge'> 0</span></a>
            <div class='dropdown-menu' style='width: 350px;'>
              <div class='panel panel-danger'>
                <div class='panel-heading'>
                  <div class='row'>
                    <div class='col-md-3'>SR. no</div>
                      <div class='col-md-3'>Product Image</div>
                      <div class='col-md-3'>Product Name</div>
                      <div class='col-md-3'>Price in $.</div>
                    </div>
                  </div>
                <div class='panel-body'>"./*.$order.*/"</div>
                <div class='panel-footer'></div>
              </div>
            </div>
        </li>
        <li><a href='index.php?logout='1''><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
      }
    
      else{
        echo "
        <li><a href='register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
        <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
      }
      ?>  
      </ul>
      
    </div>
  </div>
</nav>

<div class="container menuBar">
      
      </header> 
      <div class="main">
        <nav id="cbp-hrmenu" class="cbp-hrmenu">
          <ul>
            <li>
              <a href="#">Electronics</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4>Mobiles</h4>
                    <ul>
                      <li><a href="#">Motorola</a></li>
                      <li><a href="#">Samsung</a></li>
                      <li><a href="#">Apple</a></li>
                      <li><a href="#">Lenovo</a></li>
                      <li><a href="#">MI</a></li>
                      <li><a href="#">OPPO</a></li>
                      <li><a href="#">Vivo</a></li>
                      <li><a href="#">Micromax</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Cameras</h4>
                    <ul>
                      <li><a href="#">DSLR</a></li>
                      <li><a href="#">Point & Shoot</a></li>
                      <li><a href="#">Sports & Lifestyle</a></li>                      
                    </ul>
                  </div>  
                  
                  <div>
                    <h4>Home Entertainment</h4>
                    <ul>
                      <li><a href="#">iPods & MP3 Players</a></li>
                      <li><a href="#">Home Theaters</a></li>
                      <li><a href="#">Speakers</a></li>
                      <li><a href="#">DTH Set Top Box</a></li>                      
                    </ul>
                  </div>
                  <div>
                    <h4>Computer Accessories</h4>
                    <ul>
                      <li><a href="#">External Hard Disks</a></li>
                      <li><a href="#">Pendrives</a></li>
                      <li><a href="#">Laptop Bags</a></li>
                      <li><a href="#">Mouse</a></li>
                      <li><a href="#">Keybords</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Mobile Accessories</h4>
                    <ul>
                      <li><a href="#">Mobile Cases</a></li>
                      <li><a href="#">Headphones & Headsets</a></li>
                      <li><a href="#">Powerbank</a></li>
                      <li><a href="#">Screenguard</a></li>
                      <li><a href="#">Memory Cards</a></li>
                      <li><a href="#">Chargers</a></li>
                      <li><a href="#">Selfisticks</a></li>
                    </ul>
                  </div>
                  
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
              <a href="#">Appliances</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner">
                  <div>
                    <h4>TVs by Brand</h4>
                    <ul>
                      <li><a href="#">Sony</a></li>
                      <li><a href="#">Samsung</a></li>
                      <li><a href="#">LG</a></li>
                      <li><a href="#">VU</a></li>
                      <li><a href="#">Cloudwalker</a></li>
                    </ul>
                    <h4>Small Home Appliances</h4>
                    <ul>
                      <li><a href="#">Irons</a></li>
                      <li><a href="#">Water Geysers</a></li>
                      <li><a href="#">Air Purifiers</a></li>
                      <li><a href="#">Landline Phones</a></li>
                      <li><a href="#">Water Purifier</a></li>
                      <li><a href="#">Vaccum Cleaners</a></li>
                      
                    </ul>
                  </div>
                  <div>
                    <h4>TVs by screen size</h4>
                    <ul>
                      <li><a href="#">24 and below</a></li>
                      <li><a href="#">32</a></li>
                      <li><a href="#">39-43</a></li>
                      <li><a href="#">48-50</a></li>
                      <li><a href="#">55 and above</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Refrigerators</h4>
                    <ul>
                      <li><a href="#">Single Door</a></li>
                      <li><a href="#">Double Door</a></li>
                      <li><a href="#">Triple Door</a></li>
                      <li><a href="#">Side by Side</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Air Conditioners</h4>
                    <ul>
                      <li><a href="#">Window ACs</a></li>
                      <li><a href="#">Split ACs</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Kitchen Appliances</h4>
                    <ul>
                      <li><a href="#">Microwave Ovens</a></li>
                      <li><a href="#">Mixer/Juicer/Grinder</a></li>
                      <li><a href="#">Food Processors</a></li>
                      <li><a href="#">Electric Kettle</a></li>
                      <li><a href="#">Coffee Makers</a></li>
                      <li><a href="#">Dishwashers</a></li>
                      <li><a href="#">Induction Cooktops</a></li>
                      <li><a href="#">Popup Toasters</a></li>
                      <li><a href="#">Oven Toaster Grills</a></li>
                      <li><a href="#">Coffee Makers</a></li>
                    </ul>
                  </div>
                  
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
              <a href="#">Men</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4>Footwear</h4>
                    <ul>
                      <li><a href="#">Sports Shoes</a></li>
                      <li><a href="#">Casual Shoes</a></li>
                      <li><a href="#">Formal Shoes</a></li>
                      <li><a href="#">Loafers</a></li>
                      <li><a href="#">Boots</a></li>
                      <li><a href="#">Running Shoes</a></li>
                      <li><a href="#">Sneakers</a></li>
                      <li><a href="#">Sandals & Floaters</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Men's Grooming</h4>
                    <ul>
                      <li><a href="#">Deodorants</a></li>
                      <li><a href="#">Perfumes</a></li>
                    </ul>
                    <h4>Bottom Wear</h4>
                    <ul>
                      <li><a href="#">Jeans</a></li>
                      <li><a href="#">Trousers</a></li>
                      <li><a href="#">Cargos</a></li>
                      <li><a href="#">Track pants</a></li>
                      <li><a href="#">Shorts & 3/4ths</a></li>              
                    </ul>
                  </div>
                  <div>
                    <h4>Top Wear</h4>
                    <ul>
                      <li><a href="#">T-Shirts</a></li>
                      <li><a href="#">Shirts</a></li>
                      <li><a href="#">Kurtas</a></li>
                      <li><a href="#">Jackets</a></li>
                      <li><a href="#">Sweatshirts</a></li>
                      <li><a href="#">Suits & Blazers</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Watches</h4>
                    <ul>
                      <li><a href="#">Fastrack</a></li>
                      <li><a href="#">Casio</a></li>
                      <li><a href="#">Titan</a></li>
                      <li><a href="#">Fossil</a></li>
                      <li><a href="#">Sonata</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Accessories</h4>
                    <ul>
                      <li><a href="#">Backpacks</a></li>
                      <li><a href="#">Wallets</a></li>
                      <li><a href="#">Belts</a></li>
                      <li><a href="#">Sunglasses</a></li>
                      <li><a href="#">Jewellery</a></li>
                      <li><a href="#">Luggage & Travel</a></li>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
              <a href="#">Women</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4>Learning &amp; Games</h4>
                    <ul>
                      <li><a href="#">Catch the Bullet</a></li>
                      <li><a href="#">Snoopydoo</a></li>
                      <li><a href="#">Fallen Angel</a></li>
                      <li><a href="#">Sui Maker</a></li>
                      <li><a href="#">Wave Master</a></li>
                      <li><a href="#">Golf Pro</a></li>
                    </ul>
                    <h4>Utilities</h4>
                    <ul>
                      <li><a href="#">Gadget Finder</a></li>
                      <li><a href="#">Green Tree Express</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Entertainment</h4>
                    <ul>
                      <li><a href="#">Gadget Finder</a></li>
                      <li><a href="#">Green Tree Express</a></li>
                      <li><a href="#">Green Tree Pro</a></li>
                      <li><a href="#">Holy Cannoli</a></li>
                      <li><a href="#">Wobbler 3.0</a></li>
                      <li><a href="#">Coolkid</a></li>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
              <a href="#">Baby & Kid</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4>Utilities</h4>
                    <ul>
                      <li><a href="#">Green Tree Pro</a></li>
                      <li><a href="#">Wobbler 3.0</a></li>
                      <li><a href="#">Coolkid</a></li>
                    </ul>
                    <h4>Education</h4>
                    <ul>
                      <li><a href="#">Learn Thai</a></li>
                      <li><a href="#">Math Genius</a></li>
                      <li><a href="#">Chemokid</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Professionals</h4>
                    <ul>
                      <li><a href="#">Success 1.0</a></li>
                      <li><a href="#">Moneymaker</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Learning &amp; Games</h4>
                    <ul>
                      <li><a href="#">Catch the Bullet</a></li>
                      <li><a href="#">Snoopydoo</a></li>
                      <li><a href="#">Fallen Angel</a></li>
                      <li><a href="#">Sui Maker</a></li>
                      <li><a href="#">Wave Master</a></li>
                      <li><a href="#">Golf Pro</a></li>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
              <a href="#">Home & Furniture</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4>Utilities</h4>
                    <ul>
                      <li><a href="#">Green Tree Pro</a></li>
                      <li><a href="#">Wobbler 3.0</a></li>
                      <li><a href="#">Coolkid</a></li>
                    </ul>
                    <h4>Education</h4>
                    <ul>
                      <li><a href="#">Learn Thai</a></li>
                      <li><a href="#">Math Genius</a></li>
                      <li><a href="#">Chemokid</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Professionals</h4>
                    <ul>
                      <li><a href="#">Success 1.0</a></li>
                      <li><a href="#">Moneymaker</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Learning &amp; Games</h4>
                    <ul>
                      <li><a href="#">Catch the Bullet</a></li>
                      <li><a href="#">Snoopydoo</a></li>
                      <li><a href="#">Fallen Angel</a></li>
                      <li><a href="#">Sui Maker</a></li>
                      <li><a href="#">Wave Master</a></li>
                      <li><a href="#">Golf Pro</a></li>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
              <a href="#">Books & More</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4>Utilities</h4>
                    <ul>
                      <li><a href="#">Green Tree Pro</a></li>
                      <li><a href="#">Wobbler 3.0</a></li>
                      <li><a href="#">Coolkid</a></li>
                    </ul>
                    <h4>Education</h4>
                    <ul>
                      <li><a href="#">Learn Thai</a></li>
                      <li><a href="#">Math Genius</a></li>
                      <li><a href="#">Chemokid</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Professionals</h4>
                    <ul>
                      <li><a href="#">Success 1.0</a></li>
                      <li><a href="#">Moneymaker</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>Learning &amp; Games</h4>
                    <ul>
                      <li><a href="#">Catch the Bullet</a></li>
                      <li><a href="#">Snoopydoo</a></li>
                      <li><a href="#">Fallen Angel</a></li>
                      <li><a href="#">Sui Maker</a></li>
                      <li><a href="#">Wave Master</a></li>
                      <li><a href="#">Golf Pro</a></li>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../js/cbpHorizontalMenu.min.js"></script>
    <script>
      $(function() {
        cbpHorizontalMenu.init();
      });
    </script>