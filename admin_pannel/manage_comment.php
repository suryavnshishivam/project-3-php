<?php
include('includes/header.php');  
include('includes/connaction.php'); 

?>
<h1 class="bg-yellow"> Manage Comment</h1>
    <div class="table-responsive">
<?php 

 

        $query="SELECT * FROM  tbl_comment WHERE status='OFF' ORDER BY  id desc";
       $query_run=mysqli_query($connectiondb,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Comment</th>
            <th>Date</th>
            <th>Approve</th>
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
            <td> <img src="comment_img/<?php echo $row["image"]; ?>"  witdh="100%" height="80px" alt="">  </td>  
            <td> <?php echo $row['name']; ?> </td>
            <td> <?php echo $row['email']; ?> </td>
            <td> <?php echo $row['comment']; ?> </td>  
            <td> <?php echo $row['date']; ?> </td>  
          
            <td>

            
<a href="approve_comment.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="approve" class="btn btn-success"> Approve</button></a>

</td>
            <td>
            <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
            <a href="delete_comment.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
            </td>

          </tr>
          <?php
          } }
          //else{
            //echo "No Record Found";
          
     ?>
        
        </tbody>
      </table>

   
   <br><br><br>
<!-- /.container-fluid -->


<h1 class="bg-yellow"> Manage Comment </h1>
    <div class="table-responsive">
<?php 

 

        $query="SELECT * FROM  tbl_comment WHERE status='ON' ORDER BY  id desc";
       $query_run=mysqli_query($connectiondb,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Comment</th>
            <th>Date</th>
            <th>Dis-Approve</th>
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
            <td> <img src="comment_img/<?php echo $row["image"]; ?>"  witdh="100%" height="80px" alt="">  </td>  
            <td> <?php echo $row['name']; ?> </td>
            <td> <?php echo $row['email']; ?> </td>
            <td> <?php echo $row['comment']; ?> </td>  
            <td> <?php echo $row['date']; ?> </td>  
          
            <td>

           
<a href="Dis-approve_comment.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="Dis-approve" class="btn btn-dark"> Dis-Approve</button></a>

</td>
            <td>
            <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
            <a href="delete_comment.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
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