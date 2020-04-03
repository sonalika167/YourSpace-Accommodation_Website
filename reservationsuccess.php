<?php
include('conn.php');
if(isset($_POST['sub']))
{
	$name=mysqli_real_escape_string($conn,check($_POST['name']));
	$email=mysqli_real_escape_string($conn,check($_POST['email']));		
	$phone=mysqli_real_escape_string($conn,check($_POST['phone']));
	$room=mysqli_real_escape_string($conn,$_POST['room']);
	$member=mysqli_real_escape_string($conn,$_POST['member']);
	$day=mysqli_real_escape_string($conn,$_POST['day']);
	$month=mysqli_real_escape_string($conn,$_POST['month']);
	$year=mysqli_real_escape_string($conn,$_POST['year']);
	$type=mysqli_real_escape_string($conn,$_POST['type']);
	
if(empty ($name)||empty($email)||empty($member)||empty($room)||empty($day)||empty($month)||empty($year)||empty($type)||empty($phone))
	{
		echo "All fields are required";
	}
	else
	{
			$date=$day." ".$month." ".$year;
			$sql="INSERT into yspace1(name,email,rooms,members,date,price) VALUES ('$name','$email','$room','$member','$date','$type')";
			if(mysqli_query($conn,$sql))
			{
				header('location:main.php?error= Reservation Successful');
			}
			else
			{
					header('location:login.php?error=Login Again');
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