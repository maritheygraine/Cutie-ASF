
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
    <title>Cutie ASF</title>
    <link rel="shortcut icon" href="images/cutie.ico" type="image/x-icon">
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style-1.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
 
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

    <div class="main-wrapper pet">

        <div id="preloading"></div>
        
        <section class="featured">
            <?php 
                $nav = (isset($_SESSION['role']) ? 'u_nav.php' : 'n_nav.php' );
                include $nav;
            ?>
            
            <div class="slider">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <div class="text">
                                <div class="heading">
                                    <h1>
                                        Animals seeking Families <span class="wow pulse" data-wow-delay="1s"> Cutie ASF</span>
                                    </h1>
                                </div>
                                <p class="wow fadeInDown">
                                    Cutie ASF aims to help you find a new best friend and save all pets by giving them a new home. We encourage people to adopt animals and not buy them and save them all.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="image">
                                <div class="an_image an_image_hz_ps_right_end an_image_vt_ps_top an_image_anime_delay_300 an_image_anime_duration_1500 an_image_anime_style_ease_out_sine"
                                    data-speed="1.2">
                                    <div class="an_image_image" data-speed="1.2">
                                        <div class="pt_image"><span><img src="images/home_5/pets.png" title="Pet"
                                                    alt="Image of Pet"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="descript">
            <div class="context">
                <div class="container">
                    <div class="heading text-center">
                        <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                                class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                                    class="fas fa-paw"></i> </span></p>
                        <h2 class="wow fadeInDown">We can keep them <span class="wow pulse" data-wow-delay="1s">
                                happy</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="content">
                                <div class="image text-center wow fadeInLeft">
                                    <img src="images/home_5/circle_dogs.png" alt="image of product" title="product"
                                        class="img-fluid rounded-circle">
                                    <h4>Dog</h4>
                                    <p>
                                        Find your new furry best bud.  Loyal, lovable, energetic, and family-friendly will come into your life.

                                    </p>
                                </div>
                                <div class="image text-center wow fadeInLeft">
                                    <img src="images/home_5/circle_cats.png" alt="image of product" title="product"
                                        class="img-fluid rounded-circle">
                                    <h4>Cats</h4>
                                    <p>
                                        It brings you happiness, you'll get a great friend, independent, keep your house pest-free, have long life spans, and it lowers your stress and anxiety.


                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="dog text-center">
                                <img src="images/home_5/dog-in-house.png" alt="image of pet" title="pet"
                                    class="at_upDown">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="context">
                                <div class="image text-center wow fadeInRight">
                                    <img src="images/home_5/circle_smallpets.png" alt="image of product" title="product"
                                        class="img-fluid rounded-circle">
                                    <h4>Small Pets</h4>
                                    <p>
                                        It gives you a lifelong best friend, cute, improves your health, and makes you happier.


                                    </p>
                                </div>
                                <div class="image text-center wow fadeInRight">
                                    <img src="images/home_5/circle_reptiles.png" alt="image of product" title="product"
                                        class="img-fluid rounded-circle">
                                    <h4>Reptiles</h4>
                                    <p>
                                        You'll have an amazing pet that can adapt over time in a range of habitats and lifestyles, doesn't require a lot of space, and capable of recognizing people by voice, sight, and smell.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="new_custom">
            <div class="container">
                <div class="heading text-center">
                    <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                            class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                                class="fas fa-paw"></i> </span></p>
                    <h2 class="wow fadeInDown">See What Our <span class="wow pulse" data-wow-delay="1s"> Client
                            Say</span></h2>
                </div>
                <div class="owl-carousel">
                    <div class="item">
                        <div class="testimon">
                            <div class="image">
                                <img src="images/home_5/customer-1.png" alt="image of client" title="client"
                                    class="img-fluid customer">
                                <img src="images/home_5/cta-2-dot-1.png" alt="Image of Dot" title="Dot"
                                    class="img-fluid dots">
                            </div>
                            <div class="content">
                                <h3 class="wow fadeInDown">Jessica Johnson</h3>
                                <span class="open">❝</span>
                                <p class="wow fadeInUp">
                                    My boxer is spoiled rotten and needs a lot of human interaction which he always
                                    receives. Cutie ASF is the best!!
                                </p>
                                <span class="close">❞</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimon">
                            <div class="image">
                                <img src="images/home_5/customer-2.png" alt="image of client" title="client"
                                    class="img-fluid customer">
                                <img src="images/home_5/cta-2-dot-1.png" alt="Image of Dot" title="Dot"
                                    class="img-fluid dots">
                            </div>
                            <div class="content">
                                <h3>Alina Calrk</h3>
                                <span class="open">❝</span>
                                <p>
                                    Just wanted to let you know how blessed I have been to have you guys care for me
                                    over the past few years.
                                </p>
                                <span class="close">❞</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimon">
                            <div class="image">
                                <img src="images/home_5/customer-3.png" alt="image of client" title="client"
                                    class="img-fluid customer">
                                <img src="images/home_5/cta-2-dot-1.png" alt="Image of Dot" title="Dot"
                                    class="img-fluid dots">
                            </div>
                            <div class="content">
                                <h3>Alison Bella</h3>
                                <span class="open">❝</span>
                                <p>
                                    We love bring Lexi to Cutie ASF! The staff is always so friendly and it’s so
                                    convenient for our busy schedules!
                                </p>
                                <span class="close">❞</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="an_image an_image_hz_ps_right an_image_vt_ps_middle an_image_anime_delay_300 an_image_anime_duration_1500 an_image_anime_style_ease_out_sine"
                    data-speed="1.2">
                    <div class="an_image_image" data-speed="1.2">
                        <div class="pt_image">
                            <span>
                                <img src="images/home_5/frisbee.png" title="Frisbee" alt="Image of Frisbee"
                                    class="frisbee">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="method">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="text">
                            <div class="counter-portion">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="box borded">
                                            <div class="icon">
                                                <span class="icon flaticon-easter-bunny"></span>
                                            </div>
                                            <div class="num">
                                                <span class="counting-box">1500</span>
                                                <span>+</span>
                                            </div>
                                            <div class="description">PET BORDED</div>
                                        </div>
                                        <div class="box happy">
                                            <div class="icon">
                                                <span class="icon flaticon-brush"></span>
                                            </div>
                                            <div class="num">
                                                <span class="counting-box">900</span>
                                                <span>+</span>
                                            </div>
                                            <div class="description">HAPPY CLIENTS</div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="box project">
                                            <div class="icon">
                                                <span class="icon flaticon-money-bag"></span>
                                            </div>
                                            <div class="num">
                                                <span class="counting-box">500</span>
                                                <span>+</span>
                                            </div>
                                            <div class="description">PROJECT DONE</div>
                                        </div>
                                        <div class="box event">
                                            <div class="icon">
                                                <span class="icon flaticon-award"></span>
                                            </div>
                                            <div class="num">
                                                <span class="counting-box">300</span>
                                                <span>+</span>
                                            </div>
                                            <div class="description">EVENT DONE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="house floated">
                            <div class="an_image an_image_hz_ps_left an_image_vt_ps_middle an_image_anime_delay_300 an_image_anime_duration_1500 an_image_anime_style_ease_out_sine"
                                data-speed="1.2">
                                <div class="an_image_image" data-speed="1.2">
                                    <div class="pt_image">
                                        <span>
                                            <img src="images/home_5/ball.png" title="Pet" alt="Image of Pet"
                                                class="ball">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="images">
                                    <div class="icon">
                                        <div class="svg-icon back" id="svg-9"
                                            data-svg-icon="images/home_5/svg/blob (3).svg">
                                        </div>
                                    </div>
                                    <img src="images/home_5/animal.png" alt="Image of Animal" title="Animal"
                                        class="img-fluid" id="animal">
                                    <img src="images/home_5/dots.png" alt="" class="dots rotate">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="steps">
            <div class="container">
                <div class="heading text-center">
                    <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                            class="orange"><i class="fas fa-paw"></i> </span><span class="purple">
                            <i class="fas fa-paw"></i> </span></p>
                    <h2 class="wow fadeInDown">How to adopt from <span class="wow pulse" data-wow-delay="1s">
                            Cutie ASF</span></h2>
                </div>
                <div class="service">
                    <div class="cards">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card orange">
                                    <div class="content">
                                        <h5>Application form</h5>
                                        <p>
                                            Download and fill in the Adoption Application Form. Cutie ASF will need to verify your identity for the pet's safety.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card yellow">
                                    <div class="content">
                                        <h5>Wait for Confimation</h5>
                                        <p>
                                            Check your email or phone number for the admin's confirmation regarding the adoption.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card purple">
                                    <div class="content">
                                        <h5>Meet your Pet</h5>
                                        <p>
                                            Your visit will be scheduled once your got the confimation where in you can finally be with your pet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        

        <section class="new_foot">
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