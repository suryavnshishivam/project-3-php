<?php    
//connacting files 
require_once('includes/header.php'); 
require_once('includes/connaction.php'); 
?>


<?php 
// select query all tables 
$result_about = $connectiondb->query("SELECT *  FROM tbl_about");
$result_brand = $connectiondb->query("SELECT *  FROM tbl_brand");
$result_team = $connectiondb->query("SELECT *  FROM tbl_team");
$result_choosing = $connectiondb->query("SELECT *  FROM tbl_choosing");
$result_choosing_information = $connectiondb->query("SELECT *  FROM tbl_choosing_information");
$result_count = $connectiondb->query("SELECT *  FROM tbl_count");

?>
 <main>
        <!-- page title area start  -->
        <?php
                    $id=$_GET['id'];
                    $result_bg_about = $connectiondb->query("SELECT *  FROM tbl_bg_image where id='1'");
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
                                    <li class="breadcrumb-item active" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
      <!-- about area start  -->
      <section class="about-details pt-140">
            <div class="container">
                <div class="row wow fadeInUp align-items-center">
                <?php
                        while($row_about=mysqli_fetch_array($result_about))
                        {
                       ?>
                    <div class="col-lg-6">
                        <div class="section-title mb-30">
                            <h2><?php echo $row_about['logo_title']; ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-details-right mb-30">
                            <p><?php echo $row_about['about_bio']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="about-details-box mt-30" data-background="admin_pannel/about_img-2/<?= $row_about['image2']; ?>">
                    <div class="row wow fadeInUp justify-content-end">
                        <div class="col-xl-6 col-md-10">
                            <div class="about-details-box-content">
                                <h5><?php echo $row_about['about_heading']; ?></h5>
                                <p><?php echo $row_about['about_text']; ?></p>
                                <ul class="about-points st-ab">
                                    <li>
                                        <div class="points-heading">
                                            <div class="p-icon">
                                                <i class="flaticon-team"></i>
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
                            </div>
                            <?php  }?>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- about area end -->
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

        <!-- counter area start  -->
        <div class="counter-board-area" data-background="assets/img/bg/counter-board-bg.jpg">
            <div class="container">
                <div class="row wow fadeInUp counter-board-content">
                <?php
                        while($row_count=mysqli_fetch_array($result_count))
                        { ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-board-single mb-40">
                        <?php echo $row_count['icon']; ?>
                            <div class="counter-board-number"><span class="odometer" ><?php echo $row_count['count']; ?></span>K+</div>
                            <p><?php echo $row_count['name']; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                  
                </div>
            </div>
        </div>
        <!-- counter area end -->
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
                                <a href="contact.html"><img src="admin_pannel/team_img/<?= $row_team['image']; ?>" alt=""></a>
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
        </section>
        <!-- team area end  -->
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