<?php
include'server.php';
include'login.inc.php';
$order = "";
if(isset($_POST['cart'])){
$query = "SELECT * FROM carts WHERE user_id = '$username'";
$result = mysqli_query($db, $query);
$check = mysqli_num_rows($result);
if($check==0){
	$order = "You have no orders placed";
}
}

if(isset($_POST['buy'])){
	if(isset($_SESSION['username'])){
	header("Location: creditdetails.php");
    }
    else {
    header("Location: ../php/motog5.php?error=failed");
    }
}
