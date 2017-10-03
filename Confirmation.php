<html>
<?php

//Setting database variables
$hostname = "hwassessment.cwwptetd1hs7.us-east-2.rds.amazonaws.com:3306";
$user = "fkothari";
$pass = "s7r6D7y4";
$dbname = "registration";

//Connect to Database
$conn = mysqli_connect($hostname, $user, $pass, $dbname);

//Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["fname"])){
		$valid = 0;
		$error_message = "First name is a required input!";
	}
		if (empty($_POST["lname"])){
		$valid = 0;	
		$lname_error = 'Last Name is a required input!';
	  }
		if (empty($_POST["address1"])){
		$valid = 0;
		$address1_error = 'Address is a required input!';

	  }
		if (empty($_POST["city"])){
		$valid = 0;
		$city_error = 'City is a required input!';

	  }
		if (empty($_POST["zip"])){
		$valid = 0;
		$zip_error = 'Zip Code is a required input!';

	  }
	 if (empty($_POST["state"])){
		$valid = 0;
		$state_error = 'State is a required input!';
	}
}
//Setting input variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$timestamp = date('Y-m-d G:i:s');

//Query to Insert
mysqli_query($conn,"INSERT INTO Users (FirstName, LastName, Address1, Address2, City, State, Zip, Country, Date) 
VALUES('".$fname."','".$lname."', '".$address1."', '".$address2."', '".$city."', '".$state."', '".$zip."','".$country."', '".$timestamp."')");

//Close Connection
mysqli_close($conn);

?>

<head>
<title>Confirmation Page</title>
<link rel="stylesheet" type="text/css" href="style.css"> <!-- Import styling for the form from style.css-->
</head>
<body>
<center><img src="img/logo.png" alt="HWLogo"></center> <!-- Logo import -->
<center><form>
	  <fieldset>
	    <h2>REGISTRATION CONFIRMED</h2>
		<h3>Thank you <?php echo $fname; ?> ! <br> Your registration has been successful!</h3> <!-- Confirmation for a successful form entry -->
		</fieldset>
	</form></center>
</body>
</html>