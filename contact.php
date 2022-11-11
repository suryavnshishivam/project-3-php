<?php    
//connacting files 
require_once('includes/header.php'); 
require_once('includes/connaction.php');  
?>


<?php 
// select query all tables 

$result_brand = $connectiondb->query("SELECT *  FROM tbl_brand");
$result_heading=$connectiondb->query("SELECT *  FROM tbl_heading");

?>
  <main>
        <!-- page title area start  -->
        <?php
         $id=$_GET['id'];
         $result_bg_about = $connectiondb->query("SELECT *  FROM tbl_bg_image where id='5'");
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
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
        <!-- contact area start  -->
        <div class="contact-area pt-145 pb-120">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-lg-4">
                        <div class="contact-address">
                            <div class="contact-heading">
                                <h4>Direct Contact Us</h4>
                            </div>
                            <?php
                    while ($Heading = mysqli_fetch_assoc($result_heading)) {
                    ?>
                            <ul class="contact-address-list">
                                <li>
                                    <div class="contact-list-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="contact-list-text">
                                        <span><a href="#"><?php echo $Heading['phone_no']; ?></a></span>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-list-icon st-3">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-list-text">
                                        <span><a href="#"><?php echo $Heading['email']; ?></a></span>
                                     
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-list-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-list-text">
                                        <span><a href="#"><?php echo $Heading['address']; ?></a></span>
                                    </div>
                                </li>
                            </ul>
                            <?php }?>
                        </div>
                    </div>

                    <?php 
                    
                    if (isset($_POST["submit"]))
                    {
                    
                        $first_name=$_POST['first_name'];
                        $last_name=$_POST['last_name'];
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];
                        $subject=$_POST['subject'];
                        $message=$_POST['message'];
                       
                        
                       $sql="INSERT INTO `tbl_contact` (`first_name`,`last_name`,`email`,`phone`,`subject`,`message`) 
                       VALUES ('$first_name','$last_name','$email','$phone','$subject','$message')";
                        $query_run = mysqli_query($connectiondb,$sql); 
                    }
                    
                    
                    ?>
                    <div class="col-lg-8">
                        <div class="get-in-touch">
                            <div class="contact-heading">
                                <h4>Get in Touch</h4>
                            </div>
                            <form class="contact-form" action="contact.php" method="post">
                                <div class="row wow fadeInUp">
                                    <div class="col-md-6 mb-30">
                                        <input type="text" name="first_name" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <input type="text" name="last_name" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <textarea name="message" name="message" placeholder="Messages....."></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" name="submit"><i class="fas fa-paper-plane"></i>SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end -->
        <!-- map area start  -->
        <div class="contact-map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14958.885384839468!2d72.893315!3d20.394376!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd3f82df0b28eda3d!2sUB%20Softec!5e0!3m2!1sen!2sin!4v1655371290293!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               
                    </div>
        <!-- map area end -->
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