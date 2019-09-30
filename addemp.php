<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tutorial-boostrap-merubaha-warna">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Tutorial CRUD JSON DATA</title>
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
            <div class="col-sm-5 col-sm-offset-3">
                <h3>Create a employee </h3>
                <form method="post" action="insertdata.php">
					
					<div class="form-group">
                        <label for="inputName">First Name</label>
                        <input type="text" class="form-control" required="required" autocomplete="off" id="inputName" name="first_name"
                            placeholder="Employee Name">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Last Name</label>
                        <input type="text" class="form-control" required="required" autocomplete="off" id="inputName" name="last_name"
                            placeholder="Employee Name">
                        <span class="help-block"></span>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="inputbirth">Date of Birth</label>
                        <input type="date" class="form-control" required="required" autocomplete="off" id="inputbirth" name="birth_date"
                            placeholder="Date of Birth">
                        <span class="help-block"></span>
                    </div>
                
                     <div class="form-group">
                        <label for="inputDep">Department</label>
                        <select class="form-control" name="dept_no">
                     <?php
                        $records=mysqli_query($con,"SELECT * FROM departments");
                        while($row=mysqli_fetch_array($records)){
						?>	
						
						 <option value="<?php echo $row['dept_no'];?>"> <?php echo $row['dept_name'];?></option>
			
                          <?php
							}
							?>
							
                        <span class="help-block"></span>
                        </select>
                    </div>
                    
                    
                   
                    
                  
                     <div class="form-group">
                        <label for="inputDepM">Dep. Manager</label>
                        <select name="manager" class="form-control">
							<option value="self">Self</option>
                         <?php
                        $records=mysqli_query($con,"SELECT first_name FROM employees");
                        while($row=mysqli_fetch_array($records)){
						?>	
						
						 <option value="<?php echo $row['first_name'];?>"> <?php echo $row['first_name'];?>
                          <?php
							}
							?>
							</select>
                        <span class="help-block"></span>
                    </div>
                    
                     <div class="form-group">
                        <label for="inputSalary">Salary</label>
                        <input type="text" class="form-control" autocomplete="off" id="inputSalary" name="salary"
                            placeholder="Salary">
                        <span class="help-block"></span>
                    </div>
                    
                    
                     <div class="form-group">
                        <label for="inputDate">Hire Date</label>
                        <input type="date" required="required" class="form-control" id="inputDate" name="hire_date"
                            placeholder="Hiring date">
                        <span class="help-block"></span>
                    </div>
                    
                   
                     <div class="form-group">
						 <label>Gender</label>
						  <select name="gender" class="form-control">
							<option value="M">Male</option>
							<option value="F">Female</option>
			
						  </select>
                        <span class="help-block"></span>
                
                     </div>


                   
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Create</button>
                        <a class="btn btn btn-default" href="employee.php">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
		<p> onsumaye crop</p>
		</div>
		
</body>

</html>

