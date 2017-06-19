<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "registrationdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




if(isset($_POST['submit']))
	{

		$user_name = $_POST['user_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$name = $_POST['name'];
	$last_name = $_POST['last_name'];	
	$gender = $_POST['gender'];



	$agree = $_POST['agree'];
	$notification= $_POST['notification'];







     

 

$sql = "INSERT INTO register(user_name, email, password, cpassword, name, last_name, gender, agree, notification) VALUES ('$user_name','$email','$password','$cpassword','$name','$last_name','$gender','$agree','$notification')";

if ($conn->query($sql) === TRUE)
 {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
	else{echo "failed insertion";}





$conn->close();
?>
