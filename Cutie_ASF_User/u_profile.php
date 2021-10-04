
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="css/style-1.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hooman's Profile</title>
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
    <div class="main-wrapper pet tm_profile">

        <div id="preloading"></div>
        
        <section class="featured">
            <?php include 'u_nav.php' ?>
            <div class="crumb center">
                <div class="container">
                    <h1 class="text-center">
                        Hooman's <span class="wow pulse" data-wow-delay="1s"> Profile</span>
                    </h1>

                </div>
            </div>

        </section>

        <section class="profile">
            <div class="container">
                <div class="slide">
                    <div class="row">
                        <div class="col-lg-15 col-md-12 col-sm-12">
                            <div class="spec card">
                                <div class="name">
                                    <h4>Marithe Ygraine Lagundino </h4>
                                </div>

                                <ul>
                                    <li>
                                    <h5>Personal Information</h5>
                                    </li>
                                    <li><i class="fas fa-paw yellow mr-2"></i> <span> Username: </span> maritheygraine</li>
                                    <li><i class="fas fa-paw yellow mr-2"></i> <span> Birthday: </span> May 1 2000</li>
                                    <li><i class="fas fa-paw yellow mr-2"></i> <span> Gender: </span>
                                        Female</li>
                                    <li><i class="fas fa-paw yellow mr-2"></i> <span> Email: </span> marithelagundino@ymail.com</li>
                                    <li><i class="fas fa-paw yellow mr-2"></i> <span> Role: </span> User</li>
                                </ul>
                                <!-- Change Password -->
                                <ul>
                                    <li>
                                    <h5>Change Password</h5>
                                    </li>
                                    <form action="b_login_session.php" method="post">
                                        <div class="form-outline mb-4">
                                            <input type="password" class="form-control" name="pass" />
                                            <label class="form-label" for="pass">Current Password</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" class="form-control" name="pass_confirm" id="password" />
                                            <label class="form-label" for="pass_confirm">Enter New Password</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" class="form-control" name="new_password_confirm" id="password_confirm" />
                                            <label class="form-label" for="new_password_confirm">Re-enter New Password</label>
                                        </div>

                                        <div class="button wow fadeInUp" >
                                            <div class="btn_cus" id="cus" style="width:50%; margin-right: -28%">
                                                <button type="submit"name="ud" value="Submit">
                                                    Update Password  
                                                    <i class="fas fa-paw"></i> 
                                                </button>
                                            </div>
                                            <div class="btn_cus" id="cus">
                                                <button type="submit"name="logout" value="Submit">
                                                    Logout 
                                                    <i class="fas fa-paw"></i> 
                                                </button>
                                            </div>
                                        </div>

                                            

                                            
                                        

                                    </form>

                                        <?php 
                                            if (isset($_POST['logout'])) {
                                                session_unset();
                                                session_destroy();
                                                echo "<script> location.replace('/Cutie_ASFu_login.php') </script>";
                                            }
                                        ?>
                                </ul>
                            </div>
                        </div>
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

    <script src="js/color-settings.js"></script>

</body>

</html>