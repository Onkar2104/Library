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

// Retrieve form data
$name = $_POST['name'];
$library = $_POST['library'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$conpass = $_POST['conpass'];

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
