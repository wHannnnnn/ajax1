<?php 
$con=mysqli_connect('localhost','root','123456','user');
$query=mysqli_query($con,'select * from user');
while($rows=mysqli_fetch_assoc($query)){
	$data[]=$rows;
}
// var_dump($data);
header('Access-Control-Allow-Origin: *');
echo json_encode($data);


 ?>