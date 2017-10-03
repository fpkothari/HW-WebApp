<html>
<link rel="stylesheet" type="text/css" href="style.css"> <!-- Import styling for the form from style.css-->
<title>Admin Page</title>
<center><img src="img/logo.png" alt="HWLogo"></center> <!-- Logo import -->

<?php
//Set variables for database connection.
$servername = "hwassessment.cwwptetd1hs7.us-east-2.rds.amazonaws.com:3306"; 
$username = "fkothari";
$password = "s7r6D7y4";
$dbname = "registration";

// Create connection to database
$con = new mysqli($servername, $username, $password, $dbname);

// Verify connection to database
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Sets result to query results of descending order for later output. 
$result = mysqli_query($con,"SELECT * FROM Users ORDER by Date DESC");

function displayTable() {
	
}
?>
<center>
	<h1>Admin - User Report</h1>
    <body>
      <table>
      <tbody>
        <?php 
		//Output all values of table in Date Descending order
		echo "<table border='1'>";
		$i = 0;
		while($row = $result->fetch_assoc())
		{
			if ($i == 0) {
			  $i++;
			  echo "<tr>";
			  foreach ($row as $key => $value) {
				echo "<th>" . $key . "</th>";
			  }
			  echo "</tr>";
			}
			echo "<tr>";
			foreach ($row as $value) {
			  echo "<td>" . $value . "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
        ?>
      </tbody>
    </table>
    </body></center>
</html>