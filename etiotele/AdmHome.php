
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

<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="myStyle.css">
	
		
	<title> Home </title>

</head>

<body>
	<h1>Home</h1>

	<header>
		<ul>
			<li id="li1"> <a href="AdmHome.php"> Home</a> </li>	
			<li> <a href="Register.php"> Register </a> </li>
			<li> <a href="About.php"> About us </a> </li>
		</ul>
	</header>




	<div id="content">
		<div id="imgdis">


			<?php
			  // Create database connection
			  $db = mysqli_connect("localhost", "root", "", "photos");

			  // Initialize message variable
			  $msg = "";

			  // If upload button is clicked ...
			  if (isset($_POST['upload'])) {
			  	// Get image name
			  	$image = $_FILES['image']['name'];
			  	// Get text
			  	$text = mysqli_real_escape_string($db, $_POST['text']);

			  	// image file directory
			  	$target = "images/".basename($image);

			  	$sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
			  	// execute query
			  	mysqli_query($db, $sql);

			  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			  		$msg = "Image uploaded successfully";
			  	}else{
			  		$msg = "Failed to upload image";
			  	}
			  }
			  $result = mysqli_query($db, "SELECT * FROM images");
			?>

			<?php
			    while ($row = mysqli_fetch_array($result)) {
			      echo "<div id='img_div'>";
			      	echo "<img src='images/".$row['image']."' >";
			      	echo "<p>".$row['text']."</p>";
			      echo "</div>";
			    }
		 	?>

		</div>
		
		<form method="post" action="AdmHome.php" enctype="multipart/form-data">
			<div>
				<textarea name="message" cols="40" rows="4" placeholder="replay"></textarea>
			</div>
			<div>
				<input type="submit" name="replay" value="Send">
			</div>
			
		</form>
		
	</div>

	

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
