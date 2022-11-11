<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 



    $id = $_GET["id"];

    $query="DELETE  FROM tbl_portfolio WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your portfolio is Deleted";
      header('Location: add_portfolio.php');
    }else
    {
        $_SESSION['status']="Your portfolio is Not Deleted";
        header('Location: add_portfolio.php');
    }


?>


<?php

//include('includes/footer.php');
?>
