
<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'dbh.php';
    session_start();
    unset($_SESSION['s_type']);
    if (isset($_SESSION['login']) && isset($_SESSION['admin'])) { echo "<script> location.replace('profile.php') </script>"; }
    elseif (!isset($_SESSION['adopt'])) { echo "<script> location.replace('u_pet.php') </script>";}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Profile</title>
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
        font-size: 16px;
    }
</style>

<body>

    <div class="main-wrapper pet profile">

        <div id="preloading"></div>
        <?php 
            $nav = (isset($_SESSION['role']) ? 'u_nav.php' : 'n_nav.php' );
            include $nav;
        ?>

        <section class="profile">
            <div class="container">
                <div class="slide">
                    <div class="row clearfix">
                        <!-- IAMGE OF PET -->
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <div class="new_custom images">
                                <div class="owl-carousel">
                                    <div class="item">
                                        <div class="testimon">
                                            <div class="image">
                                                <?php echo '<img src="'.$_SESSION["p_picture"].'" alt="image of '.$_SESSION["p_name"].'" title="pet" 
                                                    class="img-fluid customer">' ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- START OF PROFILE PET SAMPLE-->
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="name">
                                <h4>Name: <strong> <?php echo $_SESSION['p_name']; ?></strong></h4>
                                <ul class="petdetails">
                                    <li>Pet ID: <strong><?php echo $_SESSION['p_id']; ?></strong></li>
                                    <li>Age: <strong><?php echo $_SESSION['p_age']; ?></strong></li>
                                    <li>Type: <strong><?php echo $_SESSION['p_type']; ?></strong></li>
                                    <li>Breed: <strong><?php echo $_SESSION['p_breed']; ?></strong></li>
                                    <li>Gender: <strong><?php echo $_SESSION['p_gender']; ?></strong></li>
                                    <li>Desciption: <strong><?php echo $_SESSION['p_description']; ?></strong></li>
                                    <li>Medical History: <strong><?php echo $_SESSION['p_medical']; ?></strong></li>
                                    <li>Behavior: <strong><?php echo $_SESSION['p_behavior']; ?></strong></li>
                                    <li>Reason for Adoption: <strong><?php echo $_SESSION['p_rfa']; ?></strong></li>
                                </ul>
                            </div>
                            <div class="button">
                                    <div class="btn_admin">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                            <button name="adopt_now">
                                                Adopt Now
                                                <i class="fas fa-paw"></i> 
                                            </button>
                                        </form>
                                    </div>
                            </div>
                        </div>
                        <!-- END -->
                    </div>
                </div>
            </div>
        </section>

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
        <div class="pet">
            <a id="back2Top" title="Back to top" href="#" class="hvr-radial-in"><i class="fas fa-paw"></i></a>
        </div>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousewheel.js"></script>

    <script src="js/wow.min.js"></script>
    <script src="js/vivus.min.js"></script>

    <script src="js/script.js"></script>
    <!-- <script src="js/range-slider.js"></script> -->
    <!-- <script src="js/counter.js"></script> -->
    <script src="js/color-settings.js"></script>

    <?php
        if (isset($_POST['adopt_now'])) {
            $_SESSION['adopt_now'] = true;
            echo "<script> location.replace('u_adopt_now.php') </script>";
        }
    ?>
</body>

</html>