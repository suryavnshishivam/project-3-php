<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 



    $id = $_GET["id"];

    $query="DELETE  FROM tbl_comment WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Comment is Deleted";
      header('Location: manage_comment.php');
    }else
    {
        $_SESSION['status']="Your Comment is Not Deleted";
        header('Location: manage_comment.php');
    }


?>


<?php

//include('includes/footer.php');
?>
