<?php
  
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}
$name=$_POST['name'];
$email=$_POST['email'];

$sql = "INSERT INTO abc VALUES ('', '$name', '$email')";
  
if ($conn->query($sql) === TRUE) {
    return true;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}