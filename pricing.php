<?php    
//connacting files 
require_once('includes/header.php'); 
require_once('includes/connaction.php'); 
?>


<?php 
// select query all tables 

$result_brand = $connectiondb->query("SELECT *  FROM tbl_brand");




?>
 <main>
        <!-- page title area start  -->
        <section class="page-title-area" data-background="assets/img/bg/page-title-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-content text-center">
                            <div class="page-title-heading">
                                <h1>Pricing Plans</h1>
                            </div>
                            <nav class="grb-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pricing Plans</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
        <!-- pricing area start  -->
        <!-- <section class="pricing-area pt-140">
            <div class="container">
                <div class="pricing-inner">
                    <div class="row wow fadeInUp">
                        <div class="col-lg-7 col-md-8">
                            <div class="section-title mb-30">
                                <h2>We Kept Some Pricing Plans For You</h2>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-plans wow fadeInUp">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">MONTHLY</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">YEARLY</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row g-0">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing mb-30">
                                            <div class="pricing-title">
                                                <h5>Starter</h5>
                                                <span>$39.00</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li>Strategy & Research</li>
                                                <li>SEO Optimization</li>
                                                <li>Business & Finance Analyzing</li>
                                                <li>Website Design</li>
                                                <li>Website Development</li>
                                                <li>10 Email Address</li>
                                            </ul>
                                            <div class="pricing-btn text-center">
                                                <a href="contact.html" class="grb-border-btn st-1">
                                                    Choose Plan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing mb-30">
                                            <div class="pricing-title">
                                                <h5>Starter</h5>
                                                <span>$49.00</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li>Strategy & Research</li>
                                                <li>SEO Optimization</li>
                                                <li>Business & Finance Analyzing</li>
                                                <li>Website Design</li>
                                                <li>Website Development</li>
                                                <li>10 Email Address</li>
                                            </ul>
                                            <div class="pricing-btn text-center">
                                                <a href="contact.html" class="grb-border-btn st-1">
                                                    Choose Plan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing mb-30">
                                            <div class="pricing-title">
                                                <h5>Starter</h5>
                                                <span>$59.00</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li>Strategy & Research</li>
                                                <li>SEO Optimization</li>
                                                <li>Business & Finance Analyzing</li>
                                                <li>Website Design</li>
                                                <li>Website Development</li>
                                                <li>10 Email Address</li>
                                            </ul>
                                            <div class="pricing-btn text-center">
                                                <a href="contact.html" class="grb-border-btn st-1">
                                                    Choose Plan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row g-0">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing mb-30">
                                            <div class="pricing-title">
                                                <h5>Starter</h5>
                                                <span>$139.00</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li>Strategy & Research</li>
                                                <li>SEO Optimization</li>
                                                <li>Business & Finance Analyzing</li>
                                                <li>Website Design</li>
                                                <li>Website Development</li>
                                                <li>10 Email Address</li>
                                            </ul>
                                            <div class="pricing-btn text-center">
                                                <a href="#" class="grb-border-btn st-1">
                                                    Choose Plan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing mb-30">
                                            <div class="pricing-title">
                                                <h5>Starter</h5>
                                                <span>$239.00</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li>Strategy & Research</li>
                                                <li>SEO Optimization</li>
                                                <li>Business & Finance Analyzing</li>
                                                <li>Website Design</li>
                                                <li>Website Development</li>
                                                <li>10 Email Address</li>
                                            </ul>
                                            <div class="pricing-btn text-center">
                                                <a href="#" class="grb-border-btn st-1">
                                                    Choose Plan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing mb-30">
                                            <div class="pricing-title">
                                                <h5>Starter</h5>
                                                <span>$439.00</span>
                                            </div>
                                            <ul class="pricing-list">
                                                <li>Strategy & Research</li>
                                                <li>SEO Optimization</li>
                                                <li>Business & Finance Analyzing</li>
                                                <li>Website Design</li>
                                                <li>Website Development</li>
                                                <li>10 Email Address</li>
                                            </ul>
                                            <div class="pricing-btn text-center">
                                                <a href="#" class="grb-border-btn st-1">
                                                    Choose Plan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- pricing area end -->
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