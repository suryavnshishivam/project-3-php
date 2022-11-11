<?php    
//connacting files 
    $connectiondb= mysqli_connect("localhost","root","","ubsoftec");
?>

<?php 

$result_heading=$connectiondb->query("SELECT *  FROM tbl_heading");
$result_service=$connectiondb->query("SELECT *  FROM tbl_service");


?>

          <!-- footer area start  -->
          <footer>
        <section class="footer-area pt-80 pb-40">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget mb-40">
                            <div class="question-area">
                                <div class="question-icon">
                                    <i class="flaticon-support"></i>
                                </div>
                                <?php
                    while ($Heading = mysqli_fetch_assoc($result_heading)) {
                    ?>
                                <div class="question-text">
                                    <p>Have a question? Call us 24/7</p>
                                    <span><a href=""><?php echo $Heading['phone_no']; ?></a></span>
                                </div>
                            </div>
                            
                            <div class="footer-address">
                                <h5>Contact Info</h5>
                                <p><?php echo $Heading['address']; ?></p>
                            </div>
                            
                            <div class="grb__social footer-social">
                                <ul>
                                <li><a href="https://www.facebook.com/ubsoftec"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/UBSoftec"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/ub_softec"><i class="fab fa-instagram"></i></a></li>
                                <!-- <li><a class="lin" href="https://www.linkedin.com/company/77753798/admin"><i class="fab fa-linkedin"></i></a></li> -->
                                <li><a href="https://in.pinterest.com/ubsoftec"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mb-40 cat-m">
                            <div class="footer-widget-title">
                                <h4>OUR SERVICES</h4>
                            </div>
                            <?php
                    while ($row_service = mysqli_fetch_assoc($result_service)) 
                    {
                    ?> 
                            <ul class="footer-list">
                                <li><a href="service-details.php?id=<?php echo $row_service['id']; ?>"><?php echo $row_service['title']; ?></a></li>
                                
                        <?php } ?>
                            </ul>
    
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mb-40">
                            <div class="footer-widget-title">
                                <h4>USEFUL LINKS</h4>
                            </div>
                            <ul class="footer-list">
                                
                                
                            <?php
                   
                         $id=$_GET['id'];
                       $qry="SELECT * FROM tbl_menu where visibility_status=0 AND id!='$id'";				 
                       $result=mysqli_query($connectiondb,$qry); 
               
                        while($row=mysqli_fetch_array($result))
                        {
                       ?>
                       
                    <li ><a href="<?php if($page_status=='true')?> <?php echo $row['page_link'];?>?id=<?php echo $row['id']; ?>"><?php echo $row['page_name'];?></a></li>
                    
                       
                   <?php } ?>   
                        </div>
                    </div>
                
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget mb-40 srv-m">
                            <div class="footer-widget-title">
                                <h4>Service Schedule</h4>
                            </div>
                            <ul class="worktime-list">
                                <li>
                                    <h5>Saturday-Mon</h5>
                                    <span><?php echo $Heading['service_hours']; ?></span>
                                </li>
                                
                                <li>
                                    <h5>Tuesday - Wed - Thurs</h5>
                                    <span>9:30 AM - 12 PM</span>
                                </li>
                                <li>
                                    <h5>Sunday : <span>Closed</span></h5>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="copyright-area">
            <div class="container">
                <div class="row wow fadeInUp align-items-center">
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="copyright-logo logo-shape">
                            <a href="index.php">
                                <img src="admin_pannel/heading_img2/<?= $Heading['image2']; ?>" alt="">
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="copyright-text">
                            <p>© Copyright 2022 All Rights Reserved by <a href="#">UBSoftec</a> </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <ul class="copyright-list f-right">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="about.php">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->



    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/appair.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from www.devsnews.com/template/growbiz/growbiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Nov 2021 17:13:48 GMT -->
</html>
       

