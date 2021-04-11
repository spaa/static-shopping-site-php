
<?php

include 'server.php';

$username = '';
$firstname = '';
$lastname = '';
$email = '';


$address = '';
$password_1 = '';
$password_2 = '';
$errors = array();




//if register button is clicked
if(isset($_POST['register'])){
   $username = mysqli_real_escape_string($db,$_POST['username']);
   $firstname = mysqli_real_escape_string($db,$_POST['firstname']);
   $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
   $email = mysqli_real_escape_string($db,$_POST['email']);
   
   
   $password_1 = mysqli_real_escape_string($db,$_POST['password1']);
   $password_2 = mysqli_real_escape_string($db,$_POST['password2']);

	//ensure that form fields are filled properly
	if(empty($firstname)){
		array_push($errors, "Firstname is Required");
		//header("Location: ../php/register.php?error=firstname");
	}
	if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
	    array_push($errors, "Firstname should not contain numeric values");
	    //header("Location: ../php/register.php?error=firstname");   
	}
	if(empty($lastname)){
		array_push($errors, "Lastname is Required");
		//header("Location: ../php/register.php?error=lastname");
	}
	if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
	    array_push($errors, "Lastname should not contain numeric values"); 
	    //header("Location: ../php/register.php?error=lastname");  
	}
	if(empty($username)){
		array_push($errors, "Username is Required");
		//header("Location: ../php/register.php?error=username");
	}
	if(strlen($username)<5){
		array_push($errors, "Username Should not be less than 5 letters");
		//header("Location: ../php/register.php?error=username");
	}
	if(empty($email)){
		array_push($errors, "Email ID is Required");
		//header("Location: ../php/register.php?error=email");
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    array_push($errors, "Enter Email in following format john@example.com"); 
	    //header("Location: ../php/register.php?error=email"); 
	}
	if(empty($password_1)){
		array_push($errors, "Password is Required");
		//header("Location: ../php/register.php?error=password");
	}
	if($password_1 != $password_2){
		array_push($errors, "The Two Password Do Not Match");
		//header("Location: ../php/register.php?error=confirm_password");
	}

	//if there are no errors ,save user to database
	if(count($errors) == 0){
		$query = "SELECT username FROM user WHERE username = '$username'";
		$result = mysqli_query($db, $query);
		if(!mysqli_query($db, $query))
		{
			array_push($errors, "query_not_processed");
			header("Location: ../php/register.php?error=query_not_processed");
		}
		else
		{	
			$check = mysqli_num_rows($result);
			if($check > 0){
				array_push($errors, "USERNAME ALREADY EXIST");
				header("Location: ../php/register.php?error=username");
				exit();
			}
			else{
				$password = md5($password_1); //encrypt password before storing in database(security purpose)
				$sql = "INSERT INTO user (username, email, pass, firstname, lastname)
			        VALUES ('$username', '$email', '$password', '$firstname', '$lastname')";
				$logged = mysqli_query($db, $sql);
				if(!$logged)
				{
					array_push($errors, "DATA NOT INSERTED");
					header("Location: ../php/register.php?error=data_not_inserted");
				}
				else
				{
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "you are logged in";
					header('Location: login.php');
				}
	    	}
		}
	}
}
