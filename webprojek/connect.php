<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repeatpassword = $_POST['repeatpassword'];

	// Database connection
	$conn = new mysqli('localhost','root','','web_projek');
	if($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, email, password, repeatpassword) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $firstName, $lastName, $email, $password, $repeatpassword);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration Successfully...";
		header("location: signin.php");
		$stmt->close();
		$conn->close();
	}
}