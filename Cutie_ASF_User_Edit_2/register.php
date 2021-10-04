
<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'dbh.php';
    session_start();    
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cutie ASF | Register</title>
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
    <div class="main-wrapper pet register">

        <div id="preloading"></div>
        <?php include "n_nav.php"; ?>
        <div class="pet login">
            <div class="pet service">
                <section class="contact">
                    <div class="container">
                        <div class="card">
                            <div class="content">
                                <div class="heading text-center">
                                    <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                                            class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                                                class="fas fa-paw"></i> </span></p>
                                    <h3 class="orange"> <span class="wow pulse" data-wow-delay="1s"> Register
                                        </span></h3>
                                </div>
                                <div class="faq wow fadeInRight mt-4">
                                    <form method="POST">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="fname" id="fname" placeholder="First Name" 
                                                        value="<?php echo htmlspecialchars($_POST['fname'] ?? '', ENT_QUOTES); ?>" 
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="mname" id="mname" placeholder="Middle Name"
                                                        value="<?php echo htmlspecialchars($_POST['mname'] ?? '', ENT_QUOTES); ?>" 
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="lname" id="lname" placeholder="Last Name"
                                                        value="<?php echo htmlspecialchars($_POST['lname'] ?? '', ENT_QUOTES); ?>" 
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="birthday" id="birthday" placeholder="Birthday"
                                                        value="<?php echo htmlspecialchars($_POST['birthday'] ?? '', ENT_QUOTES); ?>" 
                                                        class="form-control" required onfocus="(this.type='date')">
                                                </div>
                                            </div>
                                            <!-- #GENDER -->
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                            <fieldset class="form-group">
                                                <div class="row">
                                                  <legend class="col-form-label col-sm-3 pt-0" style="text-align: center;"><b>Gender</b></legend>
                                                  <div class="col-sm">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
                                                      <label class="form-check-label" for="gridRadios1">
                                                        Male
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
                                                      <label class="form-check-label" for="gridRadios2">
                                                        Female
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="other">
                                                      <label class="form-check-label" for="gridRadios2">
                                                        Other
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                              </fieldset>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" placeholder="Email"
                                                        value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES); ?>" 
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="uname" id="uname" placeholder="Username"
                                                        value="<?php echo htmlspecialchars($_POST['uname'] ?? '', ENT_QUOTES); ?>" 
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="pass" id="password" placeholder="Password" 
                                                        value="<?php echo htmlspecialchars($_POST['pass'] ?? '', ENT_QUOTES); ?>" require/>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="password"  class="form-control" name="pass_confirm" id="password_confirm" placeholder="Confirm Password"
                                                    value="<?php echo htmlspecialchars($_POST['pass_confirm'] ?? '', ENT_QUOTES); ?>" require/>
                                                </div>
                                            </div>

                                            <!-- #ROLE -->
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                            <fieldset class="form-group">
                                                <div class="row">
                                                  <legend class="col-form-label col-sm-3 pt-0" style="text-align: center;"><b>Role</b></legend>
                                                  <div class="col-sm">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="role" id="gridRadios1" value="user" checked>
                                                      <label class="form-check-label" for="gridRadios1">
                                                        User
                                                      </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="role" id="gridRadios2" value="admin">
                                                      <label class="form-check-label" for="gridRadios2">
                                                        Admin
                                                      </label>
                                                    </div>
                                                  </div>
                                                </div>
                                              </fieldset>
                                            </div>

                                           <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">By Clicking
                                                        On Signup, You Agree to Our <a href="#" title="Terms">Terms</a>
                                                        and
                                                        <a href="#" title="Condition">Conditions</a></label>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group text-center mt-4">
                                                    <button type="submit" class="btn form-control" name="signup">Signup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="pet">
            <a id="back2Top" title="Back to top" href="#" class="hvr-radial-in"><i class="fas fa-paw"></i></a>
        </div>

        <div class="color-palate">
            <div class="color-trigger">
                <i class="flaticon-pawprint-1"></i>
            </div>
            <div class="color-palate-head">
                <h6>Choose Your Color</h6>
            </div>
            <div class="various-color clearfix">
                <div class="colors-list">
                    <span class="palate default-color active"
                        data-theme-file="css/color-themes/default-theme.css"></span>
                    <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
                    <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
                    <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
                    <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
                    <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
                    <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
                    <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
                </div>
            </div>
            <a href="#" class="purchase-btn">Purchase now $17</a>
            <div class="palate-foo">
                <span>You will find much more options for colors and styling in admin panel. This color picker is used
                    only for
                    demonstation purposes.</span>
            </div>
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

    <!-- #CHECK PASSWORD IF SAME -->
    <script>
        var password = document.getElementById("password"), confirm_password = document.getElementById("password_confirm");
        function validatePassword(){
            if (password.value != confirm_password.value) { confirm_password.setCustomValidity("password and confirm password are not the same"); } 
            else { confirm_password.setCustomValidity(''); }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>

    <?php
        // CHECKS IF THERE IS LOGGED IN USER WITH SESSIONS
        if (isset($_SESSION['login'])) { echo "<script> location.replace('profile.php') </script>"; }

        // CHECKS IF THE TERMS CHECKBOX IS CHECKED
        if (!isset($_POST["exampleCheck1"]) && isset($_POST["signup"])){
            echo "<script> alert('You must agree to the terms first.'); </script>";
        }
        elseif (isset($_POST["exampleCheck1"]) && isset($_POST["signup"])){
             
            // FETCH ALL DATA FROM THE INPUT FORMS
            $fName = strtolower($_POST["fname"]);   // FIRST NAME
            $mName = strtolower($_POST["mname"]);   // MIDDLE NAME
            $lName = strtolower($_POST["lname"]);   // LAST NAME
            $bday = $_POST["birthday"];             // BIRTHDAY
            $gender = strtolower($_POST["gender"]); // GENDER
            $email = strtolower($_POST["email"]);   // EMAIL
            $uName = $_POST["uname"];               // USERNAME
            $pw = $_POST["pass"];                   // PASSWORD
            $role = strtolower($_POST["role"]);     // ROLE

            // VERIFIES IF THE INPUT IS ALL WHITESPACES
            if(str_replace(" ", "", $fName) == "" 
            or str_replace(" ", "", $mName) == "" 
            or str_replace(" ", "", $lName) == "" 
            or str_replace(" ", "", $uName) == "" 
            or str_replace(" ", "", $pw) == "" ){
                echo "<script> alert('Invalid input.'); </script>";
            }
            // CHECKS IF USERNAME ALREADY EXISTS
            elseif(db_acc_usernameExists($uName)){ 
                echo "<script> alert('Existing account. Username is already taken.'); </script>"; 
            }
            // CHECKS IF EMAIL ALREADY EXISTS
            elseif(db_acc_emailExists($email)){
                echo "<script> alert('Existing account. Email is already taken.'); </script>"; 
            }
            else{

                // CREATE THE ACCOUNT
                if (db_acc_createAccount($fName, $mName, $lName, $bday, $gender, $email, $uName, $pw, $role)){
                    echo "<script> alert('You have successfully made your account. Please login'); </script>";
                    echo "<script> location.replace('login.php') </script>";
                    exit();
                }
                else {
                    echo "<script> alert('Account creation unsuccessful!'); </script>";
                }
            }
        }
        
    ?>
</body>

</html>