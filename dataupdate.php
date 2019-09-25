<?php 
include("connection.php");
$id = $_GET['id'];
$sql="SELECT * FROM emp_data WHERE id =".$id;
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
    <label for="inputEname">Name</label>
    <input type="text" class="form-control" required="required" id="inputEname" value="<?php echo $rows['name']; ?>" name="name" >
    <span class="help-block"></span>
   </div>
   
   <div class="form-group">
    <label for="inputEname">Date of birth</label>
    <input type="text" class="form-control" required="required" id="inputEname" value="<?php echo $rows['dob']; ?>" name="dob" >
    <span class="help-block"></span>
   </div>
   
   <div class="form-group">
    <label for="inputEname">Department</label>
    <input type="text" class="form-control" required="required" id="inputEname" value="<?php echo $rows['department']; ?>" name="department" >
    <span class="help-block"></span>
   </div>
   
   <div class="form-group">
    <label for="inputEname">Dep. Manager</label>
    <input type="text" class="form-control" required="required" id="inputEname" value="<?php echo $rows['depmang']; ?>" name="depmang" >
    <span class="help-block"></span>
   </div>
   
   <div class="form-group">
    <label for="inputEname">Salary</label>
    <input type="text" class="form-control" required="required" id="inputEname" value="<?php echo $rows['salary']; ?>" name="salary" >
    <span class="help-block"></span>
   </div>
   
   <div class="form-group">
    <label for="hiredate">Hire Date</label>
    <input type="text" class="form-control" required="required" id="hiredate" value="<?php echo $rows['hire_date']; ?>" name="hiredate" >
    <span class="help-block"></span>
    
    <div class="form-group">
    <label for="inputEname">Join Date</label>
    <input type="text" class="form-control" required="required" id="inputEname" value="<?php echo $rows['joindate']; ?>" name="joindate" >
    <span class="help-block"></span>
   </div>
   
   </div>
   <?php $gender = $rows['gender']; ?>
   <input type="hidden" value="<?php echo $rows['id']; ?>" name='id'>
     <div class="form-group">
						 <label>Gender</label>
						  <select name="gender">
							<option <?php if($gender =='Male'){ echo 'selected';}else{ echo '';} ?> value="Male">Male</option>
							<option <?php if($gender =='Female'){ echo 'selected';}else{ echo '';} ?> value="Female">Female</option>
							<option <?php if($gender =='Other'){ echo 'selected';}else{ echo '';} ?> value="Other" >Other</option>
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
