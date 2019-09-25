<?php 
include("connection.php");
$id         = $_POST['id'];
$EmpName    = $_POST['name'];
$dob        = $_POST['dob'];
$dept       = $_POST['department'];
$depM       = $_POST['depmang'];
$salary     = $_POST['salary'];
$joindate   = $_POST['joindate'];
$EmpGender  = $_POST['gender'];
$Emphd      = $_POST['hiredate'];
$updateQuery = "Update emp_data SET name = '$EmpName',dob='$dob',department='$dept',depmang='$depM',salary='$salary',gender='$EmpGender',joindate='$joindate',hire_date='$Emphd' WHERE id = '$id'";
$data=mysqli_query($con,$updateQuery);


if($data){
	ob_start();
	header("location:employee.php");
}else{
	header("location:employee.php");
}
