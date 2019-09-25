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
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" required="required" id="inputName" name="name"
                            placeholder="Employee Name">
                        <span class="help-block"></span>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="inputbirth">Date of Birth</label>
                        <input type="text" class="form-control" required="required" id="inputbirth" name="dob"
                            placeholder="Date of Birth">
                        <span class="help-block"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputDep">Department</label>
                        <input type="text" class="form-control" required="required" id="inputDep" name="department"
                            placeholder="Deparment">
                        <span class="help-block"></span>
                    </div>
                    
                     <div class="form-group">
                        <label for="inputDepM">Dep. Manager</label>
                        <input type="text" class="form-control" required="required" id="inputDepM" name="depmang"
                            placeholder="Depart Manager">
                        <span class="help-block"></span>
                    </div>
                    
                     <div class="form-group">
                        <label for="inputSalary">Salary</label>
                        <input type="text" class="form-control" required="required" id="inputSalary" name="salary"
                            placeholder="Salary">
                        <span class="help-block"></span>
                    </div>
                    
                    
                     <div class="form-group">
                        <label for="inputDate">Hire Date</label>
                        <input type="text" required="required" class="form-control" id="inputDate" name="hire_date"
                            placeholder="Hiring date">
                        <span class="help-block"></span>
                    </div>
                    
                     <div class="form-group">
                        <label for="joindate">Join Date</label>
                        <input type="text" required="required" class="form-control" id="inputDate" name="joindate"
                            placeholder="Hiring date">
                        <span class="help-block"></span>
                    </div>
                    
                     <div class="form-group">
						 <label>Gender</label>
						  <select name="gender">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Other">Other</option>
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

