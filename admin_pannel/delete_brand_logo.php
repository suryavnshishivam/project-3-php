<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 



    $id = $_GET["id"];

    $query="DELETE  FROM tbl_brand WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Brand Logo is Deleted";
      header('Location: add_brand_logo.php');
    }else
    {
        $_SESSION['status']="Your Brand Logo is Not Deleted";
        header('Location: add_brand_logo.php');
    }


?>


<?php

//include('includes/footer.php');
?>
