<?php    
//connacting files 
require_once('includes/header.php'); 
require_once('includes/connaction.php'); 
?>


<?php 
// select query all tables 


   

?>
  <main>
        <!-- page title area start  -->
        <?php
        $id=$_GET['id'];
        $result_bg_about = $connectiondb->query("SELECT *  FROM tbl_bg_image where id='9'");
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
                                    <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Web Development</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
        <!-- service details area start  -->
        <section class="service-details-area pt-150 pb-80">
            <div class="container">
                <div class="service-details-img wow fadeInUp">
                    <div class="row">
                    <?php 

$id=$_GET['id'];
$result_services = $connectiondb->query("SELECT *  FROM tbl_service where id='$id'");
while($row_services=mysqli_fetch_array($result_services))
{ 
?>
                        <div class="col-lg-9">
                            <div class="service-details-single-img">
                                <img src="admin_pannel/service_logo/<?= $row_services['logo']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <div class="service-details-single-img">
                                        <img src="admin_pannel/service_logo/<?= $row_services['logo']; ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-6">
                                    <div class="service-details-single-img">
                                        <img src="admin_pannel/service_logo/<?= $row_services['logo']; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-details-content wow fadeInUp">
                    <div class="service-details-heading">
                        <h2><?php echo $row_services['title']; ?></h2>
                    </div>
                    <p><?php echo $row_services['text']; }?></p>
                    <div class="row">
                    <?php
                        $result_service_details = $connectiondb->query("SELECT *  FROM tbl_services_details ");
                        while($row_service_details=mysqli_fetch_array($result_service_details))
                        { ?>  
                        <div class="col-xl-9">
                            <h5 class="mb-15"><?php echo $row_service_details['title']; ?></h5>
                            <p class="mb-40"><?php echo $row_service_details['text']; ?></p>
                            
<?php } ?>
                            <ul class="execute-list">
                        <?php
                        $result_service_list = $connectiondb->query("SELECT *  FROM tbl_list_service ");
                        while($row_service_list=mysqli_fetch_array($result_service_list))
                        { ?>  
                                <li><?php echo $row_service_list['list_name']; }?></li>
                              
                            </ul>
                           
                            <h5 class="mb-20">Questions On The Projects</h5>
                            
                            <div class="grb-accordion">
                                <div class="accordion" id="accordionExample">
                                <?php
                        $result_service_question = $connectiondb->query("SELECT *  FROM tbl_service_questions ");
                        while($row_service_question=mysqli_fetch_array($result_service_question))
                        { ?> 
                                    <div class="accordion-item">
                                        
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <?php echo $row_service_question['question']; ?>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php echo $row_service_question['answer']; ?>
                                            </div>
                                        </div>
                                    </div>
                                 <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="mt-45 mb-25">Explore More Services</h4>
                    <div class="row service-details-more">
                    <?php
                        $result_service = $connectiondb->query("SELECT *  FROM tbl_service ");
                        while($row_service_recent=mysqli_fetch_array($result_service))
                        { ?>  
                        <div class="col-lg-4 col-md-6">
                            <div class="service-box-single mb-40">
                                <div class="service-box-content st-1">
                                    <div class="service-box-content-icon st-1">
                                    <img src="admin_pannel/service_logo/<?= $row_service_recent['logo']; ?>" alt="">

                                    </div>
                                    <div class="service-box-content-text">
                                        <h4><a href="service-details.php?id=<?php echo $row_service_recent['id']; ?>"><?php echo $row_service_recent['title']; ?></a></h4>
                                        <p><?php echo $row_service_recent['text']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                      
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- service details area end -->
      
    </main>
    <?php 

require_once('includes/footer.php');

?>