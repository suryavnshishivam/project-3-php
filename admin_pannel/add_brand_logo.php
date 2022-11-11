<?php
include('includes/header.php');  
include('includes/connaction.php'); 

?>
<?php
if (isset($_POST["submit"]))
{

  
    
    $brand_logo= $_FILES['brand_logo']['name'];
    $path="brand_logo_img/".basename($_FILES['brand_logo']['name']);
    $brand_logo1= $_FILES['brand_logo1']['name'];
    $path1="brand_logo_img/".basename($_FILES['brand_logo1']['name']);
      
   $sql="INSERT INTO `tbl_brand` (`brand_logo`,`brand_logo1`)   VALUES ('$brand_logo','$brand_logo1')";
    $query_run = mysqli_query($connectiondb,$sql); 

            if($query_run)
            {
              move_uploaded_file($_FILES['brand_logo1']['tmp_name'],$path);
              move_uploaded_file($_FILES['brand_logo']['tmp_name'],$path);
                $_SESSION['status'] = "Brand Logo Added";
                $_SESSION['status_code'] = "success";
                header("location:add_brand_logo.php");
                
            }
            else 
            {
                $_SESSION['status'] = "Banner Not Added";
                $_SESSION['status_code'] = "error";
                header("location:add_brand_logo.php");
                
            }
        }

      


?>


<div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Brand Logo </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="add_brand_logo.php" method="POST" enctype="multipart/form-data" > 

        <div class="modal-body">

        <div class="form-group">
      
                    <input type="file" name="brand_logo" class="form-control p-1" required >
                    <input type="file" name="brand_logo1" class="form-control p-1" required >
                                 
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
    <h1 class="m-0 font-weight-bold text-primary"> Add Brand logo
      <hr>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image">
            Add brand logo
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

 

        $query="SELECT * FROM  tbl_brand";
       $query_run=mysqli_query($connectiondb,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Brand Logo 1</th>
            <th>Brand Logo 2</th>
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
            <td> <img src="brand_logo_img/<?php echo $row["brand_logo"]; ?>"  witdh="100%" height="80px" alt="">  </td>    
            <td> <img src="brand_logo_img/<?php echo $row["brand_logo1"]; ?>"  witdh="100%" height="80px" alt="">  </td>    
          
            <td>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <a href="edit_brand_logo.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button></a>

            </td>


            <td>
            <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
            <a href="delete_brand_logo.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
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