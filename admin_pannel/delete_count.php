<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 


    $id = $_GET["id"];

    $query="DELETE  FROM tbl_count WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Count is Deleted";
      header('Location: add_count.php');
    }else
    {
        $_SESSION['status']="Your Count Not Deleted";
        header('Location: add_count.php');
    }


?>


<?php

//include('includes/footer.php');
?>
