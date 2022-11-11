<?php
include('includes/header.php');  
include('includes/connaction.php'); 

?>
<?php
if (isset($_POST["submit"]))
{

  
    
    $image= $_FILES['image']['name'];
    $path="team_img/".basename($_FILES['image']['name']);
    $name=$_POST['name'];
    $designation=$_POST['designation'];
    $skype=$_POST['skype'];
    $Instagram=$_POST['Instagram'];
    $twitter=$_POST['twitter'];
    $facebook=$_POST['facebook'];
   
    
   $sql="INSERT INTO `tbl_team` (`image`,`name`,`designation`,`skype`,`Instagram`,`twitter`,`facebook`) 
   VALUES ('$image','$name','$designation','$skype','$Instagram','$twitter','$facebook')";
    $query_run = mysqli_query($connectiondb,$sql); 


            if($query_run)
            {
              move_uploaded_file($_FILES['image']['tmp_name'],$path);
              move_uploaded_file($_FILES['shape_image']['tmp_name'],$path1);
              move_uploaded_file($_FILES['shape_image2']['tmp_name'],$path2);
                $_SESSION['status'] = "Team Added";
                $_SESSION['status_code'] = "success";
                header("location:add_team.php");
                
            }
            else 
            {
                $_SESSION['status'] = "Team Not Added";
                $_SESSION['status_code'] = "error";
                header("location:add_team.php");
                
            }
        }

      


?>


<div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add team </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="add_team.php" method="POST" enctype="multipart/form-data" > 

        <div class="modal-body">

        <div class="form-group">
      
                    <input type="file" name="image" class="form-control p-1" required >
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" >
                    <input type="text" name="designation" class="form-control" placeholder="Enter Designation" >
                    <input type="text" name="skype" class="form-control" placeholder="Enter Skype Link" >
                    <input type="text" name="Instagram" class="form-control" placeholder="Enter Instagram Link" >
                    <input type="text" name="twitter" class="form-control" placeholder="Enter Twitter Link" >
                    <input type="text" name="facebook" class="form-control" placeholder="Enter Facebook Link" >
            
                   
                   
                    
                </div>
            </div>
             <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
            </div>
            </form>


    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Add Team
      <hr>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image">
            Add Team
            </button>
    </h1>
  </div>

  <div class="card-body">
    
    <?php
        if(isset($_SESSION['success'])&& $_SESSION['success']!='')
        {
          echo '<h2 class="bg-primary text-white">'.$_SESSION['success'].'</h2>';
          unset($_SESSION['success']);
        }
        if(isset($_SESSION['status'])&& $_SESSION['status']!='')
        {
          echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
          unset($_SESSION['status']);
        }
    
?>

    <div class="table-responsive">
<?php 

 

        $query="SELECT * FROM  tbl_team";
       $query_run=mysqli_query($connectiondb,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Skype</th>
            <th>Instagram</th>
            <th>Twitter</th>
            <th>Facebook</th>
            <th>EDIT</th>
            <th>DELETE</th>
            
          </tr>
        </thead>
        <tbody>
          <?php
         // if (mysqli_num_row($query_run)>0)
          {
            while ($row=mysqli_fetch_assoc($query_run))
            {
              ?>
     
          <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <img src="team_img/<?php echo $row["image"]; ?>"  witdh="100%" height="80px" alt="">  </td>
            <td> <?php echo $row['name']; ?> </td>
            <td> <?php echo $row['designation']; ?> </td>
            <td> <?php echo $row['skype']; ?> </td>
            <td> <?php echo $row['Instagram']; ?> </td>
            <td> <?php echo $row['twitter']; ?> </td>
            <td> <?php echo $row['facebook']; ?> </td>
        
            <td>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <a href="edit_team.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button></a>

            </td>


            <td>
            <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
            <a href="delete_team.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
            </td>

          </tr>
          <?php
          } }
          //else{
            //echo "No Record Found";
          
     ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/footer.php');
?>