<?php
include'server.php';

//logout 
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('Location: index.php');
}