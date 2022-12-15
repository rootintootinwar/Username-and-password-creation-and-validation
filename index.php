<?php
$uname1 = $_POST['uname'];
$upswd1 = $_POST['upswd'];

if(!empty($uname1)||!empty($upswd1)){
	$host = "localhost";
	$dbusername = "root";
	$dbpassword ="";
	$dbname = "username";

	$conn  = new mysqli ($host,$dbusername,$dbpassword,$dbname);

	if(mysqli_connect_error()){
		die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
	}
	else{
		$query = "SELECT * from register where uname1='$uname1' and upswd1='$upswd1'";
		$result = mysqli_query($conn,$query);
		$count=mysqli_num_rows($result);
		if($count>0){
			echo "Login Successfully";
		}
		else{
			echo "Incorrect username or password";
		}
	}
}