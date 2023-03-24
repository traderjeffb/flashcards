<?php
include_once('../inc/dbh.php');

$name = mysqli_escape_string($conn,$_POST['name']);
$email = mysqli_escape_string($conn,$_POST['email']);
$password = mysqli_escape_string($conn,$_POST['password']);
$confirm_password = mysqli_escape_string($conn,$_POST['confirm_password']);

if($password !== $confirm_password){
  header("Location: ../flashcards/register.php?message=Passwords do not match");
}
$qry =  "INSERT INTO users(name, email, password) VALUES('$name','$email', '$password')";
// echo ($qry);
// exit();
$result = mysqli_query($conn, $qry);

if ($result ==1) {
  header("Location: ../views/login.php?message=please log in");
}
else{
  echo ("There is a problem inserting data");
}
?>