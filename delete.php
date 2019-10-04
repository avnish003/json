<?php 
include("connection.php");
$id = $_GET['emp_no'];
$delete="DELETE FROM employees ,salaries dept_manager USING employees INNER JOIN salaries ON employees.emp_no=salaries.emp_no INNER JOIN dept_manager ON employees.emp_no=dept_manager.dept_no WHERE employees.emp_no=$id";
$data=mysqli_query($con,$delete);
if($data){
	ob_start();
	header("location:employee.php");
}else{
	header("location:employee.php");
}


?>


