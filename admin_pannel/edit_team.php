<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_team_btn']))
{
    $id=$_GET["id"];
    $image= $_FILES['image']['name'];
    $path="team_img/".basename($_FILES['image']['name']);
    $name=$_POST['name'];
    $designation=$_POST['designation'];
    $skype=$_POST['skype'];
    $Instagram=$_POST['Instagram'];
    $twitter=$_POST['twitter'];
    $facebook=$_POST['facebook'];
 

  if (!empty($_FILES["image"]["name"]))
  {
   $query = "UPDATE `tbl_team` SET `image` = '$image',`name`='$name',`designation`='$designation',`skype`='$skype',`Instagram`='$Instagram',`twitter`='$twitter',`facebook`='$facebook' WHERE `id` = '$id'";  
 } 
 else
 {

   $query = "UPDATE `tbl_team` SET `name`='$name',`designation`='$designation',`skype`='$skype',`Instagram`='$Instagram',`twitter`='$twitter',`facebook`='$facebook' WHERE `id` = '$id'";  
 }

    $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
    move_uploaded_file($_FILES['image']['tmp_name'],$path);
      $_SESSION['status'] = "Team Member updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_team.php');
  }
  else 
  {
      $_SESSION['status'] = "Team Member Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_team.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Team
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_team WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_team.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data" >
            
              
            <div class="form-group">
                <label > Edit Team  </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
               
                <img src="team_img/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="image" class="from-control p-1" > <br>
                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" > 
                <input type="text" name="designation" class="form-control" value="<?php echo $row['designation']; ?>" >  
                <input type="text" name="skype" class="form-control" value="<?php echo $row['skype']; ?>" >  
                <input type="text" name="Instagram" class="form-control" value="<?php echo $row['Instagram']; ?>" > 
                <input type="text" name="twitter" class="form-control" value="<?php echo $row['twitter']; ?>" > 
                <input type="text" name="facebook" class="form-control" value="<?php echo $row['facebook']; ?>" > 
                   
                    </div>
                 <a href="add_team.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_team_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>