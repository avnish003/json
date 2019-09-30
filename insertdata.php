<?php
//error_reporting(0);
//print_r($_POST);die;
 include ("connection.php");
 $query="INSERT INTO employees(first_name,last_name,birth_date,hire_date,gender) VALUES('$_POST[first_name]','$_POST[last_name]','$_POST[birth_date]','$_POST[hire_date]','$_POST[gender]')";
 

$con->query($query) or die($con->error);
 
 $last_id = $con->insert_id;
 echo $last_id;
 echo $_POST[salary];

 
 $query1="INSERT INTO salaries(emp_no,salary)VALUES('$last_id','$_POST[salary]')";
 $con->query($query1) or die($con->error);
 //echo $query;die;
 
 $query2="INSERT INTO dept_manager(dept_no,emp_no)VALUES('$_POST[dept_no]','$last_id')";
  $con->query($query2) or die($con->error);
 
 

header("Location: employee.php");

?>

