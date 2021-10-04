
<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'dbh.php';
    session_start();
    if (!isset($_SESSION['login'])) { echo "<script> location.replace('login.php') </script>"; }
    elseif (isset($_SESSION['login']) && !isset($_SESSION['admin'])) { echo "<script> location.replace('profile.php') </script>"; }
    elseif (!isset($_SESSION['a_adopted'])) { echo "<script> location.replace('a_adopted.php') </script>"; }
?>
<head>
    <meta charset="UTF-8">
    <link href="css/style-1.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Details</title>
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
        <div class="btn_admin" id="enlist">
                <?php 
                    if (isset($_SESSION['a_adopted']) && isset($_SESSION['a_requested'])) { 
                        unset($_SESSION['a_requested']);
                        ?>
                        <a href="a_request.php">
                <?php }
                    elseif (isset($_SESSION['a_adopted'])) { ?>
                        <a href="a_adopted.php">
                <?php }
                ?>
                            <button style="position: absolute; top: 140px; right: 190px; width: 130px;">Back</button><br><br></a>
                    </div>
                <div class="row clearfix" style="align-items: center; margin-left: 90px;">
                    <!--Content Side / Blog Single-->

                    <div class="team-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">

                            <!-- IMAGE -->
                            <div class="image">
                                <a href="#"><img width="263" height="300" src="<?php echo $_SESSION['ap_picture']; ?>" 
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <h3><a href="#"><?php echo $_SESSION['ap_name']; ?></a></h3>
                                <div class="designation">Age: <?php echo $_SESSION['ap_age']; ?></div>
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
                                    <strong><?php echo $_SESSION['ap_type']; ?></strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title">
                                    Breed:
                                </div>
                                <div class="col-md-8 mdetails">
                                    <strong><?php echo $_SESSION['ap_breed']; ?></strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title"> Gender: </div>
                                <div class="col-md-8 mdetails"> <strong><?php echo $_SESSION['ap_gender']; ?></strong> </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title">
                                    Description:
                                </div>
                                <div class="col-md-8 mdetails">
                                    <strong><?php echo $_SESSION['ap_description']; ?></strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title">
                                    Behavior:
                                </div>
                                <div class="col-md-8 mdetails">
                                    <strong><?php echo $_SESSION['ap_behavior']; ?></strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title">
                                    Reason for Adoption:
                                </div>
                                <div class="col-md-8 mdetails">
                                    <strong><?php echo $_SESSION['ap_rfa']; ?></strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title">
                                    Status
                                </div>
                                <div class="col-md-8 mdetails">
                                    <strong><?php echo $_SESSION['ap_avail']; ?></strong>
                                    <br>
                                    ID: <?php echo $_SESSION['au_id']; ?><br>
                                    Name: <?php echo $_SESSION['au_name']; ?><br>
                                    Date: <?php echo $_SESSION['au_date']; ?><br>
                                    Form: 
                                    <?php if ($_SESSION['ap_avail'] == 'Available') { echo $_SESSION['au_form']; } 
                                    else { ?>
                                        <a href="<?php echo $_SESSION['au_form']; ?>" download="<?php echo $_SESSION['au_form']; ?>">form</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php if ($_SESSION['ap_avail'] == 'Requested') { ?>
                            <form method="POST" enctype="multipart/form-data" action="">
                                <div class="btn_admin" id="enlist">
                                        <nobr><button style="width: 130px;" name="accept">Accept</button>
                                        <button style="width: 130px;" name="decline">Decline</button></nobr>
                                </div>
                            </form>
                        <?php } ?>
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

    <?php 
        if(isset($_POST['accept'])) {
            if (db_pet_accept($_SESSION['id'], $_SESSION['ap_id'])) {
                $_SESSION['ap_avail'] = 'Adopted';
                echo "<script> alert('Request Accepted'); </script>";
                echo "<script> location.replace('a_adopted.php') </script>";
            }
        }
        if(isset($_POST['decline'])) {
            if (db_pet_deny($_SESSION['id'], $_SESSION['ap_id'])) {
                $_SESSION['ap_avail'] = 'Available';
                echo "<script> alert('Request Declined'); </script>";
                echo "<script> location.replace('a_adopted.php') </script>";
            }
        }
    ?>

</body>

</html>