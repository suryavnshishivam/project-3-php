<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_services_btn']))
{
  $id=$_GET["id"];
 
  $logo= $_FILES['logo']['name'];
  $path="service_logo/".basename($_FILES['logo']['name']);
  $title=$_POST['title'];
  $text=$_POST['text'];
 

  if (!empty($_FILES["logo"]["name"]))
  {
   $query = "UPDATE `tbl_service` SET  `logo` = '$logo',`title`='$title',`text`='$text' WHERE `id` = '$id'";  
 } 
  else
  {
    $query = "UPDATE `tbl_service` SET `title`='$title',`text`='$text' WHERE `id` = '$id'"; 
  
  }
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
    move_uploaded_file($_FILES['logo']['tmp_name'],$path);
      $_SESSION['status'] = "Service updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_services.php');
  }
  else 
  {
      $_SESSION['status'] = "Service Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_services.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Services
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_service WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_services.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data" >
            
              
            <div class="form-group">
                <label > Edit Services </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
                <img src="service_logo/<?php echo $row["logo"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="logo" class="from-control p-1" >
                <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" >  
                <input type="text" name="text" class="form-control" value="<?php echo $row['text']; ?>" > 
                   
                    </div>
                 <a href="add_services.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_services_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>