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
    <title>Pets</title>
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
    <div class="main-wrapper pet buy">

        <div id="preloading"></div>
        <?php 
            $nav = (isset($_SESSION['role']) ? 'u_nav.php' : 'n_nav.php' );
            include $nav;
        ?>

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

                    <div class="row">
                        <!-- #START OF DIV PER PET-->
                        <?php
                        $pet_data = db_pet_a_pets(); // GET PET DETAILS FROM DB
                        if ($pet_data != 0) {
                            for ($i = 0; $i<sizeof($pet_data); $i++) { 
                            $id = strval($pet_data[$i]['id']); ?>  <!-- ID TO STRING -->
                                <div class="col-lg-3 col-md-4 col-sm-10">
                                    <div class="member">
                                        <div class="image"> <!-- PET IMAGE -->
                                            <?php echo '<img src="'.$pet_data[$i]["picture"].'" alt="image of '.$pet_data[$i]["name"].'" title="pet" class="img-fluid customer" style="height:300px;">'; ?>
                                        </div>
                                        <div class="content">
                                            <a href="#">
                                                <h4 class="wow fadeInDown"><?php echo ucfirst($pet_data[$i]['name']); ?></h4> <!-- PET NAME -->
                                            </a>

                                            <ul> <!-- PET DETAILS -->
                                                <li><i class="fas fa-paw yellow mr-2"></i> <b>Pet ID: </b><?php echo $id; ?></li>
                                                <li><i class="fas fa-paw yellow mr-2"></i> <?php echo ucwords($pet_data[$i]['gender']." ".$pet_data[$i]['type']); ?></li>
                                                <li><i class="fas fa-paw yellow mr-2"></i> <?php echo ucfirst($pet_data[$i]['breed']); ?></li>
                                                <li><i class="fas fa-paw yellow mr-2"></i> <?php echo ucfirst($pet_data[$i]['description']); ?></li>
                                            </ul>

                                            <div class="btn_admin"> <!-- BUTTONS -->
                                                <form method="POST" enctype="multipart/form-data" action="">
                                                    <?php echo "<button style='width: 150px;' id='pet".$id."' name='pet".$id."'>" ?>
                                                        Adopt Me <i class="fas fa-paw"></i> 
                                                    </button>
                                                </form>
                                            </div>

                                            <?php
                                                if (isset($_POST['pet'.$id])) {
                                                    $_SESSION['adopt'] = true;
                                                    $_SESSION['p_id'] = $id;
                                                    $_SESSION['p_name'] = ucfirst($pet_data[$i]['name']);
                                                    $_SESSION['p_type'] = ucfirst($pet_data[$i]['type']);
                                                    $_SESSION['p_breed'] = ucfirst($pet_data[$i]['breed']);
                                                    $_SESSION['p_age'] = $pet_data[$i]['age'];
                                                    $_SESSION['p_gender'] = ucfirst($pet_data[$i]['gender']);
                                                    $_SESSION['p_description'] = ucfirst($pet_data[$i]['description']);
                                                    $_SESSION['p_medical'] = ucfirst($pet_data[$i]['medical']);
                                                    $_SESSION['p_behavior'] = ucfirst($pet_data[$i]['behavior']);
                                                    $_SESSION['p_rfa'] = ucfirst($pet_data[$i]['rfa']);
                                                    $_SESSION['p_picture'] = $pet_data[$i]['picture'];
                                                    echo "<script> location.replace('u_pet_details.php') </script>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                        <?php }} ?>
                        <!-- END OF DIV -->
                    </div>
                </div>
            </section>
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