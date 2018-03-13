<?php
    session_start();
    if(!isset($_SESSION['simple_login']))
	{
        header("Location: Login.php");
    }
?>
<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM contact ORDER BY id DESC");

?>
<h1 align="center">Welcome,  <?php echo $_SESSION['simple_login']; ?></h1>
<p align="center"><a href="logout.php">Logout</a></p>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th> <th>Subject</th> <th>Email</th> <th>Message</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['subject']."</td>";
        echo "<td>".$user_data['email']."</td>"; 
		echo "<td>".$user_data['message']."</td>"; 		
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>