<?php
include('includes/header.php'); 
include('includes/connaction.php'); 


?>

  <div class="ml-5">
   <h1 class="m-0 font-weight-bold text-primary"> Dashboard
     </h1>
     </div>
  
  <!-- Content Row -->
  <div class="row">

    <!-- Total Food Tyep -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h6><a href="add_meta_tag.php">Total Meta Tag</a></h6></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

                  <?php
                    require 'dbconfig.php';

                  $query="SELECT meta_id FROM meta_tag ORDER BY meta_id";
                  $query_run=mysqli_query($connectiondb,$query);

                  $row = mysqli_num_rows($query_run);
                  echo '<h6>Total Meta Tag:'.$row.'</h6>';
                  
                  ?>




              </div>
            </div>
            <div class="col-auto">
            
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Admin-->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><h6><a href="add_admin.php">Total Admin</a></h6></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"></div>

              <?php
                   require 'dbconfig.php';

                  $query="SELECT id FROM admin_tbl ORDER BY id";
                 $query_run=mysqli_query($connectiondb,$query);

                  $row = mysqli_num_rows($query_run);
                  echo '<h6>Total Admin:'.$row.'</h6>';
                  
                  ?>
            </div>
            <div class="col-auto">
            
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Area-->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6><a href="add_banner.php">Total Banner</a></h6></div>
              <?php
                   require 'dbconfig.php';

                  $query1="SELECT id FROM tbl_banner ORDER BY id";
                 $query_run1=mysqli_query($connectiondb,$query1);

                  $row = mysqli_num_rows($query_run1);
                  echo '<h6>Total Banner:'.$row.'</h6>';
                  
                  ?>
              
            </div>
            <div class="col-auto">
            
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Banner -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h6><a href="add_blog.php">Total  Blog </a></h6></div>
              
              <?php
                   require 'dbconfig.php';

                  $query="SELECT 	id FROM tbl_blog ORDER BY id";
                 $query_run=mysqli_query($connectiondb,$query);

                  $row = mysqli_num_rows($query_run);
                  echo '<h6>Total Blog:'.$row.'</h6>';
                  
                  ?>
            </div>
            <div class="col-auto">
           
            </div>
          </div>
        </div>
      </div>
    </div>
 

  
    <!-- Banner Type -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6><a href="add_brand_logo.php">Total Brand</a></h6></div>
              <?php
                   require 'dbconfig.php';

                  $query="SELECT id FROM tbl_brand ORDER BY id";
                 $query_run=mysqli_query($connectiondb,$query);

                  $row = mysqli_num_rows($query_run);
                  echo '<h6>Total Brand:'.$row.'</h6>';
                  
                  ?>
              
            </div>
            <div class="col-auto">
           
            </div>
          </div>
        </div>
      </div>
    </div>

 
  

    <!-- Total Categories -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><h6><a href="manage_comment.php">Total Comment</a></h6></div>
              
              <?php
                   require 'dbconfig.php';

                  $query="SELECT id FROM tbl_comment ORDER BY id";
                 $query_run=mysqli_query($connectiondb,$query);

                  $row = mysqli_num_rows($query_run);
                  echo '<h6>Total Comment:'.$row.'</h6>';
                  
                  ?>
            </div>
            <div class="col-auto">
        
            </div>
          </div>
        </div>
      </div>
    </div>
  
 
  
  
    <!-- Total City-->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h6><a href="index.php">Total Contact</a></h6></div>
              
              <?php
                   require 'dbconfig.php';

                  $query="SELECT id  FROM tbl_contact ORDER BY id ";
                 $query_run=mysqli_query($connectiondb,$query);

                  $row = mysqli_num_rows($query_run);
                  echo '<h6>Total Contact:'.$row.'</h6>';
                  
                  ?>
            </div>
            <div class="col-auto">
      
            </div>
          </div>
        </div>
      </div>
    </div>
  
 
  
      <!-- Total Driver-->
      <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><h6><a href="header_setting.php">Total Pages</a></h6> </div>
              
              <?php
                   require 'dbconfig.php';

                  $query="SELECT id FROM tbl_menu ORDER BY id";
                 $query_run=mysqli_query($connectiondb,$query);

                  $row = mysqli_num_rows($query_run);
                  echo '<h6>Total Pages:'.$row.'</h6>';
                  
                  ?>
            </div>
            <div class="col-auto">
       
            </div>
          </div>
        </div>
      </div>
    </div>
  
 
  
  
   <!-- testimonial Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h6><a href="add_portfolio.php">Total Portfolio </a></h6></div>
              
              <?php
                   require 'dbconfig.php';

                  $query="SELECT id FROM tbl_portfolio ORDER BY id";
                 $query_run=mysqli_query($connectiondb,$query);

                  $row = mysqli_num_rows($query_run);
                  echo '<h6>Total Portfolio:'.$row.'</h6>';
                  
                  ?>
            </div>
            <div class="col-auto">
           
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Total Coupan -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h6><a href="add_services.php">Total Services </a></h6></div>
              
              <?php
                   require 'dbconfig.php';

                  $query="SELECT id FROM tbl_service ORDER BY id";
                 $query_run=mysqli_query($connectiondb,$query);

                  $row = mysqli_num_rows($query_run);
                  echo '<h6>Total Services:'.$row.'</h6>';
                  
                  ?>
            </div>
            <div class="col-auto">
           
            </div>
          </div>
        </div>
      </div>
    </div>
  
   <!-- Notification -->
   <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h6><a href="add_team.php">Total Team </a></h6></div>
              
              <?php
                   require 'dbconfig.php';

                  $query="SELECT id FROM tbl_team ORDER BY id";
                 $query_run=mysqli_query($connectiondb,$query);

                  $row = mysqli_num_rows($query_run);
                  echo '<h6>Total Team :'.$row.'</h6>';
                  
                  ?>
            </div>
            <div class="col-auto">
           
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Payment Method -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h6><a href="add_testimonial.php">Total Testimonial </a></h6></div>
              
              <?php
                   require 'dbconfig.php';

                  $query="SELECT id FROM tbl_testimonial ORDER BY id";
                 $query_run=mysqli_query($connectiondb,$query);

                  $row = mysqli_num_rows($query_run);
                  echo '<h6>Total Testimonial:'.$row.'</h6>';
                  
                  ?>
            </div>
            <div class="col-auto">
           
            </div>
          </div>
        </div>
      </div>
    </div>
  
   <!-- All Resturent -->
   <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h6><a href="add_choosing_information.php">Total About C.I </a></h6></div>
              
              <?php
                   require 'dbconfig.php';

                  $query="SELECT id FROM tbl_choosing_information ORDER BY id";
                 $query_run=mysqli_query($connectiondb,$query);

                  $row = mysqli_num_rows($query_run);
                  echo '<h6>Total About C.I:'.$row.'</h6>';
                  
                  ?>
            </div>
            <div class="col-auto">
           
            </div>
          </div>
        </div>
      </div>
    </div>


     <!-- All User-->
     <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h6><a href="add_hire.php">Total Hire</a></h6></div>
              
              <?php
                   require 'dbconfig.php';

                  $query="SELECT 	id FROM tbl_hire ORDER BY 	id";
                 $query_run=mysqli_query($connectiondb,$query);

                  $row = mysqli_num_rows($query_run);
                  echo '<h6>Total Hire:'.$row.'</h6>';
                  
                  ?>
            </div>
            <div class="col-auto">
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
 

  <?php

include('includes/footer.php');
?>

  






