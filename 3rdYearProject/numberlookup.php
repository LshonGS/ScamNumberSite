<?php  
include 'connect.php';
$numberquery = $_POST['numberquery'];


$sql = "SELECT * FROM number_record WHERE Phone_Number LIKE " . "'" . $numberquery . "'";
$result = mysqli_query($connection, $sql);
$resultdata = mysqli_fetch_assoc($result);

//used for checking the outputs are correct
//var_dump($resultdata);
//die();





?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Search Results</title>
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>

	</head>

	<body>

		<header>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
    				<div class="navbar-header">
      					<a class="navbar-brand" href="index.php">LGS Fraud Phone Lookup</a>
    				</div>
    				<ul class="nav navbar-nav">
      					<li><a href="index.php">Home</a></li>
      					<li><a href="addnewnumber.php">Add New Number</a></li>
      					<li><a href="#">About</a></li>
    				</ul>
  				</div>
			</nav>	

		</header>

		<?php 

		// Tweaking the gathered results as Scraped entries do not have comments
		if ($resultdata['Record_Origin'] == "User" or $resultdata['Record_Origin'] == "Scraped") {
			if ($resultdata['Record_Origin'] == "User") {
						
				while ($resultdata=mysqli_fetch_assoc($result)) {
					echo $resultdata['Phone_Number'] . "<br  />";
					echo $resultdata['Threat_Level'] . "<br  />";
					echo $resultdata['Number_Comment'] . "<br  />";
					echo $resultdata['Record_Origin']. "<br  />";

				}
			}
			if($resultdata['Record_Origin'] == "Scraped"){
				while ($resultdata=mysqli_fetch_assoc($result)) {
					echo $resultdata['Phone_Number'] . "<br  />";
					echo $resultdata['Threat_Level'] . "<br  />";
					echo $resultdata['Record_Origin']. "<br  />";
				}
			}
		}
		else{
			echo "test";
		}

		

	while ($resultdata=mysqli_fetch_assoc($result)) {
		if ($resultdata['Record_Origin'] == "User") {
				
			
				echo $resultdata['Number'] . "<br  />";
				echo $resultdata['Threat_Level'] . "<br  />";
				echo $resultdata['Number_Comment'] . "<br  />";
				echo $resultdata['Record_Origin']. "<br  />";

			}


	}

		?>
		

	</body>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>