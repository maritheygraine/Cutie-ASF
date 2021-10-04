
<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'dbh.php';
    session_start();
    unset($_SESSION['s_type']);
?>
<head>
    <meta charset="UTF-8">
    <link href="css/style-1.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>
    <link rel="shortcut icon" href="images/cutie.ico" type="image/x-icon">
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-1.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">
    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<style>
    body {
        color: var(--pt_black);
        font-size: 13px;
    }
</style>

<body>
    <div class="main-wrapper pet tm_profile">

        <div id="preloading"></div>
        
        <section class="featured">
            <?php include 'a_nav.php' ?>
            <section class="page-title" style="background-image:url(images/background/7.jpg)">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2 style="color: white;">Adoption Requests</h2>
                    </div>
                </div>
            </div>
            </section>
        </section>

        <section class="profile">
            <section class="brows-job-category">
                        <div class="container">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-3 col-md-1">
                                                <div class="brows-job-position">
                                                    <h5 style="font-size: 18px;">Pet ID</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-1">
                                                <div class="brows-job-position">
                                                    <h5 style="font-size: 18px;">Pet Name</h5>
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-md-1">
                                                <div class="brows-job-position">
                                                    <h5 style="font-size: 18px;">Name</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-1">
                                                <div class="brows-job-position">
                                                    <h5 style="font-size: 18px;">Date Requested</h5>
                                                </div>
                                            </div>            
                                        </div>
                            <?php 
                            $pet_data = db_view_petsRequested($_SESSION['id']);
                            if ($pet_data != 0) {
                                for ($i = 0; $i<sizeof($pet_data); $i++) { ?>
                                    <form method="POST" enctype="multipart/form-data" action="">  
                                        <button type="" class="adopted-pets" name="<?php echo "click".$i; ?>">
                                            <article>
                                                    <div class="row" style="height: 12px;">
                                                        <div class="col-lg-3 col-md-1" style="margin-top: -6px; margin-left:-108px;">
                                                            <div class="brows-job-position">
                                                                <p><?php echo $pet_data[$i]['p_id'] ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-1" style="margin-top: -6px; margin-left:105px; text-align: left;">
                                                            <div class="brows-job-position">
                                                                <p><?php echo ucwords($pet_data[$i]['p_name']); ?></p>
                                                            </div>
                                                        </div>
                                                          <div class="col-lg-3 col-md-1" style="margin-top: -6px; margin-left:-70px">
                                                            <div class="brows-job-position">
                                                                <p><?php echo ucwords($pet_data[$i]['u_fname']." ".$pet_data[$i]['u_lname']); ?></p>
                                                            </div>
                                                        </div>
                                                         <div class="col-lg-3 col-md-1" style="margin-top: -6px;">
                                                            <div class="brows-job-position">
                                                                <p><?php echo $pet_data[$i]['date'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>                                                
                                            </article>    
                                        </button>
                                    </form>
                            <?php
                                    if (isset($_POST['click'.$i])) {
                                            $_SESSION['a_adopted'] = true;
                                            $_SESSION['a_requested'] = true;
                                            $_SESSION['ap_id'] = $pet_data[$i]['p_id'];
                                            $_SESSION['ap_name'] = ucfirst($pet_data[$i]['p_name']);
                                            $_SESSION['ap_type'] = ucfirst($pet_data[$i]['p_type']);
                                            $_SESSION['ap_breed'] = ucfirst($pet_data[$i]['p_breed']);
                                            $_SESSION['ap_age'] = $pet_data[$i]['p_age'];
                                            $_SESSION['ap_gender'] = ucfirst($pet_data[$i]['p_gender']);
                                            $_SESSION['ap_description'] = ucfirst($pet_data[$i]['p_description']);
                                            $_SESSION['ap_medical'] = ucfirst($pet_data[$i]['p_med']);
                                            $_SESSION['ap_behavior'] = ucfirst($pet_data[$i]['p_behavior']);
                                            $_SESSION['ap_rfa'] = ucfirst($pet_data[$i]['p_rfa']);
                                            $_SESSION['ap_picture'] = $pet_data[$i]['p_pic'];
                                            $_SESSION['ap_avail'] = ucfirst($pet_data[$i]['p_availability']);
                    
                                            $_SESSION['au_id'] = $pet_data[$i]['u_id'];
                                            $_SESSION['au_name'] = ucwords($pet_data[$i]['u_fname']." ".$pet_data[$i]['u_lname']);
                                            $_SESSION['au_form'] = $pet_data[$i]['u_form'];
                                            $_SESSION['au_date'] = $pet_data[$i]['date'];
                                            echo "<script> location.replace('a_adopted_details.php') </script>";
                                        } 
                                }
                            } ?>
                            <!-- END OF SAMPLE -->
                        </div>
                    </section>
        </section>
    
    <section class="new_foot">
            <div class="container"></div>
        </section>
    <div class="pet">
            <a id="back2Top" title="Back to top" href="#" class="hvr-radial-in"><i class="fas fa-paw"></i></a>
    </div>


    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/color-settings.js"></script>
    <!--Google Map APi Key-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS13AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->

    <script src="http://code.jquery.com/jquery.js"></script>
     
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>