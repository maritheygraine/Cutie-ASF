<!DOCTYPE html>
<html>
<?php 
    if (!isset($_SESSION['nav'])) { echo "<script> location.replace('login.php') </script>"; }
?>
<head>
	<title></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cutie ASF</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
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

            <div class="header">
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                        <a href="u_home.php" class="navbar-brand">
                            <img src="images/cutie_logo.png" width="" alt="image of logo" title="logo"
                                class="img-fluid d-inline-block align-middle mr-2" style="width: 240px; margin-top: 5px;">
                            <span class="text-uppercase font-weight-bold"></span>
                        </a> 

                        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                            class="navbar-toggler"><span class="navbar-toggler-icon fa">&#xf0c9;</span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto" >
                                <!-- #HOME NAV-->
                                <li class="nav-item dropdown"> 
                                    <a href="u_home.php" class="hvr-overline-from-center nav-link">HOME</a> 
                                </li>
                                <!-- #ABOUT NAV-->
                                <li class="nav-item dropdown">
                                    <a href="u_about.php" class="hvr-overline-from-center nav-link">ABOUT</a>
                                </li>
                                <!-- #ADOPTION NAV-->
                                 <li class="nav-item dropdown">
                                    <a href="u_pet.php" class="hvr-overline-from-center nav-link">PETS</a>
                                </li>
                                <!-- #ADOPTED NAV-->
                                <li class="nav-item dropdown">
                                    <a href="u_adopted_pets.php" class="hvr-overline-from-center nav-link">ADOPTED PETS</a>
                                </li>
                                <!-- #CONTACT NAV-->
                                <li class="nav-item dropdown">
                                    <a href="u_contact.php" class="hvr-overline-from-center nav-link">CONTACT</a>
                                </li>
                                <!-- #SEARCH NAV -->
                                <li class="nav-item ">
                                    <div class="search-box-outer">
                                        <div class="search-box-btn">
                                            <a href="#" class="nav-link"><i class="fas fa-search"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <!-- #ACCOUNT NAV-->
                                <li class="nav-item ">
                                    <div class="search-box-outer">
                                        <div class="search-box-btn">
                                            <?php if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) { ?>
                                                <a href="login.php" class="nav-link"><i class="fas fa-user"></i></a> <?php } 
                                            else { ?>
                                                <a href="profile.php" class="nav-link"><i class="fas fa-user"></i></a> 
                                            <?php } ?>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="main-header">
                    <div class="sticky-header" >
                        <div class="auto-container clearfix" >
                            <!--Logo-->
                            <div class="logo pull-left" >
                                <a href="u_home.php" class="img-responsive"><img src="images/cutie_small.png" alt=""
                                        title="" style="width: 150px; padding-top: 12px; margin-left: 24px;"></a>
                            </div>
                            <!--Right Col-->
                            <div class="right-col pull-right" >
                                <!-- Main Menu -->
                                <nav class="main-menu">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li class="dropdown"><a href="u_home.php">Home</a></li>
                                            <li class="dropdown"><a href="u_about.php">About</a></li>
                                            <li class="dropdown"><a href="u_pet.php">Pets</a></li>
                                            <li class="dropdown"><a href="u_adopted_pets.php">Adopted Pets</a></li>
                                            <li class="dropdown"><a href="u_contact.php">Contact</a></li>
                                            <li class="dropdown"><a href="#" class="nav-link"><i class="fas fa-search"></i></a>
                                            <li class="dropdown"><a href="login.php"><i class="fas fa-user"></i></a>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                        </div>
                    </div> 
                </div>
            </div>


        <!-- #SEARCH POP UP -->
        <div class="search-popup">
            <button class="close-search style-two"><img src="images/home_5/cross-out.png" alt=""></button>
            <button class="close-search"><img src="images/home_5/cross-out.png" alt=""></button>
            <form method="post" action="#">
                <div class="form-group">
                    <input type="search" name="search_field" id="search_field" placeholder="Search Here Using Pet ID" required>
                    <button type="submit" name="search_pet"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>

        <!-- #SIGN UP / SIGN IN POP UP -->
        

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousewheel.js"></script>

    <script src="js/wow.min.js"></script>
    <script src="js/vivus.min.js"></script>

    <script src="js/script.js"></script>
    <script src="js/color-settings.js"></script>
    <?php 
        if(isset($_POST['search_pet'])) {
            $pet_id = $_POST['search_field'];
            if(str_replace(" ", "", $pet_id) == "") { echo "<script> alert('Invalid input.'); </script>"; }
            else {
                if(db_pet_petExists($pet_id)) {
                    $pet_data = db_pet_search($pet_id);
                    if ($pet_data != 0) {
                        $_SESSION['adopt'] = true;
                        $_SESSION['p_id'] = $pet_id;
                        $_SESSION['p_name'] = ucfirst($pet_data[0]['name']);
                        $_SESSION['p_type'] = ucfirst($pet_data[0]['type']);
                        $_SESSION['p_breed'] = ucfirst($pet_data[0]['breed']);
                        $_SESSION['p_age'] = $pet_data[0]['age'];
                        $_SESSION['p_gender'] = ucfirst($pet_data[0]['gender']);
                        $_SESSION['p_description'] = ucfirst($pet_data[0]['description']);
                        $_SESSION['p_medical'] = ucfirst($pet_data[0]['medical']);
                        $_SESSION['p_behavior'] = ucfirst($pet_data[0]['behavior']);
                        $_SESSION['p_rfa'] = ucfirst($pet_data[0]['rfa']);
                        $_SESSION['p_picture'] = $pet_data[0]['picture'];
                        echo "<script> location.replace('u_pet_details.php') </script>";
                    }
                    else {
                        echo "<script> alert('No pet was found.'); </script>";
                    }
                }
                else {
                    echo "<script> alert('No pet was found.'); </script>";
                }
            }
        }
    ?>
</body>
</html>