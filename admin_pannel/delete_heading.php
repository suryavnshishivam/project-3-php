<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 


    $id = $_GET["id"];

    $query="DELETE  FROM tbl_heading WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your heading is Deleted";
      header('Location: add_heading.php');
    }else
    {
        $_SESSION['status']="Your heading Not Deleted";
        header('Location: add_heading.php');
    }


?>


<?php

//include('includes/footer.php');
?>
