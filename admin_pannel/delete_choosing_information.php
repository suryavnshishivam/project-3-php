<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 


    $id = $_GET["id"];

    $query="DELETE  FROM tbl_choosing_information WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Choosing_information is Deleted";
      header('Location: add_choosing_information.php');
    }else
    {
        $_SESSION['status']="Your Choosing_information Not Deleted";
        header('Location: add_choosing_information.php');
    }


?>


<?php

//include('includes/footer.php');
?>
