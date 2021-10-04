
<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'dbh.php';
    session_start();
    if (!isset($_SESSION['login'])) { echo "<script> location.replace('login.php') </script>"; }
    elseif (isset($_SESSION['login']) && !isset($_SESSION['admin'])) { echo "<script> location.replace('profile.php') </script>"; }
?>
<head>
    <meta charset="UTF-8">
    <link href="css/style-1.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hooman's Profile</title>
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
        <?php include 'a_nav.php' ?>

        <section class="profile" style="margin-top: -40px;">
            <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix" style="align-items: center; margin-left: 90px;">
                    <!--Content Side / Blog Single-->
                    <div class="team-block col-md-4 col-sm-6 col-xs-12" style="margin-top: 16px;">
                        <div class="inner-box">
                            <!-- IMAGE -->
                            <div class="image">
                                <a href="#"><img width="263" height="300" src="images/home_5/pet-10.jfif" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" style="max-height: 450px;max-width: 450px;"></a>
                            </div>
                            <div class="lower-box">
                                <h3><a href="#">Bogart</a></h3>
                                <div class="designation">Age: 6 Years Old</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="memberdetails">
                            <div class="row">
                                <div class="col-md-3 title">
                                    Type:
                                </div>
                                <div class="col-md-8 mdetails">
                                    <strong>Dog</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title">
                                    Breed:
                                </div>
                                <div class="col-md-8 mdetails">
                                    <strong>Shitzu</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title"> Gender: </div>
                                <div class="col-md-8 mdetails"> <strong>Female</strong> </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title">
                                    Description:
                                </div>
                                <div class="col-md-8 mdetails">
                                    <strong>Black with white</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title">
                                    Behavior:
                                </div>
                                <div class="col-md-8 mdetails">
                                    <strong>Tamad, Gutomin</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title">
                                    Reason for Adoption:
                                </div>
                                <div class="col-md-8 mdetails">
                                    <strong>Wala kasama sa house</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title">
                                    Date of Adoption:
                                </div>
                                <div class="col-md-8 mdetails">
                                    <strong>Dec 1, 2020</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title">
                                    Status
                                </div>
                                <div class="col-md-8 mdetails">
                                    <strong>Adopted</strong>
                                    <br>
                                    ID: <br>
                                    Name: <br>
                                    Date: <br>
                                    Form: 
                                </div>
                            </div>
                        </div>
                        <div class="btn_admin" id="enlist">
                            <a href="a_adopted.php">
                                 <button style="width: 130px;">
                                     Back
                                 </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </section>

        <section class="new_foot">
            <div class="container"></div>
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