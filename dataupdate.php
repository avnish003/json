<?php 
include("connection.php");
$id = $_GET['emp_no'];
echo $id;


$sql="SELECT * FROM employees WHERE emp_no =$id";
$data=mysqli_query($con,$sql);
if ( false==$data ) {
  printf("error: %s\n", mysqli_error($con));
}
$rows=mysqli_fetch_array($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="tutorial-boostrap-merubaha-warna">
 <meta name="author" content="ilmu-detil.blogspot.com">
 <title>Tutorial Boostrap </title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/style.css">
 

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <h4>JSON CRUD</h4>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
    </div>
  </div>
</nav>
<!-- /.navbar -->

<div class="container">
    <div class="row">
        <div class="row">
            <h3>Update a Employee Data</h3>
        </div>
            
       
  <form method="post" action="updateemployee.php">
  <div class="col-md-6">

   <div class="form-group">
    <label for="inputEname">First Name</label>
    <input type="text" class="form-control" required="required" id="inputEname" value="<?php echo $rows['first_name']; ?>" name="first_name" >
    <span class="help-block"></span>
   </div>
   
    <div class="form-group">
    <label for="inputEname">Last Name</label>
    <input type="text" class="form-control" required="required" id="inputEname" value="<?php echo $rows['last_name']; ?>" name="last_name" >
    <span class="help-block"></span>
   </div>
   
   <div class="form-group">
    <label for="inputEname">Date of birth</label>
    <input type="date" class="form-control" required="required" id="inputEname" value="<?php echo $rows['birth_date']; ?>" name="birth_date" >
    <span class="help-block"></span>
   </div>
   
 
                     <div class="form-group">
                        <label for="inputDep">Department</label>
                        <select class="form-control" name="department">
                      <?php
                        $records=mysqli_query($con,"SELECT dept_name FROM departments");
                        while($row=mysqli_fetch_array($records)){
						?>	
						
						 <option value="<?php echo $row['dept_name'];?>"> <?php echo $row['dept_name'];?>
                          <?php
							}
							?>
                        <span class="help-block"></span>
                        </select>
                    </div>
                    
    <div class="form-group">
    <label for="inputEname">Manager</label>
    <input type="text" class="form-control" required="required" id="inputEname" value="<?php echo $rows['manager']; ?>" name="manager" >
    <span class="help-block"></span>
   </div>
                    
   <div class="form-group">
    <label for="inputEname">Salary</label>
    <input type="text" class="form-control" required="required" id="inputEname" value="<?php echo $rows['salary']; ?>" name="salary" >
    <span class="help-block"></span>
   </div>
  
   <div class="form-group">
    <label for="hiredate">Hire Date</label>
    <input type="date" class="form-control" required="required" id="hiredate" value="<?php echo $rows['hire_date']; ?>" name="hire_date" >
    <span class="help-block"></span>
    
   
   </div>
   <?php $gender = $rows['gender']; ?>
   <input type="hidden" value="<?php echo $rows['emp_no']; ?>" name='emp_no'>
     <div class="form-group">
						 <label>Gender</label>
						  <select name="gender">
							<option <?php if($gender =='Male'){ echo 'selected';}else{ echo '';} ?> value="Male">Male</option>
							<option <?php if($gender =='Female'){ echo 'selected';}else{ echo '';} ?> value="Female">Female</option>
							</select>
                        <span class="help-block"></span>
                
                     </div>

   

    
   <div class="form-actions">
    <button type="submit" class="btn btn-primary" value="update">Update</button>
    <a class="btn btn btn-default" href="employee.php">Back</a>
   </div>
  </div>
  </form>
   
    </div> 
</div> 
<div class="footer">
	<p> onsumaye crop</p>
	</div>
</body>
</html>
