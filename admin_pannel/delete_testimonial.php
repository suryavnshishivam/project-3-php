<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 



    $id = $_GET["id"];

    $query="DELETE  FROM tbl_testimonial WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Testimonial is Deleted";
      header('Location: add_testimonial.php');
    }else
    {
        $_SESSION['status']="Your Testimonial is Not Deleted";
        header('Location: add_testimonial.php');
    }


?>


<?php

//include('includes/footer.php');
?>
