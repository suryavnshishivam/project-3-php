<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 



    $id = $_GET["id"];

    $query="DELETE  FROM tbl_banner WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Banner is Deleted";
      header('Location: add_banner.php');
    }else
    {
        $_SESSION['status']="Your Banner is Not Deleted";
        header('Location: add_banner.php');
    }


?>


<?php

//include('includes/footer.php');
?>
