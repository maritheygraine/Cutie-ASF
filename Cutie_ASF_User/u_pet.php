<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
    <div class="main-wrapper pet buy">

        <div id="preloading"></div>
        <?php include 'u_nav.php' ?>

        <div class="pet about second">
            <section class="team">
                <div class="container">
                    <div class="heading text-center">
                        <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                                class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                                    class="fas fa-paw"></i> </span></p>
                        <h2 class="wow fadeInDown">Ready to Adopt <span class="wow pulse" data-wow-delay="1s">
                                Pets</span>
                        </h2>
                    </div>

                    <!-- #START OF DIV PER PET SAMPLE-->
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="member">
                                <div class="image">
                                    <img src="images/home_5/pet-1.png" alt="image of pet" title="pet"
                                        class="img-fluid customer">
                                </div>
                                <div class="content">
                                    <a href="#" title="Scooby">
                                        <h4 class="wow fadeInDown">Scooby</h4>
                                    </a>

                                    <ul>
                                        <li><i class="fas fa-paw yellow mr-2"></i> Male Adult</li>
                                        <li><i class="fas fa-paw yellow mr-2"></i> American Staffordshire Terrier</li>
                                        
                                    </ul>

                                    <div class="button wow fadeInUp">
                                        <!-- Goes to pet_details-->
                                        <a href="u_pet_details.php" class="btn main" title="contact">
                                            Adopt me <i class="fas fa-paw"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF SAMPLE -->
                    </div>
                </div>
            </section>
        </div>

        <section class="new_foot">
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

</body>

</html>