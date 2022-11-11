<?php
include('includes/header.php');  
include('includes/connaction.php'); 

?>
<?php
if (isset($_POST["submit"]))
{

  
    
    $Image= $_FILES['image']['name'];
    $path="blog_image/".basename($_FILES['image']['name']);
    $blog_categories=$_POST['blog_categories'];
    $heading=$_POST['heading'];
    $date=$_POST['date'];
    $text=$_POST['text'];
   
    
   $sql="INSERT INTO `tbl_blog` (`image`,`blog_categories`,`heading`,`date`,`text`) 
   VALUES ('$Image','$blog_categories','$heading','$date','$text')";
    $query_run = mysqli_query($connectiondb,$sql); 

    
    

            if($query_run)
            {
              move_uploaded_file($_FILES['image']['tmp_name'],$path);
                $_SESSION['status'] = "Blog Added";
                $_SESSION['status_code'] = "success";
                header("location:add_blog.php");
                
            }
            else 
            {
                $_SESSION['status'] = "Blog Not Added";
                $_SESSION['status_code'] = "error";
                header("location:add_blog.php");
                
            }
        }

      


?>


<div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Blog </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="add_blog.php" method="POST" enctype="multipart/form-data" > 

        <div class="modal-body">

        <div class="form-group">
      
                    <input type="file" name="image" class="form-control p-1" required >
                    <input type="text" name="blog_categories" class="form-control" placeholder="Enter Blog Categories" >
                    <input type="text" name="heading" class="form-control" placeholder="Enter Heading" >
                    <input type="text" name="date" class="form-control" placeholder="Select Date" >
                    <input type="text" name="text" class="form-control" placeholder="Enter Text" >
            
                   
                   
                    
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
    <h1 class="m-0 font-weight-bold text-primary"> Add Blog
      <hr>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image">
            Add Blog
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

 

        $query="SELECT * FROM  tbl_blog";
       $query_run=mysqli_query($connectiondb,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Blog Categories</th>
            <th>Heading</th>
            <th>Date</th>
            <th>Text</th>
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
            <td> <img src="blog_image/<?php echo $row["image"]; ?>"  witdh="100%" height="80px" alt="">  </td>
            <td> <?php echo $row['blog_categories']; ?> </td>
            <td> <?php echo $row['heading']; ?> </td>
            <td> <?php echo $row['date']; ?> </td>
            <td> <?php echo $row['text']; ?> </td>
         
          
     
            
            
          
            <td>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <a href="edit_blog.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button></a>

            </td>


            <td>
            <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
            <a href="delete_blog.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
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