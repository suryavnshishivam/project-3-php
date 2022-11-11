
<?php require('security.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> UB Softec| Admin Panel</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  
<!-- Sidebar -->
<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

<div>
<?php
$result_header_imgage=$connectiondb->query("SELECT *  FROM tbl_heading");
      while ($header_logo = mysqli_fetch_assoc($result_header_imgage)) {
               ?>
                
 <a class="collapse-item " href="index.php"><img src="heading_img/<?= $header_logo['image']; ?>" alt="" height="120px" width="224px">
<?php  }?>
</div>


<br class="bg-white">
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

 <span>Top </span>
</a>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
 <div class=" py-2 collapse-inner rounded">
 <a class="collapse-item" href="index.php">Dashboard</a>
  <a class="collapse-item" href="add_admin.php">Add Admin</a>
  <a class="collapse-item" href="header_setting.php">Manage Header</a>
  <a class="collapse-item" href="add_meta_tag.php">Manage Meta Tags</a>
  <a class="collapse-item" href="add_heading.php">Manage Heading</a>
  <a class="collapse-item" href="add_banner.php">Manage Banner</a>
  <a class="collapse-item" href="add_about.php">Manage About</a>
  <a class="collapse-item" href="add_services.php">Manage Services</a>
  <a class="collapse-item" href="add_hire.php">Manage Hire</a>
  <a class="collapse-item" href="add_choosing.php">Manage Choosing</a>
  <a class="collapse-item" href="add_choosing_information.php"> Choosing Information</a>
  <a class="collapse-item" href="add_team.php">Manage Team</a>
 </div>
</div>    
</li>
<br class="bg-white">
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">

 <span>General & Add</span>
</a>
<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
 <div class=" py-2 collapse-inner rounded">
 <a class="collapse-item" href="add_list_portfolio.php">Portfolio List</a>
 <a class="collapse-item" href="add_portfolio.php"> Manage Portfolio </a>
 <a class="collapse-item" href="add_testimonial.php"> Manage Testimonial </a>
 <a class="collapse-item" href="add_blog.php"> Manage Blog </a>
 <a class="collapse-item" href="add_brand_logo.php"> Manage Brand Logo </a>
 <a class="collapse-item" href="manage_comment.php"> Manage Comment </a>
 <a class="collapse-item" href="add_count.php"> Manage About Counts </a>
 <a class="collapse-item" href="add_list_service.php"> Manage List Service </a>
 <a class="collapse-item" href="add_service_question.php"> Manage Service Q/A </a>
 <a class="collapse-item" href="add_service_details.php"> Manage Service Details </a>
 <a class="collapse-item" href="add_portfolio_details_list.php"> Portfolio Details List </a>
 <a class="collapse-item" href="add_bg.php"> BG Image  </a>


 </div>
</div>
</li>

<br><br>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

  

     <!-- Topbar -->
  
     <nav class="navbar navbar-expand  navbar-light bg-light topbar mb-4 static-top shadow">

       <!-- Sidebar Toggle (Topbar) -->
       <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
         <i class="fa fa-bars"></i>
       </button>

      

       <!-- Topbar Navbar -->
       <ul class="navbar-nav ml-auto">

        
         

        
        
         <!-- Nav Item - User Information -->
         <li class="nav-item dropdown no-arrow">
           <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="mr-2 d-none d-lg-inline text-gray-600 small">
           
             
          <?php echo $_SESSION['name'];?>
               
             </span>
             <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
           </a>
           <!-- Dropdown - User Information -->
           <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
             <a class="dropdown-item" href="#">
               <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
               Profile
             </a>
             <a class="dropdown-item" href="#">
               <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
               Settings
             </a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
               
               <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
               Logout
             </a>
           </div>
         </li>

       </ul>

     </nav>
     <!-- End of Topbar -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
 <i class="fas fa-angle-up"></i>
</a>


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">×</span>
       </button>
     </div>
     <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
     <div class="modal-footer">
       <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

       <form action="logout.php" method="POST"> 
       
         <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

       </form>


     </div>
   </div>
 </div>
</div>