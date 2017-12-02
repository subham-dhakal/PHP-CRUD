<?php
include_once("config.php");
if(isset($_POST['submit'])){
	$name=mysqli_real_escape_string($mysqli,$_POST['name']);
	$age=mysqli_real_escape_string($mysqli,$_POST['age']);
	$email=mysqli_real_escape_string($mysqli,$_POST['email']);
	
	
	$result=mysqli_query($mysqli,"INSERT INTO users(name,age,email) VALUES ('$name','$age','$email')");
	
	if($result){
		echo"Data added successfully!!!";
	}
	else
	{
		echo"Failed";
	}
	
}
?>