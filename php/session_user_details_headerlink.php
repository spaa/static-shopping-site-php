<?php session_start(); ?>
<?php include'server.php'; ?>
<?php include'logout.inc.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Jobbio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fontawsome link-->
	<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <!-- footer link-->
    <link rel="stylesheet" type="text/css" href="../css/foot.css">
	
	<!-- navigationbar link-->
	<link rel="stylesheet" type="text/css" href="../css/navigationbar.css">
   
	<!-- logo link-->
	<link rel="icon" href="../images/joobio_icon.png">
    
    <!-- socialmedia icons link-->
	<link rel="stylesheet" type="text/css" href="../bootstrap-social-gh-pages/bootstrap-social.css">
	
	<!-- bootstrap link-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
</head>

<body>


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
        <li><a href='index.php'><span class='glyphicon glyphicon-home'></span> Home</a></li>
        <li><a href="index.php?logout='1'"><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
      </ul>
  </div>
</nav>

