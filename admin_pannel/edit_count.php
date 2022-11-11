<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_count_btn']))
{
  $id=$_GET["id"];
  $icon=$_POST["icon"];
  $name=$_POST['name'];
  $count=$_POST['count'];
 

 

    $query = "UPDATE `tbl_count` SET `icon`='$icon', `name` = '$name',`count`='$count' WHERE `id` = '$id'";    

 
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
  
      $_SESSION['status'] = "Count updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_count.php');
  }
  else 
  {
      $_SESSION['status'] = "Count Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_count.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Count
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_count WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_count.php?id=<?php echo $row['id']; ?>" method="POST"  >
            
              
            <div class="form-group">
                <label > Edit Count </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
               
             
                <input type="text" name="icon" class="form-control" value="<?php echo $row['icon']; ?>" > 
                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" > 
                <input type="text" name="count" class="form-control" value="<?php echo $row['count']; ?>" >  
                   
                    </div>
                 <a href="add_count.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_count_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>