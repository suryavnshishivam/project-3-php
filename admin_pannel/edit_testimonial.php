<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_testmonial_btn']))
{
  $id=$_GET["id"];
  $Image= $_FILES['image']['name'];
    $path="testimonial_img/".basename($_FILES['image']['name']);
    $text=$_POST['text'];
    $name=$_POST['name'];
    $designation=$_POST['designation'];
 

  if (!empty($_FILES["image"]["name"]))
  {
    $query = "UPDATE `tbl_testimonial` SET `image` = '$Image', `text` = '$text',`name`='$name',`designation`='$designation' WHERE `id` = '$id'";  
 } 
  else
  {
    $query = "UPDATE `tbl_testimonial` SET  `text` = '$text',`name`='$name',`designation`='$designation' WHERE `id` = '$id'";  
    

  }
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
    move_uploaded_file($_FILES['image']['tmp_name'],$path);
      $_SESSION['status'] = "Testimonial updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_testimonial.php');
  }
  else 
  {
      $_SESSION['status'] = "Testimonial Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_testimonial.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Testimonial
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_testimonial WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_testimonial.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data" >
            
              
            <div class="form-group">
                <label > Edit Testimonial </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
               
                <img src="testimonial_img/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="image" class="from-control p-1" >
                <input type="text" name="text" class="form-control" value="<?php echo $row['text']; ?>" > 
                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" >  
                <input type="text" name="designation" class="form-control" value="<?php echo $row['designation']; ?>" >  
                   
                    </div>
                 <a href="add_testimonial.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_testmonial_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>