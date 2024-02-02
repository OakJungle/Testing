<?php
// Define the database connection parameters
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";
// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check the connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Define the data to be inserted
$first_name = "John";
$last_name = "Doe";
$email = "john.doe@example.com";
// Prepare an SQL statement to insert the data
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?,
?, ?)");
// Bind the parameters to the statement
$stmt->bind_param("sss", $first_name, $last_name, $email);
// Execute the statement
$stmt->execute();
// Close the statement and the connection
$stmt->close();
$conn->close();
?>
