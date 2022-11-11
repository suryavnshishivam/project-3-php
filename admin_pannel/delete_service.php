<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 



    $id = $_GET["id"];

    $query="DELETE  FROM tbl_service WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Service is Deleted";
      header('Location: add_services.php');
    }else
    {
        $_SESSION['status']="Your Service is Not Deleted";
        header('Location: add_services.php');
    }


?>


<?php

//include('includes/footer.php');
?>
