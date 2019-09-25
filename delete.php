<?php 
include("connection.php");
$id = $_GET['id'];
$delete="DELETE FROM emp_data WHERE id=".$id;
$data=mysqli_query($con,$delete);
if($data){
	ob_start();
	header("location:employee.php");
}else{
	header("location:employee.php");
}


?>