<?php
session_start();
include('conn.php');
if(isset($_POST['sub']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	/*echo $email."<br>";
	echo $pass."<br>";
	*/
	
	
	$email=mysqli_real_escape_string($conn,check($_POST['email']));//escapes special characters in a string for use in an SQL statement.
	$password=mysqli_real_escape_string($conn,check($_POST['password']));
	
	$hashpassword=password_hash($password,PASSWORD_DEFAULT);
	if(empty($email) || empty($password))
	{
		echo "Fill both details";
	}
	else
	{
			$sql="SELECT * FROM yspace WHERE email='$email'";
			$result=mysqli_query($conn,$sql);
			$resultCheck=mysqli_fetch_assoc($result);
			if($resultCheck<1)
			{
				header("location:login.php?error=email is not registered");
			}
			else
			{
				if(!password_verify($password,$resultCheck['password']))
				{

					header("location:login.php?error=Password is Wrong");
				}
				else
				{
					$_SESSION['name']=$resultCheck['name'];
					header("location:reservations.php?error=Login Success");
					
				}
				
			}				
	}			
	
}
else
{
	header("location:login.php");
}

function check($data)
{
	$data=htmlspecialchars($data);
	$data=stripslashes($data);
	$data=trim($data);
	return $data;
}
?>