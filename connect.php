
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','library');

// get the post records
$Name = $_POST['Name'];
$LibraryId = $_POST['LibraryId'];
$Email = $_POST['Email'];
$Contact = $_POST['Contact'];
$Password = $_POST['Password'];
$ConfirmPass = $_POST['ConfirmPass'];

// database insert SQL code
$sql = "INSERT INTO `registation` (`Id`, `Name`, `LibraryId`, `Email`, `Contact`, `Password`, `ConfirmPass) VALUES ('1', '$Name', '$LibraryId', '$Email', '$Contact', '$Password, '$ConfirmPass)";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Registration Successfully....";
}

?>




<!-- // $conn = new mysqli('localhost','root','','library');
//     $Id = $_POST['Id'];
// 	$Name = $_POST['Name'];
// 	$LibraryId = $_POST['LibraryId'];
// 	$Email = $_POST['Email'];
// 	$Contact = $_POST['Contact'];
// 	$Password = $_POST['Password'];
//     $ConfirmPass = $_POST['ConfirmPass'];

// 	// Database connection
// 	// $conn = new mysqli('localhost','root','','library');
// 	if($conn->connect_error){
// 		echo "$conn->connect_error";
// 		die("Connection Failed : ". $conn->connect_error);
// 	} else {
// 		$stmt = $conn->prepare("insert into registration(Id, Name, LibraryId, Email, Contact, Password, ConfirmPass) values('1', '$Name', '$LibraryId', '$Email', '$Contact', '$Password', '$ConfirmPass')");
// 		$stmt->bind_param("sssssi", $Id, $Name, $LibraryId, $Email, $Contact, $Password, $ConfirmPass);
// 		$execval = $stmt->execute();
// 		echo $execval;
// 		echo "Registration successfully...";
// 		// $stmt->close();
// 		// $conn->close();
// 	}
// $host="localhost";
// $port=3306;
// $socket="";
// $user="root";
// $password="";
// $dbname="";

// $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
// 	or die ('Could not connect to the database server' . mysqli_connect_error());

// //$con->close(); -->
