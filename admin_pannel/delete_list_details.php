<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 


    $id = $_GET["id"];

    $query="DELETE  FROM tbl_services_details WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Service Details is Deleted";
      header('Location: add_service_details.php');
    }else
    {
        $_SESSION['status']="Your Service Details Not Deleted";
        header('Location: add_service_details.php');
    }


?>


<?php

//include('includes/footer.php');
?>
