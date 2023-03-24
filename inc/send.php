<?php
include_once('../inc/dbh.php');


$question = mysqli_escape_string($conn, $_POST['question']) ;
$answer = mysqli_escape_string($conn,$_POST['answer']);
$category = mysqli_escape_string($conn, $_POST['category']);
$knowledge_level = mysqli_escape_string($conn,$_POST['knowledge_level']);

$qry =  "INSERT INTO flashcards(
  question,
  answer,
  category,
  knowledge_level
  ) VALUES('$question','$answer', '$category', $knowledge_level)";
 echo $qry;
$insert = mysqli_query($conn, $qry);

if (!$insert) {
  header("Location: ../views/create.php?message=failed");
  exit();
}
else{
  // header("Location: ../flashcards/index.php");
  // $_SESSION['success_message'] = "Flashcard Created";
  header("Location: ../views/create.php?message=You have successfully added a flashcard");
  // exit();

}
?>