<?php    
//connacting files 
require_once('includes/header.php'); 
require_once('includes/connaction.php'); 
?>


<?php 
// select query all tables 

$result_team = $connectiondb->query("SELECT *  FROM tbl_team");
$result_brand = $connectiondb->query("SELECT *  FROM tbl_brand");




?>
  <main>
        <!-- page title area start  -->
       <?php
        $id=$_GET['id'];
        $result_bg_about = $connectiondb->query("SELECT *  FROM tbl_bg_image where id='6'");
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
                                    <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
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
                                <a href="contact.html"><img src="admin_pannel/team_img/<?= $row_team['image']; ?>" alt="" height='300px' weight='100%'></a>
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