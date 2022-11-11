<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_list_btn']))
{
  $id=$_GET["id"];
  $list_name=$_POST['list_name'];
 

 
    $query = "UPDATE `tbl_list_service` SET  `list_name` = '$list_name' WHERE `id` = '$id'";  
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
  
      $_SESSION['status'] = "Service  List updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_list_service.php');
  }
  else 
  {
      $_SESSION['status'] = "Service List Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_list_service.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit List Name
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_list_service WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_list_service.php?id=<?php echo $row['id']; ?>" method="POST"  >
            
              
            <div class="form-group">
                <label > Edit List </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            
                <input type="text" name="list_name" class="form-control" value=  "<?php echo $row['list_name']; ?>" > 
                   
                    </div>
                 <a href="add_list_service.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_list_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>