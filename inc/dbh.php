<?php
$servername = "localhost";
$username = 'root';
$password = '';
$name = 'flashcards_db';

// $conn = mysqli_connect("localhost","my_user","my_password","my_db");
// mysqli_select_db($conn, $name);


// Create connection
$conn = new mysqli($servername, $username, $password, $name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully!". "<br>";
?>