<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_brand_logo_btn']))
{
  $id=$_GET["id"];
  $brand_logo1= $_FILES['brand_logo1']['name'];
    $path1="brand_logo_img/".basename($_FILES['brand_logo1']['name']);
    $brand_logo= $_FILES['brand_logo']['name'];
    $path="brand_logo_img/".basename($_FILES['brand_logo']['name']);
 

  
   $query = "UPDATE `tbl_brand` SET `brand_logo1` = '$brand_logo1',`brand_logo` = '$brand_logo' WHERE `id` = '$id'";  

  
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
    move_uploaded_file($_FILES['brand_logo1']['tmp_name'],$path1);
    move_uploaded_file($_FILES['brand_logo']['tmp_name'],$path);
      $_SESSION['status'] = "Brand Logo updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_brand_logo.php');
  }
  else 
  {
      $_SESSION['status'] = "Brand Logo Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_brand_logo.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Brand Logo
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_brand WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_brand_logo.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data" >
            
              
            <div class="form-group">
                <label > Edit Brand Logo </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
               
                <img src="brand_logo_img/<?php echo $row["brand_logo"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="brand_logo" class="from-control p-1" >
                <img src="brand_logo_img/<?php echo $row["brand_logo1"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="brand_logo1" class="from-control p-1" >
                
                   
                    </div>
                 <a href="add_brand_logo.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_brand_logo_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>