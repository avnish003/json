<?php 
$host="localhost";
$username="root";
$password="root";
$dbname="employee";
$con =mysqli_connect($host,$username,$password,$dbname) or die("connection failed because" .mysqli_connect_error());
if(!$con)
{

	echo "connection error";
	}
	//else 
	//echo "connection created";

?>
