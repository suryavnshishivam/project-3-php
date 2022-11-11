<?php
 session_start();
 ob_start();
 $connectiondb=mysqli_connect("localhost","root","","ubsoftec");

if($connectiondb)
{
 //echo "Database Connected";
}
else
{
    header("Location: dbconfig.php");
}

if(!$_SESSION['name'])
{
    header('Location: login.php');
}

?>