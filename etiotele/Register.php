<?php
      $db = mysqli_connect("localhost", "root", "", "photos");
      $msg = "";

      if (isset($_POST['register'])) {

          // Get texts
          $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
          $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
          $username = mysqli_real_escape_string($db, $_POST['username']);
          $password = mysqli_real_escape_string($db, $_POST['password']);
          $re_password = mysqli_real_escape_string($db, $_POST['re_password']);
          $ustype = mysqli_real_escape_string($db, $_POST['ustype']);


          $sql = "INSERT INTO users (first_name, last_name, username, password, re_password, ustype) VALUES ('$first_name', 
          '$last_name', $username, $password, $re_password, $ustype)";

          // execute query
          mysqli_query($db, $sql);   
      }
      $result = mysqli_query($db, "SELECT * FROM users");     
?>


<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="myStyle.css">
  
    
  <title> Regieter </title>

</head>

<body>
  <h1>Register</h1>

  <header>
    <ul>
      <li id="li1"> <a href="AdmHome.php"> Home</a> </li> 
      <li> <a href="Register.php"> Register </a> </li>
      <li> <a href="About.php"> About us </a> </li>
    </ul>
  </header>

  
  <form method="post" action="Register.php">
    <div class="input-group">
      <input type="text" name="first_name" placeholder="FirstName" >
    </div>
    <br>
    <div class="input-group">
      <input type="text" name="last_name" placeholder="LastName">
    </div>
    <br>
    <div class="input-group">
      <input type="text" name="username" placeholder="UserName">
    </div>
    <br>
    <div class="input-group">
      <input type="password" name="password" placeholder="Password">
    </div>
    <br>
    <div class="input-group">
      <input type="password" name="re_password" placeholder="Re-Enter Password">
    </div>
    <br>
    <div class="input-group">
      <input type="text" name="ustype" placeholder="User Type">
    </div>
    <br>
    <div class="input-group">
      <input type="submit" name="register" value="Register">
    </div>
  </form>

  <footer>

    <table class="tableClass">
    
    <tr>
      <td>
        <ul>
          <h4> Internet </h4>
          <li> <a href="">3G</a> </li>
          <li> <a href="">Mobile</a> </li>
          <li> <a href="">internet</a> </li>
          <li> <a href="">call center </a> </li>
      
        </ul>
      </td>
        
      <td>
        <ul>
          <h4> Contact us</h4>
          <li> <a href="">Call center 994</a> </li>
          <li> <a href="">Call center 909</a> </li>
          <li> <a href="">*804#</a> </li>
          <li> <a href="">Shop address</a> </li>
        </ul>
      
      </td>

      <td>
        <ul>
          <h4> Mobile </h4>
          <li> <a href="">Postpaid</a> </li>
          <li> <a href="">Prepaid</a> </li>
          <li> <a href="">international</a> </li>
          <li> <a href="">roaming</a> </li>
        </ul>
      </td>

    </tr>

    <table>
      <tr>
        <small>
          <span> 
            <h3> 
              © ethiotelecom all rights are reserved 2018.
            </h3>
          </span>
        </small>
      </tr>
    </table>

  </table>
  
    
      
  </footer>

  </body>
</html>
