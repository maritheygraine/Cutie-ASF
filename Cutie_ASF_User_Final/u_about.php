<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'dbh.php';
    session_start();
    $_SESSION['nav'] = true;
    unset($_SESSION['s_type']);
    if (isset($_SESSION['login']) && isset($_SESSION['admin'])) { echo "<script> location.replace('profile.php') </script>"; }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
    <div class="main-wrapper pet about">

        <div id="preloading"></div>
        <?php 
            $nav = (isset($_SESSION['role']) ? 'u_nav.php' : 'n_nav.php' );
            include $nav;
        ?>

        <section class="about_us">
            <div class="container">
                <div class="heading text-center">
                    <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                            class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                                class="fas fa-paw"></i> </span></p>
                    <h2 class="wow fadeInDown">Welcome to <span class="wow pulse" data-wow-delay="1s">
                            Cutie ASF</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 odr_change">
                        <div class="image">
                            <div class="an_image an_image_hz_ps_center an_image_vt_ps_bottom an_image_anime_delay_300 an_image_anime_duration_1500 an_image_anime_style_ease_out_sine"
                                data-speed="1.2">
                                <div class="an_image_image" data-speed="1.2">
                                    <div class="pt_image"><span><img src="images/home_5/pets.png" title="Pet"
                                                alt="Image of Pet"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="text">
                            <p>
                                Cutie ASF is a pet-loving place that provides an easier way to connect people looking for a new pet. Cutie ASF aims to find, help, and seek a new fur buddy through online websites. It helps out the potential adopters to find a pet of their choice, post listings for adoption, and seek to join animal/pet campaigns. CuteASF is open for all. 
                            </p>
                            <p>
                                It is available for everyone, especially for pet lovers willing to adopt or find a new home for pets.
                            </p>
                            <ul>
                                <li><i class="orange fas fa-paw pr-2"></i> Adorable pets needs your love.
                                </li>
                                <li><i class="orange fas fa-paw pr-2"></i> Homeless pets need your help, give them the loving home they deserve.</li>
                                <li><i class="orange fas fa-paw pr-2"></i> Save them all, allow them an opportunity to live and find humane.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <section class="service">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="icon orange">
                                    <div class="svg-icon" id="svg-4" data-svg-icon="images/home_5/svg/pet_heal.svg">
                                    </div>
                                </div>
                                <div class="context">
                                    <h5 class="orange">
                                        We Heal Pets
                                    </h5>
                                    <p>
                                        Quick Veterinary Services
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="icon yellow">
                                    <div class="svg-icon" id="svg-5" data-svg-icon="images/home_5/svg/pet_shelter.svg">
                                    </div>
                                </div>
                                <div class="context">
                                    <h5 class="yellow">
                                        We Care Pets
                                    </h5>
                                    <p>
                                        Pet Sheltering & Adoption
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="icon purple">
                                    <div class="svg-icon" id="svg-6" data-svg-icon="images/home_5/svg/pet_donation.svg">
                                    </div>
                                </div>
                                <div class="context">
                                    <h5 class="purple">
                                        We Love Pets
                                    </h5>
                                    <p>
                                        Show Love & Donate Us
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <section class="team">
            <div class="container">
                <div class="heading text-center">
                    <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                            class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                                class="fas fa-paw"></i> </span></p>
                    <h2 class="wow fadeInDown">Our Team <span class="wow pulse" data-wow-delay="1s">
                            Members</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12"> <!-- Renzo -->
                        <div class="member">
                            <div class="image">
                                <img src="images/home_5/team1.jpg" alt="image of client" title="client"
                                    class="img-fluid customer" style="height: 300px">
                            </div>
                            <div class="content"> 
                                <h4 class="wow fadeInDown">Ken Renzo Puguan</h4>
                                <p class="wow fadeInUp">
                                    Team Lead
                                </p>
                                <p>
                                    <a href="https://www.facebook.com/kenzo.zoren/" title="facebook"><i class="fas fa-facebook"></i></a>
                                    <a href="https://twitter.com/kenzo_zoren" title="twitter"><i class="fas fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/kenzo_zoren/" title="instagram"><i class="fas fa-instagram"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12"> <!-- Marithe -->
                        <div class="member">
                            <div class="image">
                                <img src="images/home_5/team2.jpg" alt="image of client" title="client"
                                    class="img-fluid customer" style="height: 300px">
                            </div>
                            <div class="content">
                                <h4 class="wow fadeInDown">Marithe Lagundino</h4>
                                <p class="wow fadeInUp">
                                    Front-end Developer
                                </p>
                                <p>
                                    <a href="https://www.facebook.com/marithe.ygraine/" title="facebook"><i class="fas fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/maritheygraine/" title="instagram"><i class="fas fa-instagram"></i></a>
                                    <a href="https://twitter.com/_ygraine" title="twitter"><i class="fas fa-twitter"></i></a>
                                </p>
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12"> <!-- Jethro -->
                        <div class="member">
                            <div class="image">
                                <img src="images/home_5/team3.jpg" alt="image of client" title="client"
                                    class="img-fluid customer" style="height: 300px">
                            </div>
                            <div class="content">
                                <h4 class="wow fadeInDown">Ed Jethro Pacaño</h4>
                                <p class="wow fadeInUp">
                                    Back-end Developer
                                </p>
                                <p>
                                    <a href="https://www.facebook.com/o.r.h.t.e.j.14" title="facebook"><i class="fas fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/orhtej014/" title="instagram"><i class="fas fa-instagram"></i></a>
                                    <a href="" title="twitter"><i class="fas fa-twitter"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12"> <!-- Caselyn -->
                        <div class="member">
                            <div class="image">
                                <img src="images/home_5/team4.jpg" alt="image of client" title="client"
                                    class="img-fluid customer" style="height: 300px">
                            </div>
                            <div class="content">
                                <h4 class="wow fadeInDown">Caselyn Parayaoan</h4>
                                <p class="wow fadeInUp">
                                    UI Designer
                                </p>
                                <p>
                                    <a href="https://www.facebook.com/selyn.parayaoan" title="facebook"><i class="fas fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/caseparayaoan/" title="instagram"><i class="fas fa-instagram"></i></a>
                                    <a href="https://twitter.com/casepryn" title="twitter"><i class="fas fa-twitter"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12"> <!-- Pia -->
                        <div class="member">
                            <div class="image">
                                <img src="images/home_5/team5.jpg" alt="image of client" title="client"
                                    class="img-fluid customer" style="height: 300px">
                            </div>
                            <div class="content">
                                <h4 class="wow fadeInDown">Pia Angelique Dee</h4>
                                <p class="wow fadeInUp">
                                    Quality Assurance
                                </p>
                                <p>
                                    <a href="https://www.facebook.com/peyaaah.deeey/" title="facebook"><i class="fas fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/piangeet/" title="instagram"><i class="fas fa-instagram"></i></a>
                                    <a href="https://twitter.com/piangeeet" title="twitter"><i class="fas fa-twitter"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
    <script src="js/color-settings.js"></script>

</body>

</html>