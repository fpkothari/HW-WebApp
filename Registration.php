<html>
<link rel="stylesheet" type="text/css" href="style.css"> <!-- Import styling for the form from style.css-->
<title>Registration Page</title>

<body>
<center><img src="img/logo.png" alt="HWLogo"></center> <!-- Logo import -->
<center>

<form method="post" action="confirmation.php"> <!-- Start form for registration, pattern used to have alpha only names. Zip code validated by following 5 or 9 digits only. Rest are just non zero required validation. -->
	<fieldset>
	    <h2>REGISTRATION</h2>
	    <label>*First Name :</label>
	    <input name='fname' type="text" placeholder="- First Name -" pattern="[A-z]+$" maxlength="50" required><br><br>
	    <label>*Last Name :</label>
	    <input name='lname'type="text" placeholder="- Last Name -" pattern="[A-z]+$" maxlength="50" required><br><br>
	    <label>*Address 1 :</label>
	    <input name='address1' type="text" placeholder="- Address Line 1 -" maxlength="255" required><br><br>
		<label>Address 2 :</label>
	    <input name='address2' type="text" placeholder="- Optional -" maxlength="255"><br><br>
	    <label>*City :</label>
	    <input name='city' type="text" placeholder="- City -" maxlength="255" required><br><br>
	    <label>*State :</label>
	    <input name='state' type="text" placeholder="- State -" maxlength="50" required><br><br>
		<label>*Zip Code :</label>
	    <input name='zip' type="text" placeholder="- 12345 or 12345-1234 -" pattern="[0-9]{5}|[0-9]{5}-[0-9]{4}" maxlength="10" required><br><br>
		<label>Country (US Only) :</label>
	    <input name='country' type="text" placeholder="- US -" maxlength="255"<br><br><br>
	    <button name="go" type="submit" class="btn">Register</button>
	</fieldset>
</form>

<h4>Starred (*) Fields Are Required</h4><br>
</center>
</body>
</html>