<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_hire_btn']))
{
  $id=$_GET["id"];
  $Image= $_FILES['image']['name'];
  $path="hire_bg/".basename($_FILES['image']['name']);
  $heading=$_POST['heading'];
 

  if (!empty($_FILES["image"]["name"]))
  {
   $query = "UPDATE `tbl_hire` SET `image` = '$Image', `heading` = '$heading' WHERE `id` = '$id'";  
 } 
  else
  {

    $query = "UPDATE `tbl_hire` SET  `heading` = '$heading' WHERE `id` = '$id'";    

  }
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
    move_uploaded_file($_FILES['image']['tmp_name'],$path);
      $_SESSION['status'] = "Hire updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_hire.php');
  }
  else 
  {
      $_SESSION['status'] = "Hire Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_hire.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Hire
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_hire WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_hire.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data" >
            
              
            <div class="form-group">
                <label > Edit Hire </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
               
                <img src="hire_bg/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="image" class="from-control p-1" >
                <input type="text" name="heading" class="form-control" value="<?php echo $row['heading']; ?>" > 
               
                   
                    </div>
                 <a href="add_hire.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_hire_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>