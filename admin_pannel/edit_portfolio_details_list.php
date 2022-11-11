<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['Update_portfolio_details_list']))
{
  $id=$_GET["id"];

    $title=$_POST['title'];
    $text=$_POST['text'];
    $sn=$_POST['sn'];
   
 

 
    $query = "UPDATE `tbl_portfolio_list` SET  `title` = '$title',`text`='$text',`sn`='$sn' WHERE `id` = '$id'";    

  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
      $_SESSION['status'] = "Portfolio Details List updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_portfolio_details_list.php');
  }
  else 
  {
      $_SESSION['status'] = "Portfolio  Details List Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_portfolio_details_list.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Details List
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_portfolio_list WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_portfolio_details_list.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data" >
            
              
            <div class="form-group">
                <label > Edit Portfolio </label>
           

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
               
               
                <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" >  
                
                <input type="text" name="text" class="form-control" value="<?php echo $row['text']; ?>" >  
                <input type="text" name="sn" class="form-control" value="<?php echo $row['sn']; ?>" >  
                   
                    </div>
                    </div>
                 <a href="add_portfolio_details_list.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="Update_portfolio_details_list" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>