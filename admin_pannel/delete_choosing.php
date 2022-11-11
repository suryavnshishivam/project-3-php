<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 


    $id = $_GET["id"];

    $query="DELETE  FROM tbl_choosing WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Choosing is Deleted";
      header('Location: add_choosing.php');
    }else
    {
        $_SESSION['status']="Your Choosing Not Deleted";
        header('Location: add_choosing.php');
    }


?>


<?php

//include('includes/footer.php');
?>
