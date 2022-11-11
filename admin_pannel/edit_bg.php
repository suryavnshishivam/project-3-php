<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_bg_about_btn']))
{
  $id=$_GET["id"];
  $Image= $_FILES['image']['name'];
  $path="bg_about/".basename($_FILES['image']['name']);
  $heading=$_POST['heading'];
 

  if (!empty($_FILES["image"]["name"]))
  {
   $query = "UPDATE `tbl_bg_image` SET `image` = '$Image', `heading` = '$heading' WHERE `id` = '$id'";  
 } 
  else
  {

    $query = "UPDATE `tbl_bg_image` SET  `heading` = '$heading' WHERE `id` = '$id'";    

  }
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
    move_uploaded_file($_FILES['image']['tmp_name'],$path);
      $_SESSION['status'] = "Bg_About updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_bg.php');
  }
  else 
  {
      $_SESSION['status'] = "Bg_About Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_bg.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Bg About
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_bg_image WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_bg.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data" >
            
              
            <div class="form-group">
                <label > Edit BG </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
               
                <img src="bg_about/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="image" class="from-control p-1" >
                <input type="text" name="heading" class="form-control" value="<?php echo $row['heading']; ?>" > 
               
                   
                    </div>
                 <a href="add_bg.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_bg_about_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>