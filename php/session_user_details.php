<!--url-->
<?php $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<?php include'session_user_details_headerlink.php'; ?>
<?php include'session_user_details.inc.php'; ?> 
<!-- user session link-->
<link rel="stylesheet" type="text/css" href="../css/session_user_details.css">
<form id="user_details" method="post" action="session_user_details.php" enctype="multipart/form-data">
	<div>
		<div id="profile_image" style="position: relative;left: 30%;padding: 10px;">
			<div>
				<?php
				if ($image_status!=0) {
					echo "<img src='".$image_link."' width='150px' height='150px'>";
				}
				else{
					if($gender == "Male"){
						echo "<img src='../user_profile/default_boy.png' width='150px' height='150px'>";
					}
					if($gender == "Female"){
						echo "<img src='../user_profile/default_girl.jpg' width='150px' height='150px'>";
					}
					else{
						echo "<img src='../user_profile/default_image.png' width='150px' height='150px'>";
					}
				}
				?>
				
			</div>
			<input type="file" name="file">
			<button type="submit" name="upload">UPLOAD</button>
			<button type="submit" name="remove">REMOVE</button>
		</div>
		<div id="username">
			<strong>USER NAME:-</strong>
			<input id="username1" type="text" name="username1" placeholder="User Name" disabled <?php echo"value= '$username'";?> />
			<input id="username2" style="display: none;" type="text" name="username2" placeholder="User Name" <?php echo"value= '$username'";?> />
		</div>

		<div id="user_password">
			<div>
				<strong>PASSWORD:-</strong>
				<input type="password" name="user_password" placeholder="Password"  />
			</div>
		</div>
		<input type="checkbox" name="change_username" id="change_username">Change User Name
		<div id="firstname">
			<strong>FIRST NAME:-</strong>
			<input type="text" name="firstname" placeholder="First Name" required="" <?php echo"value= '$firstname'";?> />
		</div>
		<div id="lastname">
			<strong>LAST NAME:-</strong>
			<input type="text" name="lastname" placeholder="Last Name" required="" <?php echo"value= '$lastname'";?> />
		</div>
		<div id="gender_box">
			<strong>GENDER:-</strong>
			<div id="gender">
				<?php 
					if ($gender == "Male") {
						?><input type="radio" name="gender" value="Male" checked="true">Male
						<input type="radio" name="gender" value="Female">Female<?php 
					}
					elseif ($gender == "Female") {
						?><input type="radio" name="gender" value="Male" >Male
						<input type="radio" name="gender" value="Female" checked="true">Female<?php 
					}
				else{?>
				<input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<?php
				}
				?>
			</div>
		</div>

		<div id="dob">
			<strong>DATE OF BIRTH:-</strong>
			<input type="date" name="DOB" placeholder="Date of Birth" required="" <?php echo"value= '$dob'";?> />
		</div>

		<div id="email">
			<strong>EMAIL ADDRESS:-</strong>
			<input type="email" name="email" placeholder="Email-id" required="" <?php echo"value= '$email'";?> />
		</div>

		<div id="mobile">
			<strong>MOBILE NUMBER:-</strong>
			<input type="text" name="mobile" placeholder="Mobile Number" required="" <?php echo"value= '$mobile'";?>/>
		</div>

		<div id="add1">
			<strong>ADDRESS 1:-</strong>
			<input type="text" name="address1" placeholder="Permanent Address" required="" <?php echo"value= '$add1'";?> />
		</div>
		<div id="add2">
			<strong>ADDRESS 2:-</strong>
			<input type="text" name="address2" placeholder="Optional Address" <?php echo"value= '$add2'";?> />
		</div>


		<input id="change_password" type="checkbox" name="change_password">Change Password
		<div id="Change_password">
			<div>
				<strong>Current Password:-</strong>
				<input id="pass1" type="password" name="pass1" placeholder="Current password"  />
			</div>
			<div>
				<strong>New Password:-</strong>
				<input id="pass2" type="password" name="pass2" placeholder="New password" />
			</div>
			<div>
				<strong>Confirm New Password:-</strong>
				<input id="pass3" type="password" name="pass3" placeholder="Confirm New password"  />
			</div>
		</div>
		

		<div id="conclude">
	   			<input type="reset" id="reset" name="reset" value="RESET" />	   			
	   			<input type="submit" id="save" name="save" value="SAVE" />
	   	</div>
	</div>
	
</form>

<script src="../js/session_user_details.js"></script>
<div style="position: absolute;left: 37%; top: 120px;margin: 0px auto;background: #ffdddd;width: 850px;height: auto;">
<!--url-->
   <?php
   if(strpos($url, 'error') !== false){
   	echo "<div style='color: #a94442;
	background-color: #f2dede;
    border-left: 6px solid #f44336;
    padding: 10px;position:absolute;margin:0px auto;width: auto'>
    ";if(strpos($url, 'error=failed') !== false){echo" CURRENT PASSWORD ENTERED IS WRONG</div>";
   } 

   elseif(strpos($url, 'error=new_password_not_same') !== false){
   	echo"NEW PASSWORD DOES NOT MATCH WITH CONFIRM NEW PASSWORD</div>";
   } 

   elseif(strpos($url, 'error=same_password') !== false){
   	echo "CURRENT PASSWORD AND NEW PASSWORD IS SAME</div>";
   } 

   elseif(strpos($url, 'error=cant_process_query') !== false){
   	echo"<strong>DATABASE ERROR:</strong> EITHER USER NAME NOT FOUND IN DATABASE OR ERROR WHILE PROCESSING QUERY</div>";
   }

   elseif(strpos($url, 'error=multiple_rows_found_in_database_with_same_username') !== false){
   	echo"<strong>DATABASE ERROR:</strong> MULTIPLE USER WITH SAME USERNAME FOUND IN DATABASE(DELETE THE ACCOUNT)</div>";
   }  
   
   elseif(strpos($url, 'error=image_cannot_be_uploaded') !== false){
   	echo"<strong>DATABASE ERROR:</strong> IMAGE CANNOT BE UPLOADED </div>";
   } 

   elseif(strpos($url, 'error=File_size_is_too_large') !== false){
   	echo"<strong>DATABASE ERROR:</strong> FILE SIZE IS TOO LARGE </div>";
   } 

   elseif(strpos($url, 'error=There_was_an_error_while_uploading_file') !== false){
   	echo"<strong>DATABASE ERROR:</strong> THERE WAS AN ERROR WHILE UPLOADING IMAGE CHOOSE ANOTHER IMAGE </div>";
   } 

   elseif(strpos($url, 'error=You_cannot_upload_files_of_this_type') !== false){
   	echo"<strong>DATABASE ERROR:</strong> YOU CANNOT UPLOAD FILE OF THIS FORMAT </div>";
   } 
   }
   ?>
  </div>
