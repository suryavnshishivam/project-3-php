<?php
include('includes/header.php'); 
 
include('includes/connaction.php'); 

?>

<?php
if(isset($_POST['admin_btn']))
{

    $id=$_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  

 
   $query = "UPDATE `admin_tbl` SET  `username`='$username',`password`='$password' WHERE `id` = '$id'"; 
  
   $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   


      $_SESSION['status'] = "Admin Profile updated";
      $_SESSION['status_code'] = "success";
      header("location:add_admin.php");
  }
  else 
  {
      $_SESSION['status'] = "Admin Profile  Not updated";
      $_SESSION['status_code'] = "error";
      header("location:add_admin.php");
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Admim
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM admin_tbl WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

<form action="edit_admin.php?id=<?php echo $row['id']; ?>" method="POST" >

<div class="modal-body">

    <div class="form-group">
        <label> Name </label>
        <input type="text" name="username" class="form-control" placeholder="Enter your Name" value="<?php echo $row['username']; ?>">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter your Password" value="<?php echo $row['password']; ?>">
    </div>
   

</div>
<div class="modal-footer">
    <a href="add_admin.php" class="btn btn-danger" > Cancel</a>  
    <button type="submit" name="admin_btn" class="btn btn-primary">Save</button>
</div>
</form>

                <?php }?>











<?php

include('includes/footer.php');
?>