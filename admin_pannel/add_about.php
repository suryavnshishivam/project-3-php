<?php
include('includes/header.php');  
include('includes/connaction.php'); 

?>
<?php
if (isset($_POST["submit"]))
{

  
    
    $image= $_FILES['image']['name'];
    $path1="about_image/".basename($_FILES['image']['name']);
    $logo= $_FILES['logo']['name'];
    $path2="about_logo/".basename($_FILES['logo']['name']);
    $logo_title=$_POST['logo_title'];
    $image2= $_FILES['image2']['name'];
    $path3="about_img-2/".basename($_FILES['image2']['name']);
    $about_heading=$_POST['about_heading'];
    $about_text=$_POST['about_text'];
    $list_title=$_POST['list_title'];
    $list_title2=$_POST['list_title2'];
    $list_text=$_POST['list_text'];
    $list_text2=$_POST['list_text2'];
    $about_bio=$_POST['about_bio'];
   
    $about_heading= str_replace("'","\'",$about_heading);
    $about_text= str_replace("'","\'",$about_text);
    $about_bio= str_replace("'","\'",$about_bio);
  
  $sql="INSERT INTO `tbl_about` (`image`,`logo`,`logo_title`,`image2`,`about_heading`,`about_text`,`list_title`,`list_title2`,`list_text`,`list_text2`,`about_bio`) 
   VALUES ('$image','$logo','$logo_title','$image2','$about_heading','$about_text','$list_title','$list_title2','$list_text','$list_text2','$about_bio')"; 
  
  $query_run = mysqli_query($connectiondb,$sql); 

    
    

            if($query_run)
            {
              move_uploaded_file($_FILES['image']['tmp_name'],$path1);
              move_uploaded_file($_FILES['logo']['tmp_name'],$path2);
              move_uploaded_file($_FILES['image2']['tmp_name'],$path3);
                $_SESSION['status'] = "About Added";
                $_SESSION['status_code'] = "success";
                header("location:add_about.php");
                
            }
            else 
            {
                $_SESSION['status'] = "About Not Added";
                $_SESSION['status_code'] = "error";
                header("location:add_about.php");
                
            }
        }

      


?>


<div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add about </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="add_about.php" method="POST" enctype="multipart/form-data" > 

        <div class="modal-body">

        <div class="form-group">
      
                    <input type="file" name="image" class="form-control p-1" >
                    <input type="file" name="logo" class="form-control p-1" >
                    <input type="text" name="logo_title" class="form-control" placeholder="Enter Logo Title" >
                    <input type="file" name="image2" class="form-control p-1"  >
                    <input type="text" name="about_heading" class="form-control" placeholder="Enter About Heading" >
                    <input type="text" name="about_text" class="form-control" placeholder="Enter About text" >
                    <input type="text" name="list_title" class="form-control" placeholder="Enter List Title" >
                    <input type="text" name="list_title2" class="form-control" placeholder="Enter List Title2" >
                    <input type="text" name="list_text" class="form-control" placeholder="Enter List Text" >
                    <input type="text" name="list_text2" class="form-control" placeholder="Enter List Text2" >
                    <input type="text" name="about_bio" class="form-control" placeholder="Enter About Bio" >
                  
            
                   
                   
                    
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
    <h1 class="m-0 font-weight-bold text-primary"> Add About
      <hr>
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image">
            Add About
            </button> -->
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

 

        $query="SELECT * FROM  tbl_about";
       $query_run=mysqli_query($connectiondb,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Logo</th>
            <th>Logo Title</th>
            <th>Image2</th>
            <th>About Heading</th>
            <th>About Text</th>
            <th>List Title</th>
            <th>List Title2</th>
            <th>List Text</th>
            <th>List Text2</th>
            <th>About Bio</th>
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
              $Id= $row["id"];           
                $text = $row["about_text"];
                $about_bio= $row["about_bio"];
              ?>
     
          <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <img src="about_image/<?php echo $row["image"]; ?>"  witdh="100%" height="80px" alt="">  </td>
            <td> <img src="about_logo/<?php echo $row["logo"]; ?>"  witdh="100%" height="80px" alt="">  </td>
            <td> <?php echo $row['logo_title']; ?> </td>
            <td> <img src="about_img-2/<?php echo $row["image2"]; ?>"  witdh="100%" height="80px" alt="">  </td>
            <td> <?php echo $row['about_heading']; ?> </td>
            <td> <?php 
            if (strlen($text)>3){ $text = substr($text,0,50).'..';} 
                           echo  $text; ?>     </td>
            <td> <?php echo $row['list_title']; ?> </td>
            <td> <?php echo $row['list_title2']; ?> </td>
            <td> <?php echo $row['list_text']; ?> </td>
            <td> <?php echo $row['list_text2']; ?> </td>  
            <td> <?php 
            if (strlen($about_bio)>3){ $about_bio = substr($about_bio,0,50).'..';} 
                           echo  $about_bio; ?>     </td>
              
             
          
            <td>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <a href="edit_about.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button></a>

            </td>


            <td>
            <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
            <a href="delete_about.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
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