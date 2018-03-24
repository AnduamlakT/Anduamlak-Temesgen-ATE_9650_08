
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "photos");

  
  $result = mysqli_query($db, "SELECT text FROM messages");
?>


<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="myStyle.css">
	
		
	<title> Messages</title>

</head>

<body>
	<h1>News</h1>

	<header>
		<ul>
			<li id="li1"> <a href="UsHome.php"> Home</a> </li>
			<li id="li3"> <a href="Messages.php"> Messages</a> </li>	
			<li> <a href="About.php"> About us </a> </li>
		</ul>
	</header>

			<?php
			    while ($row = mysqli_fetch_array($result)) {
			      echo "<div id='img_div'>";
			      	echo "<img src='images/".$row['image']."' >";
			      	echo "<p>".$row['text']."</p>";
			      echo "</div>";
			    }
		 	?>
	

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
