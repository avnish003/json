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
//print_r($_POST);
$updateQuery="UPDATE employees JOIN salaries ON employees.emp_no=salaries.emp_no SET employees.first_name='$EmpfName', employees.last_name='$EmplName', employees.birth_date='$dob', employees.gender='$EmpGender', employees.hire_date='$Emphd', salaries.salary='$salary'  WHERE employees.emp_no='$id'";

//echo $updateQuery;
$data=mysqli_query($con,$updateQuery);

//~ $con->query($updateQuery) or die(mysqli_error($con));

echo $data;
if($data){
	ob_start();
	header("location:employee.php");
}else{
	echo "Not updating ! error";
	header("location:employee.php");
}
?>
