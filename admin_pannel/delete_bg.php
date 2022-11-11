<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 


    $id = $_GET["id"];

    $query="DELETE  FROM tbl_bg_image WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your BG Image is Deleted";
      header('Location: edit_bg.php');
    }else
    {
        $_SESSION['status']="Your BG Image Not Deleted";
        header('Location: edit_bg.php');
    }


?>


<?php

//include('includes/footer.php');
?>
