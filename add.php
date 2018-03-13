<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="Email"></td>
			</tr>
			<tr> 
				<td>Subject</td>
				<td><input type="text" name="Subject"></td>
			</tr>
            <tr> 
				<td>Message</td>
				<td><input type="text" name="Message"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['Nama'];
		$email = $_POST['Email'];
		$subject = $_POST['Subject'];
        $message = $_POST['Message'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO contact(Nama, Email, Subject, Message) VALUES('$name','$email','$subject','$message')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>