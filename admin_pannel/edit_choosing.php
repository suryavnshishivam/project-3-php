<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_choosing_btn']))
{
  $id=$_GET["id"];
  $image= $_FILES['image']['name'];
  $path="image_choosing/".basename($_FILES['image']['name']);
  $logo= $_FILES['logo']['name'];
  $path1="img_logo_chossing/".basename($_FILES['logo']['name']);
  $logo_title=$_POST['logo_title'];
  $total_logo_subscribed=$_POST['total_logo_subscribed'];
  $title=$_POST['title'];
  $heading=$_POST['heading'];
 

  if (!empty($_FILES["image"]["name"]))
  {
   $query = "UPDATE `tbl_choosing` SET `image` = '$image',`logo_title`='$logo_title',
   `total_logo_subscribed`='$total_logo_subscribed',`title`='$title',`heading`='$heading' WHERE `id` = '$id'";  
 } 
 elseif(!empty($_FILES["logo"]["name"]))
 {
    $query = "UPDATE `tbl_choosing` SET  `logo` = '$logo',`logo_title`='$logo_title',
    `total_logo_subscribed`='$total_logo_subscribed',`title`='$title',`heading`='$heading' WHERE `id` = '$id'";  
 }
  else
  {

    $query = "UPDATE `tbl_choosing` SET  `logo_title`='$logo_title',
    `total_logo_subscribed`='$total_logo_subscribed',`title`='$title',`heading`='$heading' WHERE `id` = '$id'"; 

  }
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
    move_uploaded_file($_FILES['image']['tmp_name'],$path);
    move_uploaded_file($_FILES['logo']['tmp_name'],$path1);
      $_SESSION['status'] = "Choosing updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_choosing.php');
  }
  else 
  {
      $_SESSION['status'] = "Choosing Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_choosing.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Choosing
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_choosing WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_choosing.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data" >
            
              
            <div class="form-group">
                <label > Edit Choosing </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
               
                <img src="image_choosing/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="image" class="from-control p-1" >
                <img src="img_logo_chossing/<?php echo $row["logo"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="logo" class="from-control p-1" >
                <input type="text" name="logo_title" class="form-control" value="<?php echo $row['logo_title']; ?>" > 
                <input type="text" name="total_logo_subscribed" class="form-control" value="<?php echo $row['total_logo_subscribed']; ?>" >  
                <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" >  
                <input type="text" name="heading" class="form-control" value="<?php echo $row['heading']; ?>" > 
                   
                    </div>
                 <a href="add_choosing.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_choosing_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>