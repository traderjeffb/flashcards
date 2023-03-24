<?php
include_once('../inc/header.php');
include_once('../inc/dbh.php');
include_once('../inc/navbar.php');


$error = true;
$error_checkbox = "";
$checkboxGroup = "";
$selected_checkboxes ="";



$flashcardStack ="SELECT * FROM flashcards  ORDER BY RAND()";
if (isset($_POST['getCategories']))
  {
    if(isset($_POST['checkboxGroup'])){
      $selected_checkboxes = $_POST['checkboxGroup'];
      // STORE IN SESSION
    }
  }
if(empty($selected_checkboxes))
  {
    $error_checkbox = "Please select a Category";
    $error = false;
  

    if($error)
    {
      $selected = implode(',', $selected_checkboxes);
      // IF ISSET SESSION ey
      $flashcardStack ="SELECT * FROM flashcards 
      WHERE category IN ('$selected') 
      ORDER BY RAND()";
      // print_r($flashcardStack);
      // exit();
    }
  }
if(isset ($_GET['knowledge_level']) && isset($_GET['q_id'])  ){
    $kl = $_GET['knowledge_level'];
    $q_id = $_GET['q_id'];

    $update_flashcardStack ="UPDATE flashcards SET knowledge_level = '$kl' where id = '$q_id'";
    mysqli_query($conn, $update_flashcardStack);

    $flashcardStack ="SELECT * FROM flashcards WHERE id = '$q_id'";
    }

$result= mysqli_query($conn, $flashcardStack);
$row = mysqli_fetch_array($result);
$knowledge_level = $row['knowledge_level'];
echo($row['knowledge_level']);
?>

  <div class="container w-50 mt-5 mb-5">
    <div class="row justify-content-center align-items-baseline mt-10">
    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
      
    <label onclick="changestate(1); updateKnowledge_level();" class="btn btn-outline-primary new" id="radio1" value="1" for="btn-check1" ><input type="checkbox" class="btn-check new"  value="1" autocomplete="off">Level 1</label>

    <label onclick="changestate(2)" class="btn btn-outline-primary new" id="radio2" value="2" for="btn-check2" ><input type="checkbox" class="btn-check new" value="2" autocomplete="off">Level 2</label>

    <label onclick="changestate(3)" class="btn btn-outline-primary new" id="radio3" value="3" for="btn-check3" ><input type="checkbox" class="btn-check new" value="3" autocomplete="off">Level 3</label>

    <label onclick="changestate(4)" class="btn btn-outline-primary new" id="radio4" value="4" for="btn-check4" ><input type="checkbox" class="btn-check new" value="4" autocomplete="off">Level 4</label>

    <label onclick="changestate(5)" class="btn btn-outline-primary new" id="radio5" value="5" for="btn-check5" ><input type="checkbox" class="btn-check new" value="5" autocomplete="off">Level 5</label>
  </div>
      <div class="w-50 d-flex justify-content-around">
        <p>1 Lowest</p><p>Knowledge Level:</p><p>5 highest</p></div> 
        <div class="text-center mt-5">
          <a class="btn btn-primary text-center w-25" href="./practice.php">Next</a>
        </div>

  </div>
</div>
  <div class="container h-90 mt-2 mb-4">
    <div class="row h-90 justify-content-center ">
      <div class="col-md-4 h-90 ">
        <div class="card mx-auto h-90 rounded">
          <div class="card-body">
            <div class="card-header text-center "><h3>Question</h3></div>
            <code><?php echo $row['question']; ?></code>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card mx-auto rounded ">
          <div class="card-body">
          <div class="card-header text-center "><p><h3>Answer</h3></p></div>
            <p><code><?php echo $row['answer']; ?></code></p>
          </div>
        </div>
    </div>
  </div>
</div>

<script>


var criteria = <?php echo $knowledge_level; ?>
// console.log(criteria);

  $(document).ready(function() {
      switch (criteria) {
      case 1 :
        $("#radio1").addClass("btn-primary");
        $("#radio1").removeClass("btn-outline-primary");
        break;
      case 2 :
        $("#radio2").addClass("btn-primary");
        $("#radio2").removeClass("btn-outline-primary");
        break;
      case 3 :
        $("#radio3").addClass("btn-primary");
        $("#radio3").removeClass("btn-outline-primary");
        break;
      case 4 :
        $("#radio4").addClass("btn-primary");
        $("#radio4").removeClass("btn-outline-primary");
        break;
      case 5 :
        $("#radio5").addClass("btn-primary");
        $("#radio5").removeClass("btn-outline-primary");
        break;
      default:
        $('#radio1').addClass('active');
    }
  });

  function changestate(value) {
    var selectedValue = value;
    var q_id = <?php echo $row['id'];?>;

    location.href = '/flashcardPHP4/views/practice.php?q_id='+q_id+'&knowledge_level='+value;
    };
</script>