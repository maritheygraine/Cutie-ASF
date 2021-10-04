
<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'dbh.php';
    include_once 'upload.php';
    session_start();
    if (!isset($_SESSION['login'])) { echo "<script> location.replace('login.php') </script>"; }
    elseif (isset($_SESSION['login']) && !isset($_SESSION['admin'])) { echo "<script> location.replace('profile.php') </script>"; }
    elseif (!isset($_SESSION['add'])) { echo "<script> location.replace('a_enlist.php') </script>";}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pet</title>
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
                                <form method=post enctype="multipart/form-data" action="">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="text" id="name" class="form-control" placeholder="Name" name="name" 
                                                value="<?php echo htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="number" name="age" id="age" placeholder="Age" class="form-control" 
                                                value="<?php echo htmlspecialchars($_POST['age'] ?? '', ENT_QUOTES); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="text" id="type" name="type" class="form-control" placeholder="Type" 
                                                value="<?php echo htmlspecialchars($_POST['type'] ?? '', ENT_QUOTES); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="text" id="gender" name="gender" class="form-control" placeholder="Gender" 
                                                value="<?php echo htmlspecialchars($_POST['gender'] ?? '', ENT_QUOTES); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-10">
                                            <div class="form-group">
                                                <input type="text" id="breed" name="breed" class="form-control" placeholder="Breed" 
                                                value="<?php echo htmlspecialchars($_POST['breed'] ?? '', ENT_QUOTES); ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-10">
                                            <div class="form-group">
                                                <textarea name="description" id="description" name="description" class="form-control" placeholder="Description"
                                                ><?php echo htmlspecialchars($_POST['description'] ?? '', ENT_QUOTES); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-10">
                                            <div class="form-group">
                                                <textarea name="medical" id="medical" name="medical" class="form-control" placeholder="Medical History"
                                                ><?php echo htmlspecialchars($_POST['medical'] ?? '', ENT_QUOTES); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-10">
                                            <div class="form-group">
                                                <textarea name="behavior" id="behavior" name="behavior" class="form-control" placeholder="Behavior"
                                                ><?php echo htmlspecialchars($_POST['behavior'] ?? '', ENT_QUOTES); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-10">
                                            <div class="form-group">
                                                <textarea name="rfa" id="rfa" name="rfa" class="form-control" placeholder="Reason for Adoption"
                                                ><?php echo htmlspecialchars($_POST['rfa'] ?? '', ENT_QUOTES); ?></textarea>
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
                                            <button id="enlist" name="enlist" style="margin-left: 12px; margin-top: 15px; width: 219px;">
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
    <!-- <script src="js/range-slider.js"></script> -->
    <!-- <script src="js/counter.js"></script> -->
    <script src="js/color-settings.js"></script>

    <?php
        if (isset($_POST['enlist'])) {
            $a_id = $_SESSION['id'];
            $name = strtolower($_POST['name']);
            $type = strtolower($_POST['type']);
            $breed = strtolower($_POST['breed']);
            $age = $_POST['age'];
            $gender = strtolower($_POST['gender']);
            $description = strtolower($_POST['description']);
            $medical = strtolower($_POST['medical']);
            $behavior = strtolower($_POST['behavior']);
            $rfa = strtolower($_POST['rfa']);
            $img = upload_pet_picture();

            // VERIFIES IF THE INPUT IS ALL WHITESPACES
            if(str_replace(" ", "", $name) == "" 
            or str_replace(" ", "", $type) == "" 
            or str_replace(" ", "", $breed) == "" 
            or str_replace(" ", "", $gender) == "" 
            or str_replace(" ", "", $description) == "" 
            or str_replace(" ", "", $medical) == "" 
            or str_replace(" ", "", $behavior) == "" 
            or str_replace(" ", "", $rfa) == "" ){
                echo "<script> alert('Invalid input.'); </script>";
            }
            else {
                if (db_pet_createPet($a_id, $name, $type, $breed, $age, $gender, $description, $medical, $behavior, $rfa, $img)){
                    echo "<script> alert('You have successfully added a pet.'); </script>";
                    echo "<script> location.replace('a_enlist.php') </script>";
                }
                else {
                    echo "<script> alert('Pet enlistment unsuccessful!'); </script>";
                }
            }
        }
    ?>
</body>

</html>