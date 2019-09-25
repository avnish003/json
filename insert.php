<?php include 'insert_script.php' ?>
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
                <h3>Create a User</h3>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="inputFName">Project</label>
                        <input type="text" class="form-control" required="required" id="inputProject" name="project"
                            placeholder="Project">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group ">
                        <label for="inputLName">Description</label>
                        <input type="text" class="form-control" required="required" id="inputDescription"
                            name="description" placeholder="Description">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label for="inputAge">Source</label>
                        <input required="required" class="form-control" id="inputSource" name="source"
                            placeholder="Source">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Create</button>
                        <a class="btn btn btn-default" href="index.php">Back</a>
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
