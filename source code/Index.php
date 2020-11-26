<?php
session_start();
print_r(microtime());
if(isset($_SESSION['username'])) {
    if($_SESSION['level'] == 0){
        header("Location: home_student.php");
    }else if($_SESSION['level'] == 1){
        header("Location: home_teacher.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="./images/background/logo_tdtu.png" type="image/icon type">
    <title>TDTU's Classroom</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }
    </style>
</head>
<body>
<div class="navigation">
    <div class="navbar navbar-light bg-light border-bottom w-100">
        <div class="show-sidebar navbar-toggler-icon btn ml-3 mr-2 border-0" onclick="openNav()">
        </div>
        <a class="navbar-brand mr-auto" href="#"><div class="brand h4 mt-1">Ton Duc Thang <small>Classroom</small></div></a>
            <a class="nav-signin nav-link ml-auto text-primary font-weight-bold" href="./sign_in.php">Sign in</a>
            <div class="nav-signin">or</div>
            <a class="nav-signin nav-link text-primary font-weight-bold" href="./register.php">Create an account</a>
    </div>
        <div class="sidebar navbar-collapse bg-light" id="navbarToggler">
            <div class="sidebar-header border-bottom">
                <div class="signin"> <!-- Sau khi đã đăng nhập thì là class = "home" -->
                    <div class="signin-icon"> <!-- home-icon -->
                        <i class="fas fa-sign-in-alt"></i>
                    </div>
                    <a class="nav-link" href="./sign_in.php">Sign In</a>
                </div>
            </div>
    </div>
</div>
<div class="background" style="background-image: url('./images/background/tdtu_international.jpg')" onclick="closeNav()">
    <div class="description h1 bg-dark text-light p-5 h-25">TDTU's Classroom Management System</div>
    <div class="mobile-signin mt-auto mb-auto p-5">
        <div class="mobile-signin-item btn btn-primary btn-lg"><a class="text-light" href="./sign_in.php">Sign in</a></div>
        <div class="mobile-signin-item h2 text-light"> or</div>
        <div class="mobile-signin-item btn btn-primary btn-lg"><a class="text-light" href="./register.php">Create an account</a></div>
        <div class="mobile-signin-item h2 text-light">to get started</div>
    </div>

</div>
</body>

</html>
