<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_banner_btn']))
{
  $id=$_GET["id"];
  $Image= $_FILES['image']['name'];
  $path="banner_img/".basename($_FILES['image']['name']);
  $head=$_POST['head'];
  $title=$_POST['title'];
 

  if (!empty($_FILES["image"]["name"]))
  {
   $query = "UPDATE `tbl_banner` SET `image` = '$Image', `head` = '$head',`title`='$title' WHERE `id` = '$id'";  
 } 
  else
  {

    $query = "UPDATE `tbl_banner` SET  `head` = '$head',`title`='$title' WHERE `id` = '$id'";    

  }
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
    move_uploaded_file($_FILES['image']['tmp_name'],$path);
      $_SESSION['status'] = "Banner updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_banner.php');
  }
  else 
  {
      $_SESSION['status'] = "Banner Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_banner.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit banner
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_banner WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_banner.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data" >
            
              
            <div class="form-group">
                <label > Edit banner </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
               
                <img src="banner_img/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="image" class="from-control p-1" >
                <input type="text" name="head" class="form-control" value="<?php echo $row['head']; ?>" > 
                <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" >  
                   
                    </div>
                 <a href="add_banner.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_banner_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>