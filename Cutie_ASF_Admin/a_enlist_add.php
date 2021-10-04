
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pet</title>
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

    <div class="main-wrapper pet profile">

        <div id="preloading"></div>
        <?php include 'a_nav.php'; ?>

        <div class="pet service">
            <section class="contact">
                <div class="container">
                    <div class="heading text-center" style="margin-top: -85px;">
                        <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                                class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                                    class="fas fa-paw"></i> </span></p>
                        <h2>Pet <span class="wow pulse" data-wow-delay="1s"> Information </span></h2>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="faq wow fadeInRight">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="text" id="name" class="form-control" placeholder="Name"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="number" name="age" id="age" placeholder="Age"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="text" id="type" class="form-control"
                                                    placeholder="Type" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="text" id="breed" class="form-control"
                                                    placeholder="Breed" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-10">
                                            <div class="form-group">
                                                <textarea name="description" id="description" class="form-control"
                                                    placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-10">
                                            <div class="form-group">
                                                <textarea name="medical" id="medical" class="form-control"
                                                    placeholder="medical"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-10">
                                            <div class="form-group">
                                                <textarea name="behavior" id="behavior" class="form-control"
                                                    placeholder="Behavior"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-10">
                                            <div class="form-group">
                                                <textarea name="rfa" id="rfa" class="form-control"
                                                    placeholder="Reason for Adoption"></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- IMAGE UPLOAD BUTTON  -->
                        <div class="col-lg-4 col-md-12 col-sm-12">
                                    <h5>Upload an Image</h5>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <div class="btn_admin" >
                                            <button id="enlist" style="margin-left: 12px; margin-top: 15px; width: 219px;">
                                                Post 
                                                <i class="fas fa-paw"></i> 
                                            </button>
                                    </div>
                                
                                </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>



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