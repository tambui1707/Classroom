<?php
session_start();
if(isset($_SESSION['username'])) {
    if($_SESSION['level'] == 0){
        header("Location: home_student.php");
    }else if($_SESSION['level'] == 1){
        header("Location: home_teacher.php");
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Create account</title>
        <style type="text/css">
            <?php include 'style.css'; ?>
        </style> 
        
        <?php require('config.php'); ?>
        <?php require 'register_submit.php';?>
        <link rel="icon" href="./images/background/logo_tdtu.png" type="image/icon type">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container" id="container_register">
            <div class="register_area">
                <div class = "header">
                    <span><img id="img_title" src="images/images_register/27336291_191152898299012_4853864666151880188_n.png", width="100px", height="50px"></span>
                    <span><h1 class="title">Create TDTU account</h1></span>
                </div>

                <div class="input_area">
                    <form class="form" method="post" action="register_submit.php">
                        <span><label for="input_surname">Full name</label></span>
                        <div class="surname_name ">
                            <span class="surname">
                                <input type="text" name="surname" id= "input_surname" placeholder="First name">
                            </span>
                            <span class="name">
                                <input type="text" name="name" placeholder="Last name">
                            </span>
                        </div>
                        <span><label for="email">E-mail</label></span>
                        <div class="email">
                            <input id="email" type="email" name="email" placeholder="Email">
                        </div>
                       <div class="date_phone">
                           <div class="phone_number">
                               <label for="date_of_birth">Phone number</label>
                               <input id="phone" type="text" name="phone_number" placeholder="Phone number">
                           </div>
                            <div class="date_of_birth">
                                <label for="date_of_birth">Date of birth</label>
                                <input type="date" id="date_of_birth" name="date_of_birth">
                            </div>

                       </div>

                        <div class="user_name">
                            <label for="username">Username</label>
                            <input id="username" type="text" name="username" placeholder="Username">

                            <span class="username_demand">
                                <small class="register-description">You can use letters, numbers and dots</small>
                            </span>

                        </div>

                        <div class="password_confirm">
                            <input type="password" id="password" name="password" placeholder="Password">
                            <input type="password" id ="confirm" name="confirm" placeholder="Confirm">
                        </div>

                        <div class="password_demand pt-1">
                            <small class="register-description">Use 8 or more characters and combine letters, numbers, and sympols</small>
                        </div>

                        <div class="error_register"><?php include('errors.php'); ?></div>

                        <div class="buttons">
                            <div class="login_button ml-0 pt-2" style="cursor: context-menu">
                                Already have an account?
                                <a class="text-dark" href="./sign_in.php" style="cursor: pointer"> Sign in</a>
                            </div>

                            <div class="next_button mr-0 w-25">
                                <button class="btn btn-primary w-100" type="submit" name="submit">Sign up</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </body>
</html>