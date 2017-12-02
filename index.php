
<?php
include_once("config.php");
$query = "SELECT * FROM users";
$result=mysqli_query($mysqli,$query);

if ($result){
	echo"successful";
}

?>
<html>
<head>
</head>
<body>
<table>
<thead>
<tr>
<th>Name</th>
<th>Age</th>
<th>Email</th>
<th> </th>
<th> </th>
</tr>
</thead>
<tbody>
<?php
while ($row = mysqli_fetch_row($result)){
?>
<tr>
<td><?php echo $row[1];?></td>
<td><?php echo $row[2];?></td>
<td><?php echo $row[3];?></td>
<td><a href="edit.php?id=<?php echo $row['0'];?>">EDIT</a></td>
<td><a href="delete.php?id=<?php echo $row['0'];?>">DELETE</a></td>
</tr>
<?php }?>
</tbody>
</table>
</body>
</html>
