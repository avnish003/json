<?php 
    if ( !empty($_POST)) { 
        $project  = $_POST['project'];
        $description  = $_POST['description'];
        $source    = $_POST['source'];
      
  $file = file_get_contents('people.json');
  $data = json_decode($file, true);
  unset($_POST["add"]);
  $data["records"] = array_values($data["records"]);
  array_push($data["records"], $_POST);
  file_put_contents("people.json", json_encode($data));
  header("Location: index.php");
    }
?>
