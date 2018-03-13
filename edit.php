<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
	$name=$_POST['Nama'];
	$email=$_POST['Email'];
	$subject=$_POST['Subject'];
    $message=$_POST['Message'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE contact SET Name='$name',Email='$email',Subject='$subject',Message='$message' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: admin.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM contact WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$subject = $user_data['subject'];
    $message = $user_data['message'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="admin.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="Nama" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="Email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Subject</td>
				<td><input type="text" name="Subject" value=<?php echo $subject;?>></td>
			</tr>
            <tr> 
				<td>Message</td>
				<td><input type="text" name="Message" value=<?php echo $message;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>