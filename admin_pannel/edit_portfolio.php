<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php
if(isset($_POST['update_portfolio_btn']))
{
  $id=$_GET["id"];
  $Image= $_FILES['image']['name'];
    $path="img_portfolio/".basename($_FILES['image']['name']);
    $list_name=$_POST['list_name'];
    $text=$_POST['text'];
    $list_link=$_POST['list_link'];
    $discraption=$_POST['discraption'];
 

  if (!empty($_FILES["image"]["name"]))
  {
   $query = "UPDATE `tbl_portfolio` SET `image` = '$Image', `list_name` = '$list_name',`text`='$text', `list_link` = '$list_link',`discraption`='$discraption' WHERE `id` = '$id'";  
 } 
  else
  {

    $query = "UPDATE `tbl_portfolio` SET  `list_name` = '$list_name',`text`='$text',`list_link` = '$list_link',`discraption`='$discraption' WHERE `id` = '$id'";    

  }
  $query_run=mysqli_query($connectiondb,$query);  

  if($query_run)
  {
   
    move_uploaded_file($_FILES['image']['tmp_name'],$path);
      $_SESSION['status'] = "Portfolio updated";
      $_SESSION['status_code'] = "success";
      $_SESSION['status_code'] = "success";
      header('Location: add_portfolio.php');
  }
  else 
  {
      $_SESSION['status'] = "Portfolio Not updated";
      $_SESSION['status_code'] = "error";
      $_SESSION['status_code'] = "success";
      header('Location: add_portfolio.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Portfolio
           
    </h1>
  </div>

   <div class="card-body">

  <?php    


    $id= $_GET["id"];
    $query="SELECT * FROM tbl_portfolio WHERE id='{$id}'";
    $query_run=mysqli_query($connectiondb, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_portfolio.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data" >
            
              
            <div class="form-group">
                <label > Edit Portfolio </label>
           

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
               
                <img src="img_portfolio/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="image" class="from-control p-1" >
                <select class="form-control" id="projectlist" name="list_name">
                <?php $sql="SELECT * FROM  tbl_list_portfolio";
                  $stmt=$connectiondb->query($sql);
                  while ($DataRows=mysqli_fetch_assoc($stmt))
               {
                  $id=$DataRows["id"]; 
                  
                $list_name=$DataRows["list_name"];?>
                <option> <?php  echo $list_name; ?> </option>
                <?php } ?>
                <input type="text" name="text" class="form-control" value="<?php echo $row['text']; ?>" >  
                <select class="form-control" id="projectlist" name="list_link">
                    <?php $sql="SELECT * FROM  tbl_list_portfolio";
                  $stmt=$connectiondb->query($sql);
                  while ($DataRows=mysqli_fetch_assoc($stmt))
               {
                  $id=$DataRows["id"]; 
                  
                $list_link=$DataRows["list_link"];?>
                <option> <?php  echo $list_link; ?> </option>
                <?php } ?>
               </select>
                <input type="text" name="discraption" class="form-control" value="<?php echo $row['discraption']; ?>" >  
                   
                    </div>
                    </div>
                 <a href="add_portfolio.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_portfolio_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php

//include('includes/footer.php');
?>