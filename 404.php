  

<?php    
//connacting files 
    $connectiondb= mysqli_connect("localhost","root","","ubsoftec");
    require_once('includes/header.php'); 
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
                                <h1>404 Page</h1>
                            </div>
                            <nav class="grb-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">404 Page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
        <!-- 404 area start  -->
        <section class="area-404 pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="content-404 text-center mb-30">
                            <h2>404</h2>
                            <h4>Sorry We Couldn't Find That Page</h4>
                            <p>The Page you are looking for was moved, removed, renamed or never existed.
                                Please search anything ales you want.</p>
                            <div class="search-404">
                                <form class="search-form mb-30">
                                    <div class="search-input-field">
                                        <input type="text" placeholder="Search anything.....">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="go-home">
                                <a href="index.html" class="grb-border-btn st-1">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 404 area end -->
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
                                        <a href="#"><img src="assets/img/brand/brand1-wc.png" alt=""></a>
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
        <!-- newsletter area start  -->
        <div class="newsletter-area">
            <div class="container">
                <div class="row wow fadeInUp align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-text mb-30">
                            <h4>Subscribe Us For Newsletter</h4>
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined the Newsletter
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="subscribe-form mb-30">
                            <input type="text" placeholder="Enter your email...">
                            <button type="submit"><i class="fas fa-paper-plane"></i>Subscribe Us</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter area end -->
    </main>
    <?php 

require_once('includes/footer.php');

?>