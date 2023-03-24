<?php
include_once('../inc/dbh.php');


  $value = $_POST['knowledge_level'];
  echo('value is  $value');
  $qry =  "INSERT INTO flashcards(
    knowledge_level
    ) VALUES('$knowledge_level')";
     echo $qry;

     $insert = mysqli_query($conn, $qry);
     $knowledge_level = mysqli_escape_string($conn,$_POST['knowledge_level']);
  echo 'Value inserted into database';

?>



  // header("Location: ../views/create.php?message=You have successfully added a flashcard");
