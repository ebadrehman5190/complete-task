<?php
		
		if($_POST){
		
		$servername = "localhost";
		$username = "root";
		$password = "mysql";
		$dbname = "mysql";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 

				//$select = mysqli_select_db('test');
				mysqli_select_db($conn,"mysql");
				$new = "INSERT INTO costumer (costumer_user, costumer_name, costumer_email, costumer_password, costumer_gender, costumer_admin)
				VALUES ('".$_POST['user']."','".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['gender']."', '".$_POST['admin']."')";

				if ($conn->query($new) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}		
		$conn->close();
	}				
	?>