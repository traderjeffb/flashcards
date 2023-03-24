
<?php
include_once('../inc/header.php');
include_once('../inc/dbh.php');
include_once('../inc/navbar.php');
?>



<div class="container text-center d-flex justify-content-lg-center">

<form class="justify-content-center" id="my-form" action="../inc/send.php" method="POST">

  <div class="font-weight-bold center text-center ">
    <?php
      $message = "";
      if (isset($_GET['message'])){
        $message = ($_GET['message']);
      ?>
       <div class="message" ><?php echo $message; ?></div>
    <?php } ?>
  </div>

  <div class="font-weight-bold center text-center "><label>Low<- Knowledge Level ->High</label></div>
    <div class="radio-toolbar" value="1">
      <input type="radio" id="knowledge_level1" name="knowledge_level" value="1">
      <label for="knowledge_level1">1</label>

      <input type="radio" id="knowledge_level2" name="knowledge_level" value="2" >
      <label for="knowledge_level2">2</label>

      <input type="radio" id="knowledge_level3" name="knowledge_level" value="3" >
      <label for="knowledge_level3">3</label> 

      <input type="radio" id="knowledge_level4" name="knowledge_level" value="4" >
      <label for="knowledge_level4">4</label> 
      <input type="radio" id="knowledge_level5" name="knowledge_level" value="5" >
      <label for="knowledge_level5">5</label> 
    </div>
    <div class="maincontainer center">
      <div class="thecard">
        <div class="thefront"><h1>Question</h1>
          <textarea class="m-1 p-2 rounded " rows="12" cols="25" type="image" name="question" placeholder="enter the question here" style="border-style:solid; border-width:medium;" autofocus> 
          </textarea><p class="pb-4">Scroll down to fill in answer</p>
        </div>
      </div>
      <div class="thecard">
        <div class="theback"><h1>Answer</h1>
          <textarea class="m-1 p-2 rounded " rows="12" cols="25" type="image" name="answer" placeholder="enter the answer here" style="border-style:solid; border-width:medium;">
          </textarea>
        </div>
      </div>
    </div>
    <div class="pt-3">
      <label for="category">Choose a category:</label>
            <select name="category" id="category">
              <option value="default">---</option>
              <option value="php">PHP</option>
              <option value="laravel">Laravel</option>
              <option value="javascript">JS</option>
              <option value="javascript">Zend</option>
            </select><br>
    </div>
  <div><button type="submit">Submit</button></div>
</form>