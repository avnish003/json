<?php 
include("connection.php");
$id         = $_POST['emp_no'];
$EmpfName    = $_POST['first_name'];
$EmplName    = $_POST['last_name'];
$dob        = $_POST['birth_date'];
 
 $dept       = $_POST['department'];
   $depM       = $_POST['manager'];
   $salary     = $_POST['salary'];
$EmpGender  = $_POST['gender'];
$Emphd      = $_POST['hire_date'];
print_r($_POST);
$updateQuery = "UPDATE employees SET first_name = '$EmpfName',last_name ='$EmplName',birth_date='$dob'department='$dept',manager='$depM',gender='$EmpGender',hire_date='$Emphd' WHERE emp_no = 'id'";

$data=mysqli_query($con,$updateQuery);

if($data){
	ob_start();
	//header("location:employee.php");
}else{
	//header("location:employee.php");
}
