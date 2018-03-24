if ((!$_POST['first_name']) || (!$_POST['last_name']) || 
      (!$_POST['username']) || (!$_POST['password']) || 
      (!$_POST['re_password']) || (!$_POST['ustype'])) {
          header("Location:Register.php");
          exit;
      }
      
      $config = parse_ini_file("appconfig.ini", 1);
      $myUser = $config['mysql_database']['db_username'];
      $myPass = $config['mysql_database']['db_password'];
      $myDB = $config['mysql_database']['database'];
      $myServer = $config['mysql_database']['db_host'];   
      
      try {
        $dbh = new PDO("mysql:host=$myServer;dbname=$myDB", 
        $myUser, $myPass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, 
        PDO::ERRMODE_EXCEPTION);
        //$sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
        $sql="INSERT INTO users (first_name, last_name, username, password, re_password, ustype) 
              VALUES ($_POST['first_name'],$_POST['last_name'],$_POST['username'],
               $_POST['password'], $_POST['re_password'], $_POST['ustype'])";

        //$sql="insert into users (first_name, last_name, username, password, re_password, ustype) 
        //values ($_POST['first_name'], $_POST['last_name'], $_POST['username'],
        //$_POST['password'], $_POST['re_password'], $_POST['ustype'])";

        $results = $dbh->query($sql);
        
      } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
      }     
?>





<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "photos");

  // Initialize message variable
  $msg = "";

  // If replay button is clicked ...
  if (isset($_POST['replay'])) {

    // Get text
    $message = mysqli_real_escape_string($db, $_POST['message']);


    $sql = "INSERT INTO message (message) VALUES ('$message')";

    // execute query
    mysqli_query($db, $sql);
  }
  $result = mysqli_query($db, "SELECT * FROM message");
?>





