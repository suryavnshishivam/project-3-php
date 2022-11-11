<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>
<?php 



    $id = $_GET["id"];

    $query="DELETE  FROM tbl_team WHERE id='$id'"; 
    $query_run=mysqli_query($connectiondb,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Team Member is Deleted";
      header('Location: add_team.php');
    }else
    {
        $_SESSION['status']="Your Team Member is Not Deleted";
        header('Location: add_team.php');
    }


?>


<?php

//include('includes/footer.php');
?>
