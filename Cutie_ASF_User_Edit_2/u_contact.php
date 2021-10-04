<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'dbh.php';
    session_start();
    $_SESSION['nav'] = true;
    if (isset($_SESSION['login']) && isset($_SESSION['admin'])) { echo "<script> location.replace('profile.php') </script>"; }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
    <div class="main-wrapper pet contact">

        <div id="preloading"></div>
        <?php 
            $nav = (isset($_SESSION['role']) ? 'u_nav.php' : 'n_nav.php' );
            include $nav;
        ?>

        <div class="pet service" style="margin-top: -30px;">
            <section class="contact">
                <div class="container">
                    <div class="heading text-center">
                        <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                                class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                                    class="fas fa-paw"></i> </span></p>
                        <h2>Get In <span class="wow pulse" data-wow-delay="1s"> Touch </span></h2>
                    </div>
                    <div class="container">
                            <div class="heading text-center">
                                        <h5>Address: </h5>
                                        <h6>Manila, Philippines</h6>
                                    
                                        <h5>Phone: </h5>
                                        <h6>+1412 345 6789</h6>
                                    
                                        <h5>Email:</h5>
                                        <h6>cutieasf@gmail.com</h6>

                            </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="pet">
            <a id="back2Top" title="Back to top" href="#" class="hvr-radial-in"><i class="fas fa-paw"></i></a>
        </div>

        <section class="new_foot" style="margin-top: 10px;">
            <div class="container">
                <div class="cat wow fadeIn">
                    <img src="images/home_5/img-1.png" alt="image of pets" title="pets">
                </div>
                <div class="dog wow fadeIn">
                    <img src="images/home_5/img-2.png" alt="image of pets" title="pets">
                </div>
            </div>
        </section>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousewheel.js"></script>

    <script src="js/wow.min.js"></script>
    <script src="js/vivus.min.js"></script>

    <script src="js/script.js"></script>
    
    <script src="js/color-settings.js"></script>

</body>

</html>