<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 



    $id = $_GET["id"];

    $query="DELETE  FROM tbl_hire WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Hire is Deleted";
      header('Location: add_hire.php');
    }else
    {
        $_SESSION['status']="Your Hire is Not Deleted";
        header('Location: add_hire.php');
    }


?>


<?php

//include('includes/footer.php');
?>
