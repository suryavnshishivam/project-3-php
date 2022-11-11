<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_details_btn']))
{
  $id=$_GET["id"];
  
 
  $title=$_POST['title'];
  $text=$_POST['text'];
 
 

 
    $query = "UPDATE `tbl_services_details` SET  `title` = '$title' ,`text`='$text' WHERE `id` = '$id'";  
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
  
      $_SESSION['status'] = "Service Details updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_service_details.php');
  }
  else 
  {
      $_SESSION['status'] = "Service Details Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_service_details.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Deatils
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_services_details WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_service_details.php?id=<?php echo $row['id']; ?>" method="POST"  >
            
              
            <div class="form-group">
                <label > Edit Deatils </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            
                <input type="text" name="title" class="form-control" value=  "<?php echo $row['title']; ?>" > 
                <input type="text" name="text" class="form-control" value=  "<?php echo $row['text']; ?>" > 
                   
                    </div>
                 <a href="add_service_details.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_details_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>