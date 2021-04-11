<?php
include'server.php';

$username = '';
$password_1 = '';
$errors = array();

if(isset($_POST['login'])){
   $username = mysqli_real_escape_string($db,$_POST['username']);
   $password_1 = mysqli_real_escape_string($db,$_POST['password']);

   //ensure that form fields are filled properly
   if(empty($username)){
	array_push($errors, "Username is Required");
	//header("Location: ../php/register.php?error=username");
   }

   if(empty($password_1)){
	array_push($errors, "Password is Required");
	//header("Location: ../php/register.php?error=password");
   }

   if(count($errors) == 0){
   	$password = md5($password_1); //encrypt password before storing in database(security purpose)
	$query = "SELECT * FROM user WHERE (username = '$username' OR email = '$username') AND pass = '$password'";
	$result = mysqli_query($db, $query);
	    if(mysqli_num_rows($result) == 1){
		//log user in
		    while ($row = mysqli_fetch_assoc($result)) {
		    	$session_user = $row["username"];
		    	$mobile = $row["mobile"];
		    }
			$_SESSION['username'] = $session_user;
		    $_SESSION['success'] = "you are logged in";

		    if ($mobile==0) {
		    	header('Location: session_user_details.php');
		    }
		    else{
		    header('Location: index.php');
		    }
		}
	    else{
	    	header("Location: ../php/login.php?error=failed");
	    	array_push($errors, "WRONG USERNAME/PASSWORD COMBINATION");
	    	exit();
	    }
    }
}