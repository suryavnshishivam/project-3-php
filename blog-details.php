<?php    
//connacting files 
require_once('includes/header.php'); 
require_once('includes/connaction.php'); 
?>


<?php 
// select query all tables 

$result_blog = $connectiondb->query("SELECT *  FROM tbl_blog");
$result_brand = $connectiondb->query("SELECT *  FROM tbl_brand");
$result_comment = $connectiondb->query("SELECT *  FROM tbl_comment WHERE status='ON'");




?>
  <main>
        <!-- page title area start  -->
        <?php
        $id=$_GET['id'];
        $result_bg_about = $connectiondb->query("SELECT *  FROM tbl_bg_image where id='8'");
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
                                    <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Single</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
        <!-- blog area start  -->
        <div class="blog-main-area pt-150">
            <div class="container">
                <div class="row wow fadeInUp">
                <?php 

$id=$_GET['id'];
$result_blog = $connectiondb->query("SELECT *  FROM tbl_blog where id='$id'");
while($row_blog=mysqli_fetch_array($result_blog))
{ 
?>
                    <div class="col-lg-8">
                        <div class="blog-main">
                            <div class="blog-main-single bm-details">
                                <div class="bms-img mb-30">
                                    <a href="blog-details.php"><img src="admin_pannel/blog_image/<?= $row_blog['image']; ?>" width="100%" height="500px" alt=""></a>
                                </div>
                                <?php  ?>
                                <div class="bms-content">
                                    <div class="fix mb-30">
                                        <div class="blog-date bms-date">
                                            <i class="fal fa-calendar-alt"></i>
                                            
                                        </div>
                                        <?php

$sql = "SELECT COUNT(*) FROM tbl_comment";
$stmt = $connectiondb->query($sql);
$TotalRows = $stmt->fetch_row();
$TotalPosts = array_shift($TotalRows);
$TotalPosts;
?>
                                        <div class="bms-title">
                                            <ul class="project-like-view bms-lv bm-details">
                                                <li><i class="fas fa-calendar-alt"></i><?php echo $row_blog['date']; ?></li>
                                                <li><i class="fas fa-folder-open"></i>Business</li>
                                                <li><i class="fas fa-comments-alt"></i>Comments <?php echo $TotalPosts ?></li>
                                                <li><i class="fas fa-eye"></i>546 Views</li>
                                            </ul>
                                            <h4><?php echo $row_blog['blog_categories']; ?></h4>
                                        </div>
                                    </div>
                                    <h4><?php echo $row_blog['heading']; ?></h4>
                                    <br>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <img class="mb-25" src="admin_pannel/blog_image/<?= $row_blog['image']; ?>" alt="">
                                        </div>
                                        <div class="col-xl-6">
                                            <p class="mb-25"><?php echo $row_blog['text']; ?></p>
                                        </div>
                                    </div>
                                    <p class=""></p>
                                    <!-- <hr> -->
                                    <!-- <div class="row">
                                        <div class="col-md-6">
                                            <div class="bms-tags">
                                                <span>Tags :</span>
                                                <a href="#">business,</a>
                                                <a href="#">web learning,</a>
                                                <a href="#">solution,</a>
                                                <a href="#">entrepreneur</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="bms-share f-right">
                                                <span><i class="fal fa-share-alt"></i>Share :</span>
                                                <div class="grb__social bms-social">
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <hr>
                                    <div class="article-nav">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="article-nav-content pr-100">
                                                    <span>Previous Article</span>
                                                    <h6><a href="blog-details.html">What Do I Need to Make It in the
                                                            World of Business?</a></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="article-nav-content next-article pl-100">
                                                    <span>Next Article</span>
                                                    <h6><a href="blog-details.html">If You Only Knew How Much Your
                                                            Outfit Choices Actually Matter</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr> -->
                                    <div id="comments" class="post-comments">
                                        <div class="post-comment-title mb-40">
                                            <h3><?php echo $TotalPosts  ?> Comments</h3> <?php } ?>
                                        </div>
                                        <div class="latest-comments">
                                            <ul>
                                            <?php
                        while($row_comment=mysqli_fetch_array($result_comment))
                        { ?>
                                                <li>
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="admin_pannel/comment_img/<?= $row_comment['image']; ?>" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h5><?php echo $row_comment['name']; ?></h5>
                                                                <span class="post-date "><?php echo $row_comment['date']; ?></span>
                                                            </div>
                                                            <p><?php echo $row_comment['comment']; ?></p>
                                                            <a href="#" class="comment-reply"> <i
                                                                    class="fas fa-reply"></i>Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                           
                                            </ul>
                                        </div>
                                    </div>
                                    <?php 
                    
                    if (isset($_POST["submit"]))
                    {
                        $image= $_FILES['image']['name'];
                        $path="admin_pannel/comment_img/".basename($_FILES['image']['name']);
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $comment=$_POST['comment'];
                        $status=$_POST['status'];
                        
                       
                        
                    $sql="INSERT INTO `tbl_comment` (`image`,`name`,`email`,`comment`,`status`) 
                       VALUES ('$image','$name','$email','$comment','$status')"; 
                        $query_run = mysqli_query($connectiondb,$sql); 
                        
                    
                        if($query_run)
                        {
                         
                          move_uploaded_file($_FILES['image']['tmp_name'],$path);
                            $_SESSION['status'] = "Comment Sended Wait For Approvel";
                            $_SESSION['status_code'] = "success";
                            $_SESSION['status_code'] = "success";
                            header('Location: index.php');
                        }
                        else 
                        {
                            $_SESSION['status'] = "Comment Not Sended";
                            $_SESSION['status_code'] = "error";
                            $_SESSION['status_code'] = "success";
                            header('Location: index.php');
                        }
                       }
                       
                
                        
                    ?>
                                    <div class="post-comment-form mb-30">
                                        <h4>Leave a Comment </h4>
                                        <form action="blog-details.php" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                            <div class="col-xl-6">
                                                    <div class="post-input">
                                                     
                                                        <input type="file" name="image" require>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="post-input">
                                                        <input type="text" name="name" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="post-input">
                                                        <input type="email" name="email" placeholder="Email">
                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="post-input">
                                                        <textarea name="comment" id="message"
                                                            placeholder="Comment...."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="post-input"> 
                                            <input type="hidden" name="status" value="OFF" placeholder="Status">
                                            </div>
                                            </div>      
                                            </div>
                                            
                                            <button type="submit" name="submit" class="grb-btn comment-btn">COMMENT</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-sidebar">
                            <div class="bs-widget mb-30 sidebar-search">
                                <form class="search-form">
                                    <div class="search-input-field bss">
                                        <input type="text" placeholder="Search Keywords">
                                        <button type="submit"><i class="far fa-search"></i>Search</button>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="bs-widget mb-30"> -->
                                <!-- <div class="bs-widget-title mb-40">
                                    <h5>Categories</h5>
                                </div> -->
                                <?php
                        // $result_blog_categories = $connectiondb->query("SELECT *  FROM tbl_blog  limit 0,5");
                        // while($row_blog_categories=mysqli_fetch_array($result_blog_categories))
                        // { ?>  
                                                          <?php
// $id=$_GET['id'];

// $sql = "SELECT COUNT(*) FROM tbl_blog where blog_categories='$blog_categories'";
// $stmt = $connectiondb->query($sql);
// $TotalRows = $stmt->fetch_row();
// $TotalPosts = array_shift($TotalRows);
// $TotalPosts;
?>
                                <ul class="bs-category-list">
                                    <li>
                                        <a href="#">
                                            <p><?php //echo $row_blog_categories['blog_categories']; ?></p><span><?php // echo $TotalPosts?></span>
                                        </a>
                                    </li>
                                    <?php //} ?>
                                </ul>
                            </div>
                            <div class="bs-widget mb-30">
                                <div class="bs-widget-title mb-40">
                                    <h5>Recent Posts</h5>
                                </div>
                                <ul class="bs-post">
                                <?php
                        $result_blog_recent = $connectiondb->query("SELECT *  FROM tbl_blog ORDER BY id desc  limit 0,5");
                        while($row_blog_recent=mysqli_fetch_array($result_blog_recent))
                        { ?>  
                                    <li class="bs-post-single">
                                        <div class="bs-post-img">
                                            <a href="blog-details.php?id=<?php echo $row_blog_recent['id']; ?>">
                                                <img src="admin_pannel/blog_image/<?= $row_blog_recent['image']; ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="bs-post-content">
                                            <h6><a href="blog-details.php?id=<?php echo $row_blog_recent['id']; ?>"><?php echo $row_blog_recent['heading']; ?></a></h6>
                                            <span><?php echo $row_blog_recent['date']; ?></span>
                                        </div>
                                    </li>
                                    <?php } ?> 
                                   
                                </ul>
                            </div>
                            <div class="bs-widget mb-30 bs-ad-container">
                                <div class="bs-ad-inner p-relative">
                                    <div class="bs-ad-inner-content">
                                        <div class="bs-ad-inner-text">
                                            <p>Business<br><span>Advertisement</span></p>
                                            <span>370 x 550</span>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <img src="assets/img/blog/bs-ad.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end  -->
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