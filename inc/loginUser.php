<?php
include ('dbh.php');

// Handle login form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get email and password from form
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);
  
    // $active = $row['active'];
    
    $count = mysqli_num_rows($result);
  
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
        session_start();
        $user_name_is = $row['name'];
       $_SESSION['username'] = $user_name_is;
       header("location: ../views/home.php");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
 }


