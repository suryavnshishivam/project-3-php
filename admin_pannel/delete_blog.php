<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 



    $id = $_GET["id"];

    $query="DELETE  FROM tbl_blog WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Blog is Deleted";
      header('Location: add_blog.php');
    }else
    {
        $_SESSION['status']="Your Blog is Not Deleted";
        header('Location: add_blog.php');
    }


?>


<?php

//include('includes/footer.php');
?>
