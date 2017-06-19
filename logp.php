
<html lang="en">
    <head> 
				
	
        <script type="text/javascript" src="val.js"></script> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">


		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">








	</head>
	<body>

<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="">
<div class="col-sm-10"><class="title">Profile deatails
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
    
    if(isset($_POST['submit1'])){ 
       
	$email   = $_POST['email'];
	$password= $_POST['password'];        

        $sql = "SELECT * FROM register WHERE email = '$email' and password = '$password'";
        $result = $conn->query($sql);

echo "<table border=\"2\" bgcolor=\"#57B7AC\">";
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td> " . $row["user_name"]. " </td><td> " . $row["email"].  "</td><td> " . $row["gender"].  "</td></tr>";
            }
        } else {
            echo "0 results";
        }
    }
    else{
        echo "<p>w</p>";
        
    }
    $conn->close();
    ?>



</h1>
						
				<div class="form-group">	</body>
<a href="edit.html">
 <button type="button">Edit</button> 
</html>







