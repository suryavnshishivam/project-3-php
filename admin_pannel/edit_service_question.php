<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_question_btn']))
{
  $id=$_GET["id"];
  
  $question=$_POST['question'];
  $answer=$_POST['answer'];
 
 

 
    $query = "UPDATE `tbl_service_questions` SET  `question` = '$question' ,`answer`='$answer' WHERE `id` = '$id'";  
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
  
      $_SESSION['status'] = "Service  Question/Answers updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_service_question.php');
  }
  else 
  {
      $_SESSION['status'] = "Service Question/Answers Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_service_question.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Question/Answer
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_service_questions WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_service_question.php?id=<?php echo $row['id']; ?>" method="POST"  >
            
              
            <div class="form-group">
                <label > Edit Question/Answer </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            
                <input type="text" name="question" class="form-control" value=  "<?php echo $row['question']; ?>" > 
                <input type="text" name="answer" class="form-control" value=  "<?php echo $row['answer']; ?>" > 
                   
                    </div>
                 <a href="add_service_question.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_question_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>