<?php
$servername = "localhost";
$username = "id4892422_hans";
$password = "turismo01071998";
$dbname = "id4892422_contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql = "INSERT INTO contact (Name, Email, Subject, Message)
VALUES ('".$name."', '".$email."', '".$subject."','".$message."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to='ganteng.noga@gmail.com';

$message="From:$name <br />".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: tiits.000webhostapp.com <noreply@tiits.000webhostapp.com>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= 'Cc: ' .$email. "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$subject,$message,$headers);
if(@mail)
{
    echo "Email sent successfully !!";	
}
?>