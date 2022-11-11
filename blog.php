<?php    
//connacting files 
require_once('includes/header.php'); 
require_once('includes/connaction.php'); 
?>


<?php 
// select query all tables 


$result_blog = $connectiondb->query("SELECT *  FROM tbl_blog");
$result_brand = $connectiondb->query("SELECT *  FROM tbl_brand");





?>
<main>
        <!-- page title area start  -->
        <?php
         $id=$_GET['id'];
         $result_bg_about = $connectiondb->query("SELECT *  FROM tbl_bg_image where id='4'");
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
                                    <li class="breadcrumb-item active" aria-current="page">Blog Page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
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
                                <span><a href="blog-details.php?id=<?php echo $row_blog['id']; ?>">13 Comments</a></span>
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