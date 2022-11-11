<?php    
//connacting files 
require_once('includes/header.php'); 
require_once('includes/connaction.php'); 
?>


<?php 
// select query all tables 


$result_hire = $connectiondb->query("SELECT *  FROM tbl_hire");
$result_portfolio = $connectiondb->query("SELECT *  FROM tbl_portfolio limit 3,5");
$result_brand = $connectiondb->query("SELECT *  FROM tbl_brand");
$row_portfolio_details_list = $connectiondb->query("SELECT *  FROM tbl_portfolio_list");




?>
 <main>
        <!-- page title area start  -->
        <?php
        $id=$_GET['id'];
        $result_bg_about = $connectiondb->query("SELECT *  FROM tbl_bg_image where id='7'");
                        while($row_about_bg=mysqli_fetch_array($result_bg_about))
                        {
                       ?>
        <section class="page-title-area" data-background="admin_pannel/bg_about/<?= $row_about_bg['image']; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-content text-center">
                            <div class="page-title-heading">
                                <h1><?php echo $row_about_bg['heading']; }?></h1>
                            </div>
                            <nav class="grb-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="portfolio.php">Portfolio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Portfolio Single</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
        <!-- portfolio details area start  -->
        <section class="portfolio-details-area pt-150 pb-80">
            <div class="container">
                <div class="portfolio-details-content">
                    <div class="row wow fadeInUp">
                        
                        <div class="col-lg-6">
                            <div class="portfolio-details-title mb-25">
                                <h4>Web Landing Page</h4>
                                <span class="portfolio-details-category">UI/UX Designs</span>
                                <span class="portfolio-details-date">23 July 2021</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="portfolio-details-meta mb-25">
                                <ul class="project-like-view f-right">
                                    <li><i class="far fa-thumbs-up"></i>Like</li>
                                    <li><i class="far fa-thumbs-down"></i>Dislike</li>
                                    <li><i class="far fa-comments"></i>565</li>
                                    <li><i class="fas fa-eye"></i>9.34K</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-details-img">
                        <div class="row wow fadeInUp">
                        <?php
                        $id=$_GET['id'];
                        $result_portfolio_id = $connectiondb->query("SELECT *  FROM tbl_portfolio where id='$id' ");
                        while($row_portfolio_id=mysqli_fetch_array($result_portfolio_id))
                        { ?>
                            <div class="col-lg-9">
                                <div class="portfolio-details-img-left">
                                    <div class="portfolio-details-single-img">
                                    <img src="admin_pannel/img_portfolio/<?= $row_portfolio_id['image']; ?>" alt="">

                                    </div>
                                </div>
                            </div>
                            <?php ?>
                            <div class="col-lg-3">
                                <div class="portfolio-details-img-right">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-6">
                                            <div class="portfolio-details-single-img">
                                                <img src="assets/img/portfolio/pd2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-6">
                                            <div class="portfolio-details-single-img">
                                                <img src="assets/img/portfolio/pd3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-6">
                                            <div class="portfolio-details-single-img">
                                                <img src="assets/img/portfolio/pd4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-lg-8">
                            <h5 class="mb-15">Description</h5>
                            <p class="mb-40"><?php echo $row_portfolio_id['text']; ?></h5>
                            <div class="choosing__information portfolio-w-p">
                                <ul>
                                <?php
                        while($row_portfolio_details=mysqli_fetch_array($row_portfolio_details_list))
                        { ?>
                                    <li>
                                        <div class="choosing__number">
                                            <span><?php echo $row_portfolio_details['sn']; ?></span>
                                        </div>
                                        <div class="choosing__text">
                                            <h5><?php echo $row_portfolio_details['title']; ?></h5>
                                            <p><?php echo $row_portfolio_details['text']; ?></p>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <p class="mb-40"><?php echo $row_portfolio_id['discraption']; }?></p>
                        </div>
                        <div class="col-lg-4">
                            <div class="portfolio-sidebar">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="p-sidebar-widget mb-30">
                                            <div class="ps-widget-meta">
                                                <h5>Tools Used</h5>
                                                <ul class="used-tools">
                                                    <li><a class="ps" href="#">Ps</a></li>
                                                    <li><a class="ai" href="#">Ai</a></li>
                                                    <li><a class="xd" href="#">Xd</a></li>
                                                </ul>
                                            </div>
                                            <div class="ps-widget-meta">
                                                <h5>Creating Date</h5>
                                                <ul class="widget-meta-dt">
                                                    <li>20 July 2021</li>
                                                    <li>10:30 PM</li>
                                                </ul>
                                            </div>
                                            <div class="ps-widget-meta">
                                                <h5>Client's Name</h5>
                                                <div class="clients-name">
                                                    <span>Givson Artboard,</span> New York, USA
                                                </div>
                                            </div>
                                            <div class="ps-widget-meta mb-0">
                                                <h5>Max File Size</h5>
                                                <div class="file-size">
                                                    2320 MB
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio details area end -->
         <!-- hire area start  -->
         <?php
                        while($row_hire=mysqli_fetch_array($result_hire))
                        { ?>
         <section class="hire-area" data-background="admin_pannel/hire_bg/<?= $row_hire['image']; ?>">
            <div class="container">
                <div class="row wow fadeInUp justify-content-center">
                    <div class="col-lg-8 col-md-11">
                        <div class="hire-content text-center">
                            <div class="section-title mb-55">
                                <h2 class="white-color"><?php echo $row_hire['heading']; ?></h2>
                            </div>
                            <?php } ?>
                            <div class="hire-btn">
                                <a href="contact.php" class="grb-btn st-3">HIRE US NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hire area end  -->
        <!-- related shots area start  -->
        <section class="related-shots-area">
            <div class="container">
                <div class="related-shots-inner">
                    <h3>Related Shots</h3>
                </div>
                <div class="row wow fadeInUp portfolio-main-items">
                <?php
                        while($row_portfolio=mysqli_fetch_array($result_portfolio))
                        { ?>  
                    <div class="col-lg-4 col-sm-6 grid-item c-2 c-4 c-3">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-item-img p-relative">
                            <img src="admin_pannel/img_portfolio/<?= $row_portfolio['image']; ?>" alt="">
                                <div class="portfolio-hover-contnet">
                                    <div class="portfolio-hover-inner text-center">
                                        <a class="p-h-icon pm-s" href="portfolio-details.php"><i
                                                class="fas fa-paper-plane"></i>View
                                            Project</a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="project-meta">
                                <div class="project-name">
                                    <h5><?php echo $row_portfolio['list_name']; ?></h5>
                                </div>
                                <ul class="project-like-view">
                                    <li><i class="far fa-thumbs-up"></i>658</li>
                                    <li><i class="fas fa-eye"></i>9.34K</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- related shots area end -->
         <!-- brand area start  -->
         <div class="brand-area pt-70 pb-100">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-12">
                        <div class="swiper-container brand-active">
                            <div class="swiper-wrapper">
                            <?php
                        while($row_brand=mysqli_fetch_array($result_brand))
                        { ?>
                                <div class="swiper-slide">
                               
                                    <div class="single-brand">
                                        <a href="#"><img src="admin_pannel/brand_logo_img/<?= $row_brand['brand_logo']; ?>" alt=""></a>
                                        <a href="#"><img src="admin_pannel/brand_logo_img/<?= $row_brand['brand_logo1']; ?>" alt=""></a>

                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->

      
    </main>
    <?php 

require_once('includes/footer.php');

?>