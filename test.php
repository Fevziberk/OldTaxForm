

<?php
include("test.html");
// Replace these variables with your actual database credentials
$servername = "localhost"; // Change to your server's hostname
$username = "root"; // Change to your MySQL username
$password = "285461379"; // Change to your MySQL password
$dbname = "demodb"; // Change to your database name

// Your input values
$input1 = $_POST['input1']; // Assuming you're sending the inputs via POST method
$input2 = $_POST['input2'];
$input3 = $_POST['input3'];

// Create a connection to the MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert data into the table
$sql = "INSERT INTO tbl (inp1, inp2, inp3) VALUES ('$input1', '$input2', '$input3')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
