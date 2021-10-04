
<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'dbh.php';
    session_start();
    if (isset($_SESSION['login']) && isset($_SESSION['admin'])) { echo "<script> location.replace('profile.php') </script>"; }
    elseif (!isset($_SESSION['login'])) { 
        echo "<script> alert('Please login/register first to adopt a pet.'); </script>";
        echo "<script> location.replace('login.php') </script>"; 
    }
    elseif (!isset($_SESSION['adopt_now'])) { echo "<script> location.replace('u_pet.php') </script>";}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Now</title>
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
    <div class="main-wrapper pet detail">

        <div id="preloading"></div>

        <section class="featured">
            <?php 
                $nav = (isset($_SESSION['role']) ? 'u_nav.php' : 'n_nav.php' );
                include $nav;
            ?>
                
            <div class="crumb center">
                <div class="container">
                    <h1>
                        Adoption <span class="wow pulse" data-wow-delay="1s"> Request </span>
                    </h1>
                </div>
            </div>

        </section>

        <section class="jb_detail">
            <div class="container">
                <div class="row mt-5">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="description pr-4 mb-4">
                                    <h3>Step 1:</h3>
                                    <h5>Download the Application Form</h5>
                                    <p>
                                        Download through the CutieASF website or this <a href="files/adoption_form.docx" download="application form">  link. </a>
                                    </p>
                                    
                                    <div class="btn_admin">
                                        <a href="files/adoption_form.docx" download="application form">
                                             <button style="width: 250px; margin-left: 15px;">
                                                 Download <i class="fas fa-paw"></i> 
                                             </button>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="description pr-4 mb-4">
                                    <h3>Step 2:</h3>
                                    <h5>Fill-out Completely</h5>
                                    <p>
                                        Hand-written forms will not be accepted.
                                        Do not leave any blank fields (state N/A if not applicable to you)
                                        The email address and contact number you supply shall be treated as your official contact channels.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="description pr-4 mb-4">
                                    <h3>Step 3:</h3>
                                    <h5>Submit Your File</h5>
                                    <p>
                                        Use the submit button in CutieASF website. 
                                    </p>
                                    <div class="faq wow fadeInRight mt-4">
                                        <!-- UPLOAD FILE HERE -->
                                        <div class="row">
                                        <form method="POST" action="" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" id="docToUpload" name="docToUpload" style="margin-left: 18px; width:500px; height: 45px;"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="btn_admin">
                                                        <a href="files/adoption_form.docx" download="application form">
                                                             <button type="submit" style="width: 250px; margin-left: 32px;" name="submit">
                                                                 Upload    <i class="fas fa-paw"></i> 
                                                             </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="description pr-4 mb-4">
                                    <h3>Step 4:</h3>
                                    <h5>Validation and Confirmation</h5>
                                    <p>
                                        For complete and accurate submission - You will receive an email acknowledging your submission. Thank You for Adopting!
                                    </p>
                                    <div class="btn_admin">
                                        <a href="u_home.php">
                                             <button style="width: 250px; margin-left: 32px;">
                                                 Home   <i class="fas fa-paw"></i> 
                                             </button>
                                        </a>
                                    </div>
                                </div>
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

    <?php
        if ($_POST['submit']) {
            $file = upload_pet_adoptionForm($_SESSION['username']);
            //function to add to database
            /*if (db_pet_createPet($a_id, $name, $type, $breed, $age, $gender, $description, $medical, $behavior, $rfa, $img)){
            echo "<script> alert('Uploading of document was sucessful. Please wait for our response.'); </script>";
            }
            else {
                echo "<script> alert('Uploading of document was unsucessful. Please try again.'); </script>";
            }*/
        }
    ?>
</body>

</html>