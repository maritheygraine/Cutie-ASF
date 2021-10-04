
<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'dbh.php';
    session_start();
    $_SESSION['nav'] = true;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cutie ASF | Login</title>
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

    <div class="main-wrapper pet login">

        <div id="preloading"></div>
        <?php include "n_nav.php"; ?>
        <div class="pet service">
            <section class="contact">
                <div class="container">
                    <div class="card">
                        <div class="content">
                            <div class="heading text-center">
                                <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                                        class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                                            class="fas fa-paw"></i> </span></p>
                                <h3> <span class="wow pulse" data-wow-delay="1s"> Login
                                    </span></h3>
                            </div>


                            <div class="faq wow fadeInRight mt-4">

                                <form method="POST">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="username" id="username" placeholder="Username"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" class="form-control"
                                                    placeholder="Password" required>
                                            </div>
                                        </div> <br>
                                        
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12" >
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn form-control" name="submit">Login</button>
                                            </div>
                                            <div class="link text-center">
                                                <a href="register.php" class="d-inline-block" title="Register">Don't have an account? Click Here!</a>
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
        //checks if currently logged in an account
        if (isset($_SESSION['login'])) { echo "<script> location.replace('profile.php') </script>"; }
        else {
            if (isset($_POST['submit'])) {
                // FETCH ALL DATA FROM THE INPUT FORMS
                $uName = isset($_POST['username']) ? $_POST['username'] : '';
                $pWord = isset($_POST['password']) ? $_POST['password'] : '';

                // VERIFY LOGIN CREDENTIALS
                if (db_acc_login($uName, $pWord)){
                    // FETCH ALL USER DATA FROM THE DATABASE
                    $account_data = db_acc_getData($uName);
                        // ASSIGN ALL USER DATA TO SESSION VARIABLES
                        $_SESSION['login'] = true; //for checking if user logged in
                        $_SESSION['id'] = $account_data['id'];
                        $_SESSION['name'] = ucwords($account_data['first_name']." ".$account_data['middle_name']." ".$account_data['last_name']);
                        $_SESSION['birthday'] = $account_data['birthday'];
                        $_SESSION['gender'] = $account_data['gender'];
                        $_SESSION["email"] = $account_data['email'];
                        $_SESSION["username"] = $account_data['username'];
                        $_SESSION["password"] = $account_data['password'];
                        $_SESSION["role"] = $account_data['role'];

                        $account_data['role'] == 'admin' ? $_SESSION['admin'] = true : $_SESSION['user'] = true;
                        echo "<script> location.replace('profile.php') </script>";
                }
                else { echo "<script> alert('Account not found.'); </script>"; }
            }
        }
    ?>

</body>

</html>