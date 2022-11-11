<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_blog_btn']))
{
  $id=$_GET["id"];
  $Image= $_FILES['image']['name'];
  $path="blog_image/".basename($_FILES['image']['name']);
  $blog_categories=$_POST['blog_categories'];
  $heading=$_POST['heading'];
  $date=$_POST['date'];
  $text=$_POST['text'];

 

  if (!empty($_FILES["image"]["name"]))
  {
    $query = "UPDATE `tbl_blog` SET `image` = '$Image', `blog_categories` = '$blog_categories',`heading`='$heading',`date`='$date',`text`='$text' WHERE `id` = '$id'";  
 } 
  else
  {

    $query = "UPDATE `tbl_blog` SET `blog_categories` = '$blog_categories',`heading`='$heading',`date`='$date',`text`='$text' WHERE `id` = '$id'";  
   

  }
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
    move_uploaded_file($_FILES['image']['tmp_name'],$path);
      $_SESSION['status'] = "Blog updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_blog.php');
  }
  else 
  {
      $_SESSION['status'] = "Blog Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_blog.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Blog
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_blog WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_blog.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data" >
            
              
            <div class="form-group">
                <label > Edit blog </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
               
                <img src="blog_image/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="image" class="from-control p-1" >
                <input type="text" name="blog_categories" class="form-control" value="<?php echo $row['blog_categories']; ?>" > 
                <input type="text" name="heading" class="form-control" value="<?php echo $row['heading']; ?>" >  
                <input type="text" name="date" class="form-control" value="<?php echo $row['date']; ?>" >  
                <input type="text" name="text" class="form-control" value="<?php echo $row['text']; ?>" >  
                   
                    </div>
                 <a href="add_blog.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_blog_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>