<?php
session_start();
ob_start();
require 'lib/dbCon.php';
require 'lib/trangChu.php';
?>
<?php
if (isset($_POST["btnLogin"])) {
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $con = mysqli_connect("localhost", "root", "", "project3");
    mysqli_set_charset($con, "utf8");
    $qr = "SELECT * FROM `user` where username='$username' and password='$pass' ";
    $user = mysqli_query($con, $qr);
    if (mysqli_num_rows($user) == 1) {
        $row = mysqli_fetch_array($user);
        $_SESSION["idUser"] = $row['idUser'];
        $_SESSION["username"] = $row['username'];
        $_SESSION["idGroup"] = $row['idGroup'];
        header("location:index.php");
    }
}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UNovel</title>
        <link href="css/util.css" rel="stylesheet" type="text/css"/>
        <link href="css/login-signup-style.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="img/icons/favicon.ico">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    </head>
    <body>

        <div class="limiter">
            <div class="container-login100" style="background-image: url('img/bg-01.jpg');">
                <div class="wrap-login100 p-t-30 p-b-50">
                    <span class="login100-form-title p-b-41">
                        Account Login
                    </span>
                    <form class="login100-form validate-form p-b-33 p-t-5" method="post">

                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100" type="text" name="username" id="username" placeholder="User name">
                            <span class="focus-input100" data-placeholder=""></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="pass" id="pass" placeholder="Password">
                            <span class="focus-input100" data-placeholder=""></span>
                        </div>


                        <div class="container-login100-form-btn m-t-32">
                            <button class="login100-form-btn" name="btnLogin" id="btnLogin">
                                Login
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <div id="dropDownSelect1"></div>




    </body>
</html>