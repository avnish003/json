<?php 
include("connection.php");
$limit = 5;
if (isset($_GET["page"])) {  
    $pn  = $_GET["page"];  
}  
else {  
    $pn=1;  
};   
$start_from = ($pn-1) * $limit; 

$sql="SELECT * FROM emp_data LIMIT $start_from, $limit";

$data=mysqli_query($con,$sql);
if ( false==$data ) {
  printf("error: %s\n", mysqli_error($con));
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="ilmu-detil.blogspot.com">
 <title>Tutorial CRUD  PHP DATA</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.jpeg');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 30%;
  font-size: 16px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  color:black; padding:2px;
}
  </style>
 
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.php">
   PHP CRUD</a>
  </div>
  <div class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-left">
    <li class= ""><a href="index.php">Home</a></li>
    <li class="clr1 active"><a href="employee.php">Employee</a></li>
    
   </ul>
   <div class="serchbar" style="text-align:right;margin-top:10px;">
	   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
	   <input type="submit" name="search" value="Filter">
   </div>
   
  </div>
 </div>
</nav>
</br></br></br></br>
<div class="container">
 <div class="jumbotron">
  <h3>Welcome to Employee Manager</h3>      
  <p>Create, Read, Update and Delete Data of employee </p>      
 </div>
</div>
<div class="container">
 <div class="btn-toolbar">
  <a class="btn btn-primary" href="addemp.php"><i class="icon-plus"></i> Add employee</a>
  <div class="btn-group"> </div>
 </div>
</div>
<br>
<br>
<div class="container">
 <div class ="row">
  <div class="col-md-9" style="width:100%; margin:auto;">
	 
	  
   <table class="table table-striped table-bordered table-hover">
    <tr>
     <th>No.</th>
     <th>Employee Name</th>
     <th>Date of birth </th>
     <th>Department </th>
     <th>Dep. manager </th>
     <th>Salary </th>
     <th>Hiring Date </th>
     <th>join Date </th>
     <th>Gender</th>
     <th>Action</th>
    </tr>  
    
    
    <?php 
    $i=0;
    while($rows=mysqli_fetch_array($data))  
    {
    ?>
    <tr>
     <td><?php echo $rows["id"];?></td>
     <td><?php echo $rows["name"]; ?></td>
     <td><?php echo $rows["dob"];?></td>
     <td><?php echo $rows["department"];?></td>
     <td><?php echo $rows["depmang"];?></td>
      <td><?php echo $rows["salary"];?></td>
     <td><?php echo $rows["hire_date"]; ?></td>
      <td><?php echo $rows["joindate"];?></td>
     <td><?php echo $rows["gender"];?></td>
     
     
     
     <td>
      <a class="btn btn-xs btn-primary" href="dataupdate.php?id=<?php echo $rows["id"];?>">Edit</a>
      <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $rows["id"]; ?>">Delete</a>
     </td>
    </tr>
    <?php
    $i++;
  }
    ?>
   
   </table>
    <ul class="pagination"> 
      <?php   
        $sql = "SELECT COUNT(*) FROM emp_data";   
        $rs_result = mysqli_query($con,$sql);   
        $row = mysqli_fetch_row($rs_result);   
        $total_records = $row[0];   
          
        // Number of pages required. 
        $total_pages = ceil($total_records / $limit);   
        $pagLink = "";                         
        for ($i=1; $i<=$total_pages; $i++) { 
          if ($i==$pn) { 
              $pagLink .= "<li class='active'><a href='employee.php?page="
                                                .$i."'>".$i."</a></li>"; 
          }             
          else  { 
              $pagLink .= "<li><a href='employee.php?page=".$i."'> 
                                                ".$i."</a></li>";   
          } 
        };   
        echo $pagLink;   
      ?> 
      </ul> 
  </div> 
 </div>
</div>
<div class="footer">
	<p> onsumaye crop</p>
</div>

</body>
</html>
