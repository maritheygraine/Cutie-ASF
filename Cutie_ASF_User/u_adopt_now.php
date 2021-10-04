
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Now</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style-1.css">
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
            <?php include 'u_nav.php'; ?>
                
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
                                    
                                    <div class="button wow fadeInUp">
                                        <a href="files/adoption_form.docx" class="btn main bg_orange" download="application form">
                                            Download <i class="fas fa-download"></i>
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
                                        <form method="POST">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" id="customFile" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn form-control" style="color:#fff"; >Login</button>
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
                                    <div class="button wow fadeInUp">
                                        <a href="u_home.php" class="btn main bg_orange">
                                            Home 
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

</body>

</html>