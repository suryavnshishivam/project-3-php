<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_about_btn']))
{
  $id=$_GET["id"];
  $image= $_FILES['image']['name'];
  $path1="about_image/".basename($_FILES['image']['name']);
  $logo= $_FILES['logo']['name'];
  $path2="about_logo/".basename($_FILES['logo']['name']);
  $logo_title=$_POST['logo_title'];
  $image2= $_FILES['image2']['name'];
  $path3="about_img-2/".basename($_FILES['image2']['name']);
  $about_heading=$_POST['about_heading'];
  $about_text=$_POST['about_text'];
  $list_title=$_POST['list_title'];
  $list_title2=$_POST['list_title2'];
  $list_text=$_POST['list_text'];
  $list_text2=$_POST['list_text2'];
  $about_bio=$_POST['about_bio'];
 
   
  $about_heading= str_replace("'","\'",$about_heading);
  $about_text= str_replace("'","\'",$about_text);
  if (!empty($_FILES["image"]["name"]))
  {
   $query = "UPDATE `tbl_about` SET `image` = '$image', `logo_title`='$logo_title',
   `about_heading`='$about_heading',`about_text`='$about_text',`list_title`='$list_title',`list_title2`='$list_title2',
   `list_text`='$list_text',`list_text2`='$list_text2',`about_bio`='$about_bio' WHERE `id` = '$id'";  
 } 
  elseif(!empty($_FILES["logo"]["name"]))
  {

    $query = "UPDATE `tbl_about` SET  `logo` = '$logo',`logo_title`='$logo_title',
   `about_heading`='$about_heading',`about_text`='$about_text',`list_title`='$list_title',`list_title2`='$list_title2',
   `list_text`='$list_text',`list_text2`='$list_text2',`about_bio`='$about_bio' WHERE `id` = '$id'";    

  }
  elseif(!empty($_FILES["image2"]["name"]))
  {
    $query = "UPDATE `tbl_about` SET `logo_title`='$logo_title',`image2`='$image2',
    `about_heading`='$about_heading',`about_text`='$about_text',`list_title`='$list_title',`list_title2`='$list_title2',
    `list_text`='$list_text',`list_text2`='$list_text2',`about_bio`='$about_bio' WHERE `id` = '$id'";    
  }
  else{
    $query = "UPDATE `tbl_about` SET `logo_title`='$logo_title',`about_heading`='$about_heading',`about_text`='$about_text',`list_title`='$list_title',`list_title2`='$list_title2',
    `list_text`='$list_text',`list_text2`='$list_text2',`about_bio`='$about_bio' WHERE `id` = '$id'";   
  }
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
    move_uploaded_file($_FILES['image']['tmp_name'],$path1);
    move_uploaded_file($_FILES['logo']['tmp_name'],$path2);
    move_uploaded_file($_FILES['image2']['tmp_name'],$path3);
      $_SESSION['status'] = "About updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_about.php');
  }
  else 
  {
      $_SESSION['status'] = "About Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_about.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit about
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_about WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_about.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data" >
            
              
            <div class="form-group">
                <label > Edit about </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                
                    <img src="about_image/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                    <input type="file" name="image" class="form-control p-1" >
                    <img src="about_logo/<?php echo $row["logo"]; ?>"  witdh="100%" height="100" alt="">
                    <input type="file" name="logo" class="form-control p-1">
                    <input type="text" name="logo_title" class="form-control" value="<?php echo $row['logo_title']; ?>"  >
                    <img src="about_img-2/<?php echo $row["image2"]; ?>"  witdh="100%" height="100" alt="">
                    <input type="file" name="image2" class="form-control p-1"  >
                    <input type="text" name="about_heading" class="form-control" value="<?php echo $row['about_heading']; ?>"  >
                    <input type="text" name="about_text" class="form-control" value="<?php echo $row['about_text']; ?>"  >
                    <input type="text" name="list_title" class="form-control" value="<?php echo $row['list_title']; ?>"  >
                    <input type="text" name="list_title2" class="form-control" value="<?php echo $row['list_title2']; ?>"  >
                    <input type="text" name="list_text" class="form-control" value="<?php echo $row['list_text']; ?>" >
                    <input type="text" name="list_text2" class="form-control" value="<?php echo $row['list_text2']; ?>" >
                    <input type="text" name="about_bio" class="form-control" value="<?php echo $row['about_bio']; ?>" >
                    </div>
                 <a href="add_about.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_about_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>