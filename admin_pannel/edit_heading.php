<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_heading_btn']))
{
  $id=$_GET["id"];
  $phone_no=$_POST['phone_no'];
  $email=$_POST['email'];
  $Image= $_FILES['image']['name'];
  $path="heading_img/".basename($_FILES['image']['name']);
  $service_hours=$_POST['service_hours'];
  $address=$_POST['address'];
  $Image2= $_FILES['image2']['name'];
  $path2="heading_img2/".basename($_FILES['image2']['name']);

  if (!empty($_FILES["image"]["name"]))
  {
   $query = "UPDATE `tbl_heading` SET `phone_no` = '$phone_no', `email` = '$email',`Image`='$Image',`service_hours`='$service_hours',`address`='$address' WHERE `id` = '$id'"; 
  } 
  elseif(!empty($_FILES["image2"]["name"]))
  {
  $query = "UPDATE `tbl_heading` SET `phone_no` = '$phone_no', `email` = '$email',`service_hours`='$service_hours',`address`='$address',`image2`='$Image2' WHERE `id` = '$id'"; 
  
  }
$query = "UPDATE `tbl_heading` SET `phone_no` = '$phone_no', `email` = '$email',`service_hours`='$service_hours',`address`='$address' WHERE `id` = '$id'";  

  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
    move_uploaded_file($_FILES['image']['tmp_name'],$path);
    move_uploaded_file($_FILES['image2']['tmp_name'],$path2);
      $_SESSION['status'] = "Heading updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_heading.php');
  }
  else 
  {
      $_SESSION['status'] = "Heading Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_heading.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Heading
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_heading WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_heading.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data" >
            
              
            <div class="form-group">
                <label > Edit Heading </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
                <input type="text" name="phone_no" class="form-control" value="<?php echo $row['phone_no']; ?>" >
                <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" >
                <img src="heading_img/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="image" class="from-control p-1" >
                <input type="text" name="service_hours" class="form-control" value="<?php echo $row['service_hours']; ?>" >  
                <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>" >  
                <img src="heading_img2/<?php echo $row["image2"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="image2" class="from-control p-1" >
                   
                    </div>
                 <a href="add_heading.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_heading_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>