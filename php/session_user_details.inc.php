<?php
include'server.php';
$firstname = '';
$lastname = '';
$email = '';
$mobile = '';
$dob = '';
$gender = '';
$add1 = '';
$add2 = '';
$pass1 = '';
$pass2 = '';
$pass3 = '';
$check_pass = '';
$confirm_pass = '';

if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	$query = "SELECT * FROM user WHERE username = '$username'";
	$result = mysqli_query($db,$query);
	if (mysqli_num_rows($result)==1) {
		while ($row = mysqli_fetch_assoc($result)) {
		$firstname = $row["firstname"];
		$lastname = $row["lastname"];
		$email = $row["email"];
		$mobile = $row["mobile"];
		$dob = $row["dob"];
		$gender = $row["gender"];
		$add1 = $row["add1"];
		$add2 = $row["add2"];
		$image_status = $row["profile_image_status"];
		$image_link = $row["profile_image_link"];
		}
	}

	include'image_upload.inc.php';

	if(isset($_POST['save'])) {
		$firstname = mysqli_real_escape_string($db,$_POST['firstname']);
		$lastname = mysqli_real_escape_string($db,$_POST['lastname']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$mobile = mysqli_real_escape_string($db,$_POST['mobile']);
		$dob = mysqli_real_escape_string($db,$_POST['DOB']);
		$gender = mysqli_real_escape_string($db,$_POST['gender']);
		$add1 = mysqli_real_escape_string($db,$_POST['address1']);
		$add2 = mysqli_real_escape_string($db,$_POST['address2']);

		if (isset($_POST['change_username'])) {
			
			$check_pass = mysqli_real_escape_string($db,$_POST['user_password']);
			$confirm_pass = md5($check_pass);
			if ($check_pass!="") 
			{
				$check = "SELECT * FROM user WHERE pass='$confirm_pass' AND username='$username'";
				$process = mysqli_query($db,$check);
				if (!mysqli_query($db,$check)) {
					header("Location: ../php/session_user_details.php?error=cant_process_query");
					exit();
				}
				else
				{
					if (mysqli_num_rows($process) == 1) 
					{
							$username = mysqli_real_escape_string($db,$_POST['username2']);

							$change = "UPDATE user SET username='$username' WHERE pass='$confirm_pass'";
							$process1 = mysqli_query($db,$change);


							$update = "UPDATE user SET firstname='$firstname',lastname='$lastname',email='$email',mobile='$mobile',dob='$dob',gender='$gender',add1='$add1',add2='$add2' WHERE username='$username'";
							$result = mysqli_query($db,$update);
							session_destroy();
							unset($_SESSION['username']);
							header("Location: ../php/login.php");
							exit();
					}
					else
					{
						header("Location: ../php/session_user_details.php?error=multiple_rows_found_in_database_with_same_username");
						exit();
					}
				}
			}
		}


		if (isset($_POST['change_password'])) {
			$pass1 = mysqli_real_escape_string($db,$_POST['pass1']);
			$pass2 = mysqli_real_escape_string($db,$_POST['pass2']);
			$pass3 = mysqli_real_escape_string($db,$_POST['pass3']);
			$check_pass = md5($pass1);
			$confirm_pass = md5($pass2);

			if($pass1!="" && $pass2!="" && $pass3!="")
			{
				if ($pass1 == $pass2) {
					header("Location: ../php/session_user_details.php?error=same_password");
					exit();
				}
				$check = "SELECT * FROM user WHERE pass='$check_pass' AND username = '$username' ";
				$process = mysqli_query($db,$check);

				if (!mysqli_query($db,$check)) {
					header("Location: ../php/session_user_details.php?error=cant_process_query");
					exit();
				}
				else{
					if (mysqli_num_rows($process) == 1) {
						if ($pass2 != $pass3) {
							header("Location: ../php/session_user_details.php?error=new_password_not_same");
							exit();
						}
						else{
							$change = "UPDATE user SET pass='$confirm_pass' WHERE username='$username'";
							$process1 = mysqli_query($db,$change);


							$update = "UPDATE user SET firstname='$firstname',lastname='$lastname',email='$email',mobile='$mobile',dob='$dob',gender='$gender',add1='$add1',add2='$add2' WHERE username='$username'";
							$result = mysqli_query($db,$update);
							session_destroy();
							unset($_SESSION['username']);
							header("Location: ../php/login.php");
							exit();
						}
					}
					else{
						header("Location: ../php/session_user_details.php?error=multiple_rows_found_in_database_with_same_username");
						exit();
					}
				}
			}
		}
		else
		{
			$update = "UPDATE user SET firstname='$firstname',lastname='$lastname',email='$email',mobile='$mobile',dob='$dob',gender='$gender',add1='$add1',add2='$add2' WHERE username='$username'";
			$result = mysqli_query($db,$update);
			header("Location: index.php");
		}
	}	
}