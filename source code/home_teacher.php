<?php
session_start();
print_r($_SESSION);
if(!isset($_SESSION['username'])) {
    header('Location: ./sign_in.php');
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
    <link rel="icon" href="./images/background/logo_tdtu.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home</title>
</head>
<body>
<div class="navigation">
    <div class="navbar navbar-light bg-light border-bottom w-100">
        <div class="show-sidebar navbar-toggler-icon btn ml-3 mr-2 border-0" onclick="openNav()">
        </div>
        <a class="navbar-brand mr-auto" href="#"><div class="brand h4 mt-1">Ton Duc Thang <small>Classroom</small></div></a>
        <!--<a class="nav-signin nav-link ml-auto text-primary font-weight-bold" href="#">Sign in</a>
        <div class="nav-signin">or</div>
        <a class="nav-signin nav-link text-primary font-weight-bold" href="#">Create an account</a>-->
        <div class="btn fas fa-plus mr-3" id="plus-icon"></div>
        <div class="nav-welcome welcome mr-3"><span style="cursor: context-menu;">Hello,</span>
            <div style="display: inline-block; color: #3c4043; cursor: pointer;" class="nav-user mr-0 ml-0" data-toggle="popover" data-container=".navigation" data-placement="bottom" data-html="true"
               data-content=
               "<div class='card border-0 bg-light w-100'>
                    <div class='card-body w-100'>
                        <h6 class='card-subtitle mb-2'>Sign In As:</h6>
                        <p class='card-text overflow-hidden text-truncate text-nowrap'><?= $_SESSION['email']?></p>
                        <a href='./sign_out.php' class='card-link font-weight-bold'>Sign out</a>
                    </div>
                </div>"><?= $_SESSION['name']?></div>
        </div>
    </div>
    <div class="sidebar navbar-collapse bg-light" id="navbarToggler">
        <div class="sidebar-header border-bottom">
            <div class="sidebar-header-user" id="sidebar-user"><i>User Name</i></div>
            <div class="sidebar-header-home"> <!-- Sau khi đã đăng nhập thì là class = "home" -->
                <div class="home-icon"> <!-- home-icon -->
                    <i class="fas fa-home"></i>
                </div>
                <a class="nav-link" href="#">Home</a>
            </div>
        </div>
        <div class="sidebar-enrolled">
            <div class="sidebar-enrolled-title text-muted" style="cursor: context-menu;">Teaching</div>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <div class="class">
                        <div class="class-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <a class="class-item nav-link" href="#">Class Name 1</a>
                    </div>
                </li>
                <li class="sidebar-create-class nav-item">
                    <div class="class">
                        <div class="class-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="class-item btn nav-link" style="text-align: left; margin: 0 16px 0 16px;">Create class</div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sidebar-footer border-top">
            <div class="signout">
                <div class="signout-icon"> <!-- home-icon -->
                    <i class="fas fa-sign-out-alt"></i>
                </div>
                <a class="nav-link" href="#">Sign out</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" onclick="closeNav()">
    <ul class="class-list list-group">
        <li class="class-list-item list-group-item">
            <div class="cell bg-light border border-muted mb-3">
                <div class="cell-header bg-primary text-light border-bottom border-muted font-weight-bold">
                    <div class="cell-option-btn class-header-item text-light position-absolute btn fas fa-ellipsis-v" data-toggle="collapse" data-target="#collapseSection" aria-expanded="false">
                    </div>
                        <div class="collapse cell-option bg-light" id="collapseSection">
                            <div class="cell-option-list">
                                <div class="cell-option-list-item btn">Leave class</div>
                            </div>
                        </div>
                    <a class="cell-header-item" href="#">
                        <div class="cell-header-item-h text-light">Class Name</div>
                        <div class="cell-header-item-sh text-light"><small>Teacher Name</small></div>
                    </a>
                </div>
                <div class="cell-content">
                    <ul class="assign-list list-group">
                        <li class="assign-list-item list-group-item">
                            <a href="#" class="text-dark"><small>Deadline - Assignment 1</small></a>
                        </li>
                        <li class="assign-list-item list-group-item">
                            <a href="#" class="text-dark"><small>Deadline - Assignment 2</small></a>
                        </li>
                    </ul>
                </div>
                <div class="cell-footer border-top border-muted">
                    <a class="cell-footer-item" href="#">Assignment</a>
                </div>
            </div>
        </li>
        <li class="class-list-item list-group-item">
            <div class="cell bg-light border border-muted mb-3">
                <div class="cell-header bg-success text-light border-bottom border-muted font-weight-bold">
                    <div class="cell-option-btn class-header-item position-absolute btn fas fa-ellipsis-v" data-toggle="collapse" data-target="#collapseSection" aria-expanded="false">
                    </div>
                    <div class="collapse cell-option bg-light" id="collapseSection">
                        <div class="cell-option-list">
                            <div class="cell-option-list-item btn">Leave class</div>
                        </div>
                    </div>
                    <a class="cell-header-item" href="#">
                        <div class="cell-header-item-h text-dark">Class Name</div>
                        <div class="cell-header-item-sh text-dark"><small>Teacher Name</small></div>
                    </a>
                </div>
                <div class="cell-content">
                    <ul class="assign-list list-group">
                        <li class="assign-list-item list-group-item">
                            <a href="#" class="text-dark"><small>Deadline - Assignment 1</small></a>
                        </li>
                        <li class="assign-list-item list-group-item">
                            <a href="#" class="text-dark"><small>Deadline - Assignment 2</small></a>
                        </li>
                    </ul>
                </div>
                <div class="cell-footer border-top border-muted">
                    <a class="cell-footer-item" href="#">Assignment</a>
                </div>
            </div>
        </li>
    </ul>
</div>
</body>
</html>