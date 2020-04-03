<?php
include('conn.php');
if(isset($_POST['sub']))
{
	$name=mysqli_real_escape_string($conn,check($_POST['name']));//escapes special characters in a string for use in an SQL statement.
	$email=mysqli_real_escape_string($conn,check($_POST['email']));
	$password=mysqli_real_escape_string($conn,check($_POST['password']));
	$phone=mysqli_real_escape_string($conn,check($_POST['phone']));
	
	
	$hashpassword =password_hash($password,PASSWORD_DEFAULT);
	if(empty ($name)||empty ($phone) ||empty($email)||empty($phone))
	{
		echo "Fill all the details";
	}
	else
	{
	
			$sql="INSERT into yspace(id,username,email,password,phone) VALUES ('','$name','$email','$hashpassword','$phone')";
			if(mysqli_query($conn,$sql))
			{
				header('location:main.php?error= Signup successful');
			}
			else
			{
					header('location:signup.php?error=Signup failed');
			}
			/*echo md5($password)."<br>";
			echo sha1($password)."<br>";
			echo password_hash($password,PASSWORD_DEFAULT)."<br>";*/
		
		
	}	

}	

function check($data)
{
	$data =htmlspecialchars($data);//converts the special chars into html entities.
	$data =stripslashes($data);//removes the blackslashes from the user input.
	$data =trim($data);//removes the extra space ,new line etc.
	return $data;
}
?>