<?php    
//connacting files 
    require_once('includes/header.php'); 
    require_once('includes/connaction.php'); 
?>


<?php 
// select query all tables 

$result_banner = $connectiondb->query("SELECT *  FROM tbl_banner");
$result_about = $connectiondb->query("SELECT *  FROM tbl_about");
$result_services = $connectiondb->query("SELECT *  FROM tbl_service");
$result_hire = $connectiondb->query("SELECT *  FROM tbl_hire");
$result_choosing_information = $connectiondb->query("SELECT *  FROM tbl_choosing_information");
$result_choosing = $connectiondb->query("SELECT *  FROM tbl_choosing");
$result_team = $connectiondb->query("SELECT *  FROM tbl_team limit 0,5");
$result_list = $connectiondb->query("SELECT *  FROM tbl_list_portfolio");
$result_portfolio = $connectiondb->query("SELECT *  FROM tbl_portfolio limit 0,5");
$result_testimonial = $connectiondb->query("SELECT *  FROM tbl_testimonial");
$result_blog = $connectiondb->query("SELECT *  FROM tbl_blog limit 0,4");
$result_brand = $connectiondb->query("SELECT *  FROM tbl_brand");




?>


    <main>
        <!-- hero area start  -->
        <section class="hero-area p-relatiAQ ve">
            <div class="slider-active swiper-container">
                <div class="swiper-wrapper">
                <?php
                $i = 0;
                foreach ($result_banner as $banner) {
                    $actives = '';
                    if ($i == 0) {
                        $actives = 'active';
                    }
                ?>
                    <div class="single-slider slider-height st-2 swiper-slide slider-overlay"
                        data-swiper-autoplay="5000">
                        <div class="slide-bg" data-background="admin_pannel/banner_img/<?= $banner['image']; ?>"></div>
                        <div class="banner3-shape">
                            <img src="assets/img/shape/banner3-shape.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="hero-content text-center">
                                        <p data-animation="fadeInUp" data-delay=".3s"><?php echo $banner['head']; ?></p>
                                        <h1 data-animation="fadeInUp" data-delay=".5s"><?php echo $banner['title']; ?></h1>
                                        <div class="hero-content-btn st-2" data-animation="fadeInUp" data-delay=".7s">
                                            <a href="contact.php" class="grb-btn">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
            </div>
        </section>
        <!-- hero area end -->


         <!-- about area start  -->
         <section class="about__area">
            <div class="container">
                <div class="row wow fadeInUp">
                <?php
                        while($row_about=mysqli_fetch_array($result_about))
                        {
                       ?>
                    <div class="col-xl-6 col-lg-5">
                        <div class="about__img p-relative mb-30">
                            <div class="about__img-inner">
                                <img src="admin_pannel/about_image/<?= $row_about['image']; ?>" alt="">
                            </div>
                            <div class="p-element">
                                <div class="ab-border d-none d-lg-block"></div>
                                <div class="award">
                                    <img src="admin_pannel/about_logo/<?= $row_about['logo']; ?>" alt="">
                                    <p><?php echo $row_about['logo_title']; ?></p>
                                </div>
                                <div class="ab-image">
                                    <img src="admin_pannel/about_img-2/<?= $row_about['image2']; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="about__content mb-30">
                            <div class="section-title mb-30">
                                <div class="border-left">
                                    <p>About Company</p>
                                </div>
                                <h2><?php echo $row_about['about_heading']; ?></h2>
                            </div>
                            <p><?php echo $row_about['about_text']; ?></p>
                            <ul class="about-points">
                                <li>
                                    <div class="points-heading">
                                        <div class="p-icon">
                                            <i class="f`  laticon-team"></i>
                                        </div>
                                        <h5><?php echo $row_about['list_title']; ?></h5>
                                    </div>
                                    <p><?php echo $row_about['list_text']; ?></p>
                                </li>
                                <li>
                                    <div class="points-heading">
                                        <div class="p-icon">
                                            <i class="flaticon-creative-team"></i>
                                        </div>
                                        <h5><?php echo $row_about['list_title2']; ?></h5>
                                    </div>
                                    <p><?php echo $row_about['list_text2']; ?></p>
                                </li>
                            </ul>
                            <div class="about__btn st-1">
                                <a href="about.php" class="grb-btn st-1">Read More<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- about area end -->

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

         <!-- choosing area start  -->
         <section class="choosing__area pt-120 pb-90">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-lg-6">
                    <?php
                        while($row_choosing=mysqli_fetch_array($result_choosing))
                        { ?>
                        <div class="choosing__img mb-30">
                            <img src="admin_pannel/image_choosing/<?= $row_choosing['image']; ?>" alt="">
                            <div class="subscribe">
                      <a href="https://www.instagram.com/ub_softec"><img src="admin_pannel/img_logo_chossing/<?= $row_choosing['logo']; ?>" alt=""></a>
                                <div class="subscribe__text">
                                    <h4><a href="https://www.instagram.com/ub_softec"><?php echo $row_choosing['logo_title']; ?></a></h4>
                                    <p><?php echo $row_choosing['total_logo_subscribed']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title mb-55">
                            <div class="border-left">
                                <p>Why Choose Us</p>
                            </div>
                            <h2><?php echo $row_choosing['heading']; ?></h2>
                        </div>
                        <?php } ?>
                        <div class="choosing__information mb-30">
                            <ul>
                            <?php
                        while($row_choosing_information=mysqli_fetch_array($result_choosing_information))
                        { ?>
                                <li>
                                    <div class="choosing__number">
                                        <span><?php echo $row_choosing_information['sn']; ?></span>
                                    </div>
                                    <div class="choosing__text">
                                        <h5><?php echo $row_choosing_information['title']; ?></h5>
                                        <p><?php echo $row_choosing_information['text']; ?></p>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choosing area end  -->

         <!-- team area start  -->
         <section class="team-area grey-bg pt-115 pb-90">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-lg-12">
                        <div class="section-title mb-55 text-center">
                            <div class="border-c-bottom">
                                <p>Meet The Team</p>
                            </div>
                            <h2>Meet Our Experienced <br> & Skilled Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp">
                <?php
                        while($row_team=mysqli_fetch_array($result_team))
                        { ?>
                    <div class="col-lg-3 col-md-6">
                   
                   
                        <div class="team-member mb-30">
                            <div class="member-img">
                                <a href="contact.php"><img src="admin_pannel/team_img/<?= $row_team['image']; ?>" alt="" height='300px' weight='100%'></a>
                            </div>
                            <div class="member-name p-relative">
                                <div class="member-name-bg">
                                <img src="assets/img/shape/member-name-bg.png" alt="">
                                <img src="assets/img/shape/member-name-c-bg.png" alt="">
                                </div>
                                <h5><a href="contact.php"><?php echo $row_team['name']; ?></a></h5>
                                <span><?php echo $row_team['designation']; ?></span>
                                <div class="member-social">
                                    <i class="far fa-plus"></i>
                                    <ul class="member-social-icons">
                                        <li><a href="<?php echo $row_team['skype']; ?>"><i class="fab fa-skype"></i></a></li>
                                        <li><a href="<?php echo $row_team['Instagram']; ?>"><i class="fab fa-instagram-square"></i></a></li>
                                        <li><a href="<?php echo $row_team['twitter']; ?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?php echo $row_team['facebook']; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="portfolio-see-all">
                    <a href="team.php" class="grb-border-btn st-2">
                     All Team Member
                    </a>
                
                        </div>
        </section>
        <!-- team area end  -->

        
          <!-- portfolio area start  -->
          <section class="portfolio-st-2 pt-120 pb-115">
            <div class="container">
                <div class="row wow fadeInUp justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title mb-40 text-center">
                            <div class="border-c-bottom st-2">
                                <p>Portfolio</p>
                            </div>
                            <h2>Explore some Recent Projects</h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp">
                    <div class="button-group portfolio-button">
                        <button class="active" data-filter="*">All Samples</button>
                        <?php
                        while($row_list=mysqli_fetch_array($result_list))
                        { ?>
                        <button data-filter=".<?php echo $row_list['list_link']; ?>"><?php echo $row_list['list_name']; ?></button>
                        
                        <?php  }?>
                    </div>
                </div>
                <div class="row wow fadeInUp grid">
                <?php
                        while($row_portfolio=mysqli_fetch_array($result_portfolio))
                        { ?>
                    <div class="col-lg-4 col-md-6 grid-item <?php echo $row_portfolio['list_link']; ?>">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-item-img p-relative">
                                <img src="admin_pannel/img_portfolio/<?= $row_portfolio['image']; ?>" alt="">
                                <div class="portfolio-hover-contnet">
                                    <div class="portfolio-hover-inner text-center">
                                        <a class="p-h-icon popup-image" href="admin_pannel/img_portfolio/<?= $row_portfolio['image']; ?>"><i
                                                class="fal fa-plus"></i></a>
                                        <h5 class="portfolio-hover-heading">
                                            <a href="portfolio-details.php?id=<?php echo $row_portfolio['id']; ?>"><?php echo $row_portfolio['list_name']; ?></a>
                                        </h5>
                                        <p><?php echo $row_portfolio['text']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <div class="portfolio-see-all">
                    <a href="portfolio.php" class="grb-border-btn st-2">
                        See All Samples
                    </a>
                </div>
            </div>
        </section>
        <!-- portfolio area end -->
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
          <!-- blog area start  -->
        <section class="blog-area pt-120 blog-area-3">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-lg-12">
                        <div class="section-title mb-55">
                            <div class="border-left st-3">
                                <p>Blog Post</p>
                            </div>
                            <h2>Read Our Blog</h2>
                            <div class="portfolio-see-all">
                    <a href="blog.php" class="grb-border-btn st-2">
                     All   Blogs 
                    </a>
                
                        </div>
                    </div>
                </div>
                </div>
                <div class="row wow fadeInUp">
                <?php
                        while($row_blog=mysqli_fetch_array($result_blog))
                        { ?>
                    <div class="col-lg-6">
                    
                        <div class="blog-post-single fix mb-30">
                            <div class="blog-post-img">
                                <a href="blog-details.php?id=<?php echo $row_blog['id']; ?>"><img src="admin_pannel/blog_image/<?= $row_blog['image']; ?>" alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-category">
                                    <span class="blog-category-st bcb-1"><?php echo $row_blog['blog_categories']; ?></span>
                                </div>
                                <span><?php echo $row_blog['date']; ?></span>
                                <h4 class="blog-post-heading"><a href="blog-details.php?id=<?php echo $row_blog['id']; ?>"><?php echo $row_blog['heading']; ?></a></h4>
                                <?php

$sql = "SELECT COUNT(*) FROM tbl_comment";
$stmt = $connectiondb->query($sql);
$TotalRows = $stmt->fetch_row();
$TotalPosts = array_shift($TotalRows);
$TotalPosts;
?>
                                <span><a href="blog-details.php?id=<?php echo $row_blog['id']; ?>">Comments<?php echo $TotalPosts ?></a></span>
                            </div>
                        </div>
                    </div>
                    <?php } ?> 
                </div>
            </div>
            
        </section>
        <!-- blog area end -->

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