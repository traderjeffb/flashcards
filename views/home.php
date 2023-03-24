
<?php
include_once('../inc/header.php');
include_once('../inc/dbh.php');
include_once('../inc/navbar.php');
?>

<div class="container w-90 text-center" >
  <table class="table table-bordered mt-5" style="background-color: #f7f7f7;">
    <thead class="text-center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Question</th>
        <th scope="col">Answer</th>
        <th scope="col">Category</th>
        <th scope="col">Knowledge Level</th>
        <th scope="col">Change</th>
      </tr>
    </thead>
    <?php
        $sql="SELECT * FROM flashcards";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        $nameList= mysqli_fetch_assoc($result); 
        if ($resultCheck > 0){
          while($row= mysqli_fetch_assoc($result)){

            echo"<tr>";
              echo"<td >"; echo $row['id']; echo"</td>";
              echo"<td >"; echo $row['question']; echo"</td>";
              echo"<td data-label>"; echo $row['answer']; echo"</td>";
              echo"<td data-label>"; echo $row['category']; echo"</td>";
              echo"<td data-label >"; echo $row['knowledge_level']; echo"</td>";
              echo"<td data-label>"?><a href="edit.php?id=<?php echo$row['id'];?>" >Edit&nbsp&nbsp</a>
              <a href="delete.php?id=<?php echo$row['id'];?>" >Delete</a><?php echo"</td>";
            echo"</tr>";
          }
        }
        ?>
  </table>
</div>