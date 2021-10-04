
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Profile</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style-1.css">
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
        <?php include 'u_nav.php'; ?>

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
                                                <img src="images/home_5/pet-profile.png" alt="image of pet" title="pet"
                                                    class="img-fluid customer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- START OF PROFILE PET SAMPLE-->
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <div class="name">
                                <h4>Name: <strong>TINKO</strong></h4>
                                <ul class="petdetails">
                                    <li>Age: <strong>6</strong></li>
                                    <li>Type: <strong>Dog</strong></li>
                                    <li>Breed: <strong>Shitzu</strong></li>
                                    <li>Gender: <strong>Female</strong></li>
                                    <li>Desciption: <strong>Black small dog</strong></li>
                                    <li>Medical History: <strong>Complete vaccination</strong></li>
                                    <li>Behavior: <strong>Gutomin</strong></li>
                                    <li>Reason for Adoption: <strong>Ala lang</strong></li>
                                </ul>
                            </div>
                            <div class="btn_admin">
                                        <button id="enlist">
                                            Edit  
                                            <i class="fas fa-paw"></i> 
                                        </button>
                                    </div>
                        </div>
                        <!-- END -->
                    </div>
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

</body>

</html>