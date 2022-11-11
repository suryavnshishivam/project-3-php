<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 



    $id = $_GET["id"];

    $query="DELETE  FROM tbl_about WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your About Deatils is Deleted";
      header('Location: add_about.php');
    }else
    {
        $_SESSION['status']="Your About Deatils is Not Deleted";
        header('Location: add_about.php');
    }


?>


<?php

//include('includes/footer.php');
?>
