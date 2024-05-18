<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiphp";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$salary = $_POST['salary'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$dateOfBirth = $_POST['dateOfBirth']; 

// SQL query to insert data into the employee table
$sql = "INSERT INTO employee (Email, FirstName, LastName, Phone, Salary, Gender, Password, DateOfBirth) VALUES ('$email', '$firstName', '$lastName', '$phone', '$salary', '$gender', '$password', '$dateOfBirth')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close the connection
$conn->close();
?>