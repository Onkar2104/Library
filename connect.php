<?php
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Enrollment = $_POST['Enrollment'];
	$Email = $_POST['Email'];
	$Contact = $_POST['Contact'];
	$Password = $_POST['Password'];
    $ConfirmPass = $_POST['ConfirmPass'];

	// Database connection
	$conn = new mysqli('localhost','root','','library');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(FirstName, LastName, Enrollment, Email, Contact, Password, ConfirmPass) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $FirstName, $LastName, $Enrollment, $Email, $Contact, $Password, $ConfirmPass);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		// $stmt->close();
		// $conn->close();
	}
// $host="localhost";
// $port=3306;
// $socket="";
// $user="root";
// $password="";
// $dbname="";

// $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
// 	or die ('Could not connect to the database server' . mysqli_connect_error());

// //$con->close();

?>