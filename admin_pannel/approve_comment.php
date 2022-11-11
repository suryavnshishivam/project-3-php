<?php
include('includes/header.php'); 
include('includes/connaction.php'); 

?>

<?php 
  
if (isset($_GET["id"])){
    $id = $_GET["id"];
    
    
    $sql ="UPDATE tbl_comment SET status ='ON'  WHERE id='$id'";
    $Execute= $connectiondb->query($sql);
    
    if($Execute)
    {
     
   
        $_SESSION['status'] = "Approved ";
        $_SESSION['status_code'] = "success";
        header('location:manage_comment.php');
    }
    else 
    {
        $_SESSION['status'] = "Approved Not ";
        $_SESSION['status_code'] = "error";
        header('location:manage_comment.php');
    }
   
  }
?>




<?php
include('includes/scripts.php');
include('includes/footer.php');
?>