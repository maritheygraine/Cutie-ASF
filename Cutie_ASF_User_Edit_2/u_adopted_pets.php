
<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'dbh.php';
    session_start();
    if (!isset($_SESSION['login'])) { echo "<script> location.replace('login.php') </script>"; }
    elseif (isset($_SESSION['login']) && !isset($_SESSION['user'])) { echo "<script> location.replace('profile.php') </script>"; }
?>
<head>
    <meta charset="UTF-8">
    <link href="css/style-1.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Adopted Pets</title>
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
        font-size: 14px;
    }
</style>

<body>
    <div class="main-wrapper pet tm_profile">

        <div id="preloading"></div>
        
        <section class="featured">
            <?php 
                $nav = (isset($_SESSION['role']) ? 'u_nav.php' : 'n_nav.php' );
                include $nav;
            ?>
            <div class="heading text-center">
                        <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                                class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                                    class="fas fa-paw"></i> </span></p>
                        <h2 class="wow fadeInDown">My Adopted <span class="wow pulse" data-wow-delay="1s">
                                Pets</span>
                        </h2>
                    </div>
        </section>

        <section class="profile">
            <section class="brows-job-category">
                        <div class="container">
                            <?php 
                            $pet_data = db_view_u_petsReqAdopt($_SESSION['id']);
                            if ($pet_data != 0) {
                                for ($i = 0; $i<sizeof($pet_data); $i++) { ?>  
                                    <form method="POST" enctype="multipart/form-data" action="">
                                        <button type="" class="adopted-pets" name="<?php echo "click".$i; ?>">
                                            <article>
                                                    <div class="row">
                                                        <div class="col-lg-1 col-md-6 small-padding">
                                                            <div class="brows-job-company-img">
                                                                <img src="<?php echo $pet_data[$i]['p_pic'] ?>"
                                                                    class="img-responsive" alt="" style="margin-left: 10px;">
                                                                </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="brows-job-position" style="text-align: left">
                                                                <h3><?php echo ucwords($pet_data[$i]['p_name']); ?></h3>
                                                                <p><span><?php echo $pet_data[$i]['p_breed'] ?></span><span class="brows-job-sallery">
                                                                    <i class="fa fa-birthday-cake" ></i><?php echo $pet_data[$i]['p_age']; ?></span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <div class="brows-job-location" style="text-align: left">
                                                                <p><i class="fa fa-handshake-o"></i><?php echo $pet_data[$i]['u_fname']." ".$pet_data[$i]['u_lname']; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-6">
                                                            <?php $color = ($pet_data[$i]['p_availability'] == 'adopted' ? 'enternship' : 'part-time'); ?>
                                                            <div class="brows-job-type" style="text-align: left" ><span class="<?php echo $color; ?>">
                                                                <?php echo $pet_data[$i]['p_availability']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </article>                         
                                        </button>
                            <?php
                                        if (isset($_POST['click'.$i])) {
                                            $_SESSION['u_adopted'] = true;
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
                                            echo "<script> location.replace('u_adopted_details.php') </script>";
                                        }
                                    }
                                }
                            ?>
                        <!-- END OF SAMPLE -->  
                        </div>
                    </section>
        </section>
        
        
    <div class="pet">
            <a id="back2Top" title="Back to top" href="#" class="hvr-radial-in"><i class="fas fa-paw"></i></a>
        </div>

        <section class="new_foot" style="margin-top: 200px;">
            <div class="container">
                <div class="cat wow fadeIn">
                    <img src="images/home_5/img-1.png" alt="image of pets" title="pets">
                </div>
                <div class="dog wow fadeIn">
                    <img src="images/home_5/img-2.png" alt="image of pets" title="pets">
                </div>
            </div>
        </section>

    
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
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->
</body>

</html>