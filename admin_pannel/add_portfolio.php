<?php
include('includes/header.php');  
include('includes/connaction.php'); 

?>
<?php
if (isset($_POST["submit"]))
{

  
    
    $Image= $_FILES['image']['name'];
    $path="img_portfolio/".basename($_FILES['image']['name']);
    $list_name=$_POST['list_name'];
    $text=$_POST['text'];
    $list_link=$_POST['list_link'];
    $discraption=$_POST['discraption'];
   
    
   $sql="INSERT INTO `tbl_portfolio` (`image`,`list_name`,`text`,`list_link`,`discraption`) 
   VALUES ('$Image','$list_name','$text','$list_link','$discraption')";
    $query_run = mysqli_query($connectiondb,$sql); 

    
    

            if($query_run)
            {
              move_uploaded_file($_FILES['image']['tmp_name'],$path);
                $_SESSION['status'] = "Portfolio Added";
                $_SESSION['status_code'] = "success";
                header("location:add_portfolio.php");
                
            }
            else 
            {
                $_SESSION['status'] = "Portfolio Not Added";
                $_SESSION['status_code'] = "error";
                header("location:add_portfolio.php");
                
            }
        }

      


?>


<div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Portfolio </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="add_portfolio.php" method="POST" enctype="multipart/form-data" > 

        <div class="modal-body">

        <div class="form-group">
      
                    <input type="file" name="image" class="form-control p-1" required >
                    <select class="form-control" id="projectlist" name="list_name">
                    <?php $sql="SELECT * FROM  tbl_list_portfolio";
                  $stmt=$connectiondb->query($sql);
                  while ($DataRows=mysqli_fetch_assoc($stmt))
               {
                  $id=$DataRows["id"]; 
                  
                $list_name=$DataRows["list_name"];?>
                <option> <?php  echo $list_name; ?> </option>
                <?php } ?>
               </select>
                    <input type="text" name="text" class="form-control" placeholder="Enter Text" >
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
               <input type="text" name="discraption" class="form-control" placeholder="Enter discraption" >
            
                   
                    
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
    <h1 class="m-0 font-weight-bold text-primary"> Add Portfolio
      <hr>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image">
            Add Portfolio
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

 

        $query="SELECT * FROM  tbl_portfolio";
       $query_run=mysqli_query($connectiondb,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>List Name</th>
            <th>Text</th>
            <th>List Link</th>
            <th>Discraption</th>
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
            <td> <img src="img_portfolio/<?php echo $row["image"]; ?>"  witdh="100%" height="80px" alt="">  </td>
            <td> <?php echo $row['list_name']; ?> </td>
            <td> <?php echo $row['text']; ?> </td>
            <td> <?php echo $row['list_link']; ?> </td>
            <td> <?php echo $row['discraption']; ?> </td>
         
          
     
            
            
          
            <td>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <a href="edit_portfolio.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button></a>

            </td>


            <td>
            <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
            <a href="delete_portfolio.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
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