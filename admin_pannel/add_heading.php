<?php
include('includes/header.php');  
include('includes/connaction.php'); 

?>
<?php
if (isset($_POST["submit"]))
{

  
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $Image= $_FILES['image']['name'];
    $path="heading_img/".basename($_FILES['image']['name']);
    $service_hours=$_POST['service_hours'];
    $address=$_POST['address'];
    $Image2= $_FILES['image2']['name'];
    $path2="heading_img2/".basename($_FILES['image2']['name']);
    
   
  
    
    
    
   $sql="INSERT INTO `tbl_heading` (`phone_no`,`email`,`image`,`service_hours`,`address`,`image2`) 
   VALUES ('$phone_no','$email','$Image','$service_hours','$address','$Image2')"; 
    $query_run = mysqli_query($connectiondb,$sql); 

    
    

            if($query_run)
            {
              move_uploaded_file($_FILES['image']['tmp_name'],$path);
              move_uploaded_file($_FILES['image2']['tmp_name'],$path2);
                $_SESSION['status'] = "Heding Added";
                $_SESSION['status_code'] = "success";
                header("location:add_heading.php");
                
            }
            else 
            {
                $_SESSION['status'] = "Heding Not Added";
                $_SESSION['status_code'] = "error";
                header("location:add_heading.php");
                
            }
        }

      


?>


<div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Heading </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="add_heading.php" method="POST" enctype="multipart/form-data" > 

        <div class="modal-body">

        <div class="form-group">
      
                    <input type="text" name="phone_no" class="form-control" placeholder="Enter Mobile No" >
                    <input type="text" name="email" class="form-control" placeholder="Enter Email Address" >
                    <input type="file" name="image" class="form-control p-1" required >
                    <input type="text" name="service_hours" class="form-control" placeholder="Enter Service Hours" >
                    <input type="text" name="address" class="form-control" placeholder="Enter address" >
                    <input type="file" name="image2" class="form-control p-1" required >
                   
                   
                    
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
    <h1 class="m-0 font-weight-bold text-primary"> Add Heading
      <hr>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image">
            Add Heading
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

 

        $query="SELECT * FROM  tbl_heading";
       $query_run=mysqli_query($connectiondb,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Phone No</th>
            <th>Email</th>
            <th>Image</th>
            <th>Service Hours</th>
            <th>Address</th>
            <th>Logo Footer</th>
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
            <td> <?php echo $row['phone_no']; ?> </td>
            <td> <?php echo $row['email']; ?> </td>
            <td> <img src="heading_img/<?php echo $row["image"]; ?>"  witdh="100%" height="80px" alt="">  </td>
            <td> <?php echo $row['service_hours']; ?> </td>
            <td> <?php echo $row['address']; ?> </td>
            <td> <img src="heading_img2/<?php echo $row["image2"]; ?>"  witdh="100%" height="80px" alt="">  </td>


         
          
     
            
            
          
            <td>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <a href="edit_heading.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button></a>

            </td>


            <td>
            <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
            <a href="delete_heading.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
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