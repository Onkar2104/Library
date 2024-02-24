<<<<<<< HEAD

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
=======
<?php
// Database connection parameters
$host = 'localhost';
$user = 'root';
$password = ''; // Update with your MySQL password
$database = 'library';

// Establish database connection
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
>>>>>>> 4332a66e2cfda7a3da74fb0b8f9d232624754908

// Retrieve form data
$name = $_POST['name'];
$library = $_POST['library'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$conpass = $_POST['conpass'];

<<<<<<< HEAD
// //$con->close(); -->
=======
// Prepare and execute SQL query to insert data into database
$stmt = $conn->prepare("INSERT INTO signup (name, library, email, phone, pass, conpass) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sisiss", $name, $library, $email, $phone, $pass, $conpass);

if ($stmt->execute()) {
    echo "Registration successfully...";
} else {
    echo "Error: " . $stmt->error;
}

// Close prepared statement and database connection
$stmt->close();
$conn->close();
?>
>>>>>>> 4332a66e2cfda7a3da74fb0b8f9d232624754908
