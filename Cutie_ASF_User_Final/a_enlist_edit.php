
<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'dbh.php';
    include_once 'upload.php';
    session_start();
    unset($_SESSION['s_type']);
    if (!isset($_SESSION['login'])) { echo "<script> location.replace('login.php') </script>"; }
    elseif (isset($_SESSION['login']) && !isset($_SESSION['admin'])) { echo "<script> location.replace('profile.php') </script>"; }
    elseif (!isset($_SESSION['edit'])) { echo "<script> location.replace('a_enlist.php') </script>";}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pet</title>
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
                        <h2>Edit  <span class="wow pulse" data-wow-delay="1s">Pet Information </span></h2>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="faq wow fadeInRight">
                                <form method="POST" enctype="multipart/form-data" action="">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="text" id="name" class="form-control" placeholder="Name" 
                                                    value="<?php echo $_SESSION['p_name']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="number" name="age" id="age" placeholder="Age" class="form-control"
                                                value="<?php echo htmlspecialchars($_POST['age'] ?? '', ENT_QUOTES); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="text" name="gender" id="gender" placeholder="Gender" class="form-control" 
                                                value="<?php echo $_SESSION['p_gender']; ?>" disabled> 
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="text" id="type" class="form-control" placeholder="Type" 
                                                value="<?php echo $_SESSION['p_type']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="text" id="breed" class="form-control" placeholder="Breed" 
                                                value="<?php echo $_SESSION['p_breed']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-10">
                                            <div class="form-group">
                                                <input type="text" name="availability" id="availability" class="form-control" placeholder="Breed" 
                                                value="<?php echo $_SESSION['p_availability']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-10">
                                            <div class="form-group">
                                                <textarea name="description" id="description" class="form-control" placeholder="Description" 
                                                disabled><?php echo $_SESSION['p_description']; ?></textarea>
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
                                                <textarea name="rfa" id="rfa" class="form-control" placeholder="Reason for Adoption" 
                                                disabled><?php echo $_SESSION['p_rfa']; ?> </textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- IMAGE UPLOAD BUTTON  -->
                        <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="image">
                                        <?php echo '<img src="'.$_SESSION["p_picture"].'" alt="image of '.$_SESSION["p_name"].'" title="pet" class="img-fluid customer">'; ?>
                                    </div>
                                    <h5>Upload an Image</h5>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    
                                    <div class="btn_admin" >
                                        <button id="edit" name="edit" style="margin-left: 12px; margin-top: 15px; width: 219px;">
                                               Save 
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
        if (isset($_POST['edit'])) {
            $a_id = $_SESSION['id'];
            $age = $_POST['age'];
            $medical = strtolower($_POST['medical']);
            $behavior = strtolower($_POST['behavior']);
            $avail = strtolower($_POST['availability']);
            $img = upload_pet_picture();


            if(str_replace(" ", "", $age) != "") {
                if (db_pet_editPet($a_id, $_SESSION['p_name'], $_SESSION['p_type'], $_SESSION['p_breed'], "age", $age)){
                    $_SESSION['p_age'] = $age;
                    echo "<script> alert('Pet age successfully updated.'); </script>";
                }
            }
            if(str_replace(" ", "", $medical) != "" ) {
                if (db_pet_editPet($a_id, $_SESSION['p_name'], $_SESSION['p_type'], $_SESSION['p_breed'], "medical", $medical)){
                    $_SESSION['p_medical'] = $medical;
                    echo "<script> alert('Pet medical history successfully updated.'); </script>";
                }
            }
            if(str_replace(" ", "", $behavior) != "" ) {
                if (db_pet_editPet($a_id, $_SESSION['p_name'], $_SESSION['p_type'], $_SESSION['p_breed'], "behavior", $behavior)){
                    $_SESSION['p_behavior'] = $behavior;
                    echo "<script> alert('Pet behavior successfully updated.'); </script>";
                }
            }
            if(str_replace(" ", "", $avail) != "" ) {
                if (avail_validation($avail)) {
                    if (db_pet_editPet($a_id, $_SESSION['p_name'], $_SESSION['p_type'], $_SESSION['p_breed'], "availability", $avail)){
                        $_SESSION['p_availability'] = $avail;
                        echo "<script> alert('Pet availability successfully updated.'); </script>";
                    }
                }
                else {
                    echo "<script> alert('Invalid pet availability. Only available, requested, and adopted are accepted inputs.'); </script>";
                }
            }
            if ($img != "") {
                if(db_pet_setPicture($a_id, $_SESSION['p_name'], $_SESSION['p_type'], $_SESSION['p_breed'],$img)) {
                    $_SESSION['p_picture'] = $img;
                }
            }
        }
    ?>
</body>

</html>