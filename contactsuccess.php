<?php
include('conn.php');
if(isset($_POST['sub']))
{
	$name=mysqli_real_escape_string($conn,check($_POST['name']));
	$email=mysqli_real_escape_string($conn,check($_POST['email']));		
	$phone=mysqli_real_escape_string($conn,check($_POST['phone']));
	
	
if(empty ($name)||empty($email)||empty($phone))
	{
		echo "All fields are required";
	}
	else
	{
			$sql="INSERT into yspace2(name,phone,email) VALUES ('$name','$phone','$email')";
			if(mysqli_query($conn,$sql))
			{
				header('location:main.php?error= Thankyou! for your feedback! We will get back to you soon.');
			}
			else
			{
					header('location:contact.php?error=try again');
			}
			/*echo md5($password)."<br>";
			echo sha1($password)."<br>";
			echo password_hash($password,PASSWORD_DEFAULT)."<br>";*/
		
		
	}	

}	

function check($data)
{
	$data =htmlspecialchars($data);
	$data =stripslashes($data);
	$data =trim($data);
	return $data;
}
?>