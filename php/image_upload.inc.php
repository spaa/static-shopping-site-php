<?php
if(isset($_POST['upload']))
{
	$file = $_FILES['file'];
	

	$fileName = $_FILES['file']['name'];
	$fileType = $_FILES['file']['type'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileError =$_FILES['file']['error'];
	$fileSize =$_FILES['file']['size'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpeg','jpg','png');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNameNew = "profile_".$username.".".$fileActualExt;
				$fileDestination = '../user_profile/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);

				$image_status = 1;
				$upload_image = "UPDATE user SET profile_image_link='$fileDestination',profile_image_status='$image_status' WHERE username = '$username'";
				$result_image = mysqli_query($db,$upload_image);
				if(!mysqli_query($db,$upload_image))
				{
					header("Location: session_user_details.php?error=image_cannot_be_uploaded");
				}
				else{
					header("Location: session_user_details.php?upload=success");
				}
			}
			else{
				header("Location: session_user_details.php?error=File_size_is_too_large");
			}
		}
		else{
			header("Location: session_user_details.php?error=There_was_an_error_while_uploading_file");
		}
	}
	else{
		if($fileName!="")
		{
			header("Location: session_user_details.php?error=You_cannot_upload_files_of_this_type");
		}
		else{
			header("Location: session_user_details.php?upload=nothing");
		}
	}
}

if (isset($_POST['remove'])) {
	$remove = "UPDATE user SET profile_image_link=null,profile_image_status='0' WHERE username = '$username'";
	$process = mysqli_query($db,$remove);
	if (!mysqli_query($db,$remove)) {
		header("Location: session_user_details.php?error=image_cannot_be_uploaded");
	}
	else{
		header("Location: session_user_details.php?upload=success");
	}
}
?>