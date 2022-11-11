<?php    
//connacting files 
    $connectiondb= mysqli_connect("localhost","root","","ubsoftec");
?>


<?php 
// select query all tables 

$result_tab_menu=$connectiondb->query("SELECT *  FROM tbl_menu");
$result_heading=$connectiondb->query("SELECT *  FROM tbl_heading");

?>


<?php 
	// define page status 
    {
        $page_status="true";
        $path="../";
    }
?>




<?php
// meta tag fetching 
$url=basename($_SERVER['REQUEST_URI']);

//GET META TAG
$metaqury="SELECT * FROM meta_tag where meta_url='$url'"; 
$metaares=mysqli_query($connectiondb,$metaqury);
$metarow=mysqli_num_rows($metaares);
$meta_data=mysqli_fetch_array($metaares);

$meta_title='';
$meta_keyword='';
$meta_description='';
$meta_status='';

if ($metarow>0)
{
    $meta_title=$meta_data['meta_title'];
    $meta_keyword=$meta_data['meta_keyword'];
    $meta_description=$meta_data['meta_description'];
    $meta_status=$meta_data['meta_status'];
} else
{
    //you can fetch defult index.php from database
    $meta_title='Dyanamic Meta Tag';
    $meta_keyword='Dyanamic Meta Tag';
    $meta_description='Dyanamic Meta Tag';
    $meta_status='Dyanamic Meta Tag';
}


?>


<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from www.devsnews.com/template/growbiz/growbiz/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Nov 2021 17:14:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo  $meta_title ?></title>
    <meta name="meta_keyword" content="<?php echo $meta_keyword ?>"/>
    <meta name="meta_description" content="<?php echo $meta_description ?>" />
    <meta name="meta_status" content="<?php echo $meta_status ?>" />
    

    <link rel="manifest" href="site.php">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/custom-animation.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- header area start  -->
    <header>
        <div class="header__top d-none d-md-block header__top-2">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-9 col-md-8">
                        <div class="grb__cta header-cta st-2">
                        <?php
                    while ($Heading = mysqli_fetch_assoc($result_heading)) {
                    ?>
                            <ul>
                            <!-- // class="d-none"  -->
                                <li class="d-none"> 
                                    <div class="cta__icon">
                                        <span><i class="fas fa-phone-alt"></i></span>
                                    </div>
                                    <div class="cta__content">
                                        <p>Call Us:</p>
                                        <span><?php echo $Heading['phone_no']; ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="cta__icon">
                                        <span><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <div class="cta__content">
                                        <p>Mail Us:</p>
                                        <span><?php echo $Heading['email']; ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="cta__icon">
                                        <span><i class="fas fa-clock"></i></span>
                                    </div>
                                    <div class="cta__content">
                                        <p>Service Hours</p>
                                        <span><?php echo $Heading['service_hours']; ?></span>
                                    </div>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="grb__social f-right st-2">
                            <ul>
                                <li><a href="https://www.facebook.com/ubsoftec"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/UBSoftec"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/ub_softec"><i class="fab fa-instagram"></i></a></li>
                                <!-- <li><a class="lin" href="https://www.linkedin.com/company/77753798/admin"><i class="fab fa-linkedin"></i></a></li> -->
                                <li><a href="https://in.pinterest.com/ubsoftec"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                            <svg class="social-bg-1" xmlns="http://www.w3.org/2000/svg" width="280.537" height="70.101"
                                viewBox="0 0 280.537 70.101">
                                <path id="Path_2990" data-name="Path 2990"
                                    d="M-2528,1049.1v-45a25,25,0,0,1,25-25h195v70Zm220-70.063h53.591c-49.1,1.284-53.591,35.063-53.591,35.063Zm60.5.026h0Zm0,0h0Zm-.009,0h0Zm-.017,0h0Zm-.009,0h0Zm0,0h0Zm0,0h0Zm-.016,0h0Zm-.025,0h0Zm-.01,0h0Zm-.047,0h0Zm-.005,0h0Zm-.015,0h0Zm-.01,0h0Zm0,0h0Zm-.132,0,.132,0Zm0,0h0Zm-.094,0,.094,0Zm-.013,0h0Zm-.061,0,.061,0Zm-.039,0h0Zm-.038,0h0Zm-.245-.006h-.251c-.412-.011-.125,0,.163,0l.373.01Zm-.011,0h0Zm-.024,0h0Zm-.115,0h0Zm.335.008h0Zm-.087,0,.087,0Zm-.013,0h0Zm-.084,0,.084,0Zm0,0h0Zm-.085,0h0Zm-.12,0h0Zm-.046,0h-5.863c1.889-.049,3.839-.051,5.863,0Z"
                                    transform="translate(2528 -979)" fill="#ff6e01" />
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__main header-sticky header-main-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-8">
                        <div class="logo">
                            <a class="logo-text-white" href="index.php"><img src="admin_pannel/heading_img/<?= $Heading['image']; ?>"
                                    alt="" ></a>
                                    <a class="logo-text-black" href="index.php"><img src="admin_pannel/heading_img/<?= $Heading['image']; ?>"
                                    alt="" ></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-9 col-4">
                        <div class="header__menu-area f-right">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                    <?php
                   
                   $qry="SELECT * FROM tbl_menu where visibility_status=0 order by position_order ASC";				 
                       $result=mysqli_query($connectiondb,$qry); 
               
                        while($row=mysqli_fetch_array($result))
                        {
                       ?>
                       
                    <li ><a class="nav-item nav-link" href="<?php if($page_status=='true')?> <?php echo $row['page_link'];?>?id=<?php echo $row['id']; ?>"><?php echo $row['page_name'];?></a></li>
                    
                       
                   <?php } ?>                
                                      </ul>
                                </nav>
                            </div>
                          
                            <div class="header__btn d-none">
                                <a href="#" class="grb-btn">Get Reserved<i class="fas fa-arrow-right"></i></a>
                            </div>
                            <ul class="menu-cta-2 d-none d-xl-inline-block">
                                <li class="">
                                    <div class="cta__icon">
                                        <span><i class="fas fa-phone-alt"></i></span>
                                    </div>
                                    <div class="cta__content">
                                        <p>Call For Estimate</p>
                                        <span><?php echo $Heading['phone_no']; ?></span>
                                    </div>
                                </li>
                            </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
   
  