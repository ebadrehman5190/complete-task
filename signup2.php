<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["user"])){
			$userErr="user name required";
		} else {
			$user = test_input($_POST["user"]);
		}
        
		if (empty($_POST["name"])){
			$nameErr="Fullname required";
		} else {
			$name = test_input($_POST["name"]);
		}
        
        if (empty($_POST["email"])){
			$emailErr="email required";
		} else {
			$email = test_input($_POST["email"]);
		}
        
        if (empty($_POST["password"])){
			$passwordErr="password required ";
		} else {
			$password = test_input($_POST["password"]);
		}
        
        if (empty($_POST["cpassword"])){
			$cpasswordErr="cpassword required";
		} else {
			$cpassword = test_input($_POST["cpassword"]);
		}
        
        if (empty($_POST["gender"])){
			$genderErr="select gender";
		} else {
			$gender = test_input($_POST["gender"]);
		}
        
        if (empty($_POST["admin"])){
			$adminErr="select admin type";
		} else {
			$admin = test_input($_POST["admin"]);
		}
	}
function test_input($data) {	

}
?>