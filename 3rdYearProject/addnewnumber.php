<?php

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Add New Number</title>
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="addproduct.css"/>

	</head>
	<body>
		<p>
			
		</p>
		<header>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
    				<div class="navbar-header">
      					<a class="navbar-brand" href="index.php">LGS Fraud Phone Lookup</a>
    				</div>
    				<ul class="nav navbar-nav">
      					<li><a href="index.php">Home</a></li>
      					<li class="active"><a href="#">Add New Number</a></li>
      					<li><a href="#">About</a></li>
    				</ul>
  				</div>
			</nav>
		</header>
		<form method="POST" action="insertnumber.php">
			<label for="Number">Number:</label><br>
			<input maxlength="11" minlength="11" type="text" name="Number">
			<br />

			<label for="Comment">Comment:</label>
			<textarea style="resize: none;" rows="9" cols="50" name="Comment" ></textarea> 
			<br  />

			<input type="radio" id="Good" name="Rating" value="Good">
			<label for="Good">Good</label><br>

			<input type="radio" id="Neutral" name="Rating" value="Neutral">
			<label for="Neutral">Neutral</label><br>

			<input type="radio" id="Danger" name="Rating" value="Danger">
			<label for="Danger">Danger</label><br>
			<input type="hidden" id="Origin" name="Origin" value="User">

			<input class="submit" type="submit" name="Submit">
		</form>	

		
	</body>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>