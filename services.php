<?php    
//connacting files 
require_once('includes/header.php'); 
    require_once('includes/connaction.php'); 
?>


<?php 
// select query all tables 

$result_services = $connectiondb->query("SELECT *  FROM tbl_service");
$result_hire = $connectiondb->query("SELECT *  FROM tbl_hire");
$result_testimonial = $connectiondb->query("SELECT *  FROM tbl_testimonial");



?>
 <main>
        <!-- page title area start  -->
        <?php
        $id=$_GET['id'];
        $result_bg_about = $connectiondb->query("SELECT *  FROM tbl_bg_image where id='2'");
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
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
        <!-- service box area  -->
        <section class="service-box-area pt-120 pb-80">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-lg-12">
                        <div class="section-title mb-55 text-center">
                            <div class="border-c-bottom st-2">
                                <p>Our Services</p>
                            </div>
                            <h2>OUR BEST SERVICES</h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp">
                <?php
                        while($row_services=mysqli_fetch_array($result_services))
                        {
                            $Id     = $row_services["id"];
                            $logo   =  $row_services["logo"];
                            $Title  =  $row_services["title"];
                            $text   =  $row_services["text"];
                       ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box-single mb-40">
                            <div class="service-box-content">
                                <div class="service-box-content-icon">
                                <img src="admin_pannel/service_logo/<?= $row_services['logo']; ?>" alt="">
                                </div>
                                <div class="service-box-content-text">
                                    <h4><a href="service-details.php?id=<?php echo $row_services['id']; ?>"><?php echo $row_services['title']; ?></a></h4>
                                    <p><?php 
                           if (strlen($text)>3){ $text = substr($text,0,100).'..';} 
                           echo  $text; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                 </div>
            </div>
           
        </section>
        <!-- service box end -->
        <!-- partners area start  -->
        <!-- <section class="partners-area pb-80">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-lg-6">
                        <div class="partners-content mb-40">
                            <div class="section-title mb-35">
                                <h2>Our Global Partners We Worked With</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form,
                                by injected humour. If you are going to use a passage of Lorem Ipsum, you need to be
                                sure.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="partners-logo pl-100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="single-partner">
                                        <a href="#"><img src="assets/img/brand/brand1.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-partner text-end">
                                        <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-partner text-center">
                                        <a href="#"><img src="assets/img/brand/brand3.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-partner">
                                        <a href="#"><img src="assets/img/brand/brand4.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-partner text-end">
                                        <a href="#"><img src="assets/img/brand/brand5.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- partners area end -->
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
        <!-- testimonial area start  -->
        <section class="testimonial-area st-1" data-background="assets/img/bg/bg-shape.png">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-lg-12">
                        <div class="section-title mb-55 text-center">
                            <div class="border-c-bottom">
                                <p>Testimonials</p>
                            </div>
                            <h2>Some Expression Of <br> Our Clients</h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp justify-content-center">
                    <div class="col-lg-10">
                        <div class="testimonial-wrapper p-relative">
                            <div class="testimonial-content-inner">
                                <div class="swiper-container testimonial-active">
                                    <div class="swiper-wrapper">
                                    <?php
                        while($row_testimonial=mysqli_fetch_array($result_testimonial))
                        { ?>
                                        <div class="swiper-slide">
                                            
                                            <div class="testimonial-single st-1 text-center">
                                                <div class="testimonial-img">
                                                    <img src="admin_pannel/testimonial_img/<?= $row_testimonial['image']; ?>" alt="">
                                                </div>
                                                <p class="mb-30"><?php echo $row_testimonial['text']; ?></p>
                                                <div class="testimonial-name">
                                                    <h5><?php echo $row_testimonial['name']; ?></h5>
                                                    <p><?php echo $row_testimonial['designation']; ?></p>
                                                </div>
                                                <ul class="testimonial-review">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php } ?>  
                                </div>
                            </div>
                            <div class="testimonial-nav-1 testimonial-nav-arrow">
                                <div class="testimonial1-button-prev"><i class="far fa-arrow-left"></i></div>
                                <div class="testimonial1-button-next"><i class="far fa-arrow-right"></i></div>
                            </div>
                           
                            <div class="testimonial-quote">
                                <i class="fal fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!-- testimonial area end -->
      
    </main>
    <?php 

require_once('includes/footer.php');

?> 