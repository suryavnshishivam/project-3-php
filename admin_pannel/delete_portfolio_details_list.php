<?php
include('includes/header.php'); 
 
include('includes/connactiondb.php'); 

?>
<?php 



    $id = $_GET["id"];

    $query="DELETE  FROM tbl_portfolio_list WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Portfolio Detils List is Deleted";
      header('Location: add_portfolio_details_list.php');
    }else
    {
        $_SESSION['status']="Your  Portfolio Detils List is Not Deleted";
        header('Location: add_portfolio_details_list.php');
    }


?>


<?php

//include('includes/footer.php');
?>
