<%@page contentType="text/html" pageEncoding="UTF-8"%>

<html lang="en">
    <head>
       
        <link href="page/login-signup-style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="page/util.css">
        <link rel="icon" type="image/png" href="img/icons/favicon.ico">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
