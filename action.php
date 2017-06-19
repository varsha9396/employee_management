<?php

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
  	$notification = $_POST['notification'];


	/*$profimage = $_POST['image'];
	$hobbies=implode(',', $_POST['hobbies']);
*/



     

 

$sql = "UPDATE INTO register(user_name, email, password, cpassword, name, last_name, gender, agree, notification) VALUES ('$user_name','$email','$password','$cpassword','$name','$Country','$last_name','$gender','$agree','$notification') where email = $email";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
	else{echo "failed insertion";}

$conn->close();
?>
