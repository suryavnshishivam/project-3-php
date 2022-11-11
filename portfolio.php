<?php    
//connacting files 
require_once('includes/header.php'); 
require_once('includes/connaction.php'); 
?>


<?php 
// select query all tables 

$result_list = $connectiondb->query("SELECT *  FROM tbl_list_portfolio");
$result_portfolio = $connectiondb->query("SELECT *  FROM tbl_portfolio");
$result_brand = $connectiondb->query("SELECT *  FROM tbl_brand");





?>
  <!-- page title area start  -->
  <?php
  $id=$_GET['id'];
  $result_bg_about = $connectiondb->query("SELECT *  FROM tbl_bg_image where id='3'");
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
                                    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
        <!-- search area start  -->
        <div class="search-area p-search-area pt-150 pb-50">
            <div class="container">
                <div class="row wow fadeInUp justify-content-center">
                    <div class="col-lg-10">
                        <div class="portfolio-search">
                            <form class="portfolio-search-form" action="#">
                                <input type="text" placeholder="Search Projects">
                                <button class="portfolio-search-btn"><i class="fal fa-search"></i>Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search area end -->
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
                        
                        <?php } ?>
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
                
            </div>
        </section>
        <!-- portfolio area end -->
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