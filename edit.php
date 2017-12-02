<?php
$id=$_GET['id];
include_once("config.php");
$query="select * from user where id=$id";
$result=mysqli_query($mysqli,$query);
$row=mysqli_fetch_array($result);
if(isset($_POST['update])){
	$name=$_POST['name'];
	$age=$_POST['age'];
	$email=$_POST['email'];
}
?>