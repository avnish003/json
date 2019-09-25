<?php

//print_r($_POST);die;
 include ("connection.php");
 $query="INSERT INTO emp_data(name,dob,department,depmang,salary,hire_date,joindate,gender) VALUES('$_POST[name]','$_POST[dob]','$_POST[department]','$_POST[depmang]','$_POST[salary]','$_POST[hire_date]','$_POST[joindate]','$_POST[gender]')";
 //echo $query;die;
 $data=mysqli_query($con,$query);


if ( false==$data ) {
  printf("error: %s\n", mysqli_error($con));
}
else {
  //echo 'done.';
}
 
header("Location: employee.php");

?>

