<?php
include_once("config.php");
$id=$_GET['id'];
$query="delete * from users where  id=$id";
echo  $query;
$result=mysqli_query($mysqli,$query);
if($result){
header('location:index.php');
}
?>

