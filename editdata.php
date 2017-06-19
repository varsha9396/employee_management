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




if(isset($_POST['submit2']))
	{

		$user_name = $_POST['user_name'];
	$email = $_POST['email'];


	$name = $_POST['name'];
	$last_name = $_POST['last_name'];	
	$id = $_POST['id'];	







$sql = "UPDATE register SET user_name='$user_name', email='$email',name='$name', last_name='$last_name', id ='$id' WHERE id= $id";



if ($conn->query($sql) === TRUE)
 {
    echo "Upated succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
	else{echo "Updatation Failed";}





$conn->close();
?>
