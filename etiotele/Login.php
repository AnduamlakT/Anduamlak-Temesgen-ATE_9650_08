<?php 
		session_start();
			require('Connect.php');

		if (isset($_POST['username']) and isset($_POST['password'])) {
			# code...
		}

		//$username = $_POST['username'];
		//$password = $_POST['password'];
		$username = "";
        $password = "";

		
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $results = mysqli_query($db, $query) or die(mysqli_error($db));
        $count = mysqli_num_rows($results);

        if ($count == 1) {
          $_SESSION['username'] = $username;
          //$_SESSION['success'] = "logged in";
          header('location: UsHome.php');
        }else {
            $msg = "Wrong username/password combination.";
        }

        if (isset($_SESSION['username'])) {
        	$username = $_SESSION['username'];
        	echo "hi" .$username . "";
        	echo "This is SE_II Assignment 1 ";
        }


	?>



<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="myStyle.css">
	
		
	<title> Login </title>

</head>

<body>
	<h1>Login</h1>

	<header>
		<ul>
			<li id="li1"> <a href="#"> Home</a> </li>
			<li id="li3"> <a href="#"> Messages</a> </li>	
			<li> <a href="#"> About us </a> </li>
		</ul>
	</header>

	<form class="form" method="post" action="Login.php">

    <h2 class="heading">Please Login</h2>

    <div class="input-group">
      <input class="up" type="text" name="username" placeholder="UserName">
    </div>
    <br>
    <div class="input-group">
      <input class="up" type="password" name="password" placeholder="Password">
    </div>
    <br>
    <div class="input-group">
      <input class="btn" type="submit" name="register" value="Register">
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
