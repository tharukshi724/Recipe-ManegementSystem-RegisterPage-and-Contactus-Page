<?php
//Linking the configuration file
require 'config.php';

   

				  $username = $_POST['username'];
				  $email = $_POST['email'];
				  $pw1 = $_POST['pw1'];
				  

$sql= "INSERT INTO users(username,email,pw1)VALUES('$username','$email','$pw1')";
	if($con->query($sql)){
		echo "Inserted successfully";
	}
	else{
		echo "Error:". $con->error;
    }

$con->close();
?>
