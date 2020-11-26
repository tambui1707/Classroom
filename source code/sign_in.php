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
    <title>Sign in</title>
    <style type="text/css">
        <?php include 'style.css'; ?>
    </style>
    <?php include 'config.php'?>
    <?php include 'sign_in_submit.php'?>
    <link rel="icon" href="./images/background/logo_tdtu.png" type="image/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <scrip src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scrip>
    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></scrip>
    <scrip src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></scrip>

</head>

<body>
    <div class="banner">
            <div id="logo-header"> 
            <img src="images/images_sign_in/Brand-left-vi-1_0_0.png" width="450px" height="70px">
            </div>

            <div id="certificates">
                <img src="images/images_sign_in/certificates.png" width="400px" height="70px">
            </div>
    </div>

    <div id=border></div>

    <div class="container" id="container_s">
        <div class="sign_title">
                <div class="title">
                    <div id="logo">
                        <img src="images/images_sign_in/27336291_191152898299012_4853864666151880188_n.png" width= "400px" height="300px">
                    </div>
                </div>
                
                <div id="sign_in_form">
                    <form method="post" action="sign_in_submit.php">
                        <table id="input_area">
                            <tr>
                                <td><input id="username" type="text" name="username" placeholder="User name"></td>
                            </tr>

                            <tr>
                                <td><input id = "password" type="password" name="password" placeholder="Password" ></td>
                            </tr>

                            <tr>
                               <td class='error_message'><?php include('errors.php'); ?></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form_check">
                                        <label class="form-check-label" for="exampleCheck1" >Check me out</label>
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" >
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td id= button_submit><button type="submit" name="submit" class="btn btn-primary">Sign In</button></td>
                            </tr>

                            <tr>
                                <td><a href="request_reset_password.php">Forgot your password?</a></td>
                            </tr>

                            <tr>
                                <td><a href="./register.php"><button id="submit_login" type="button" class="btn btn-success">Create new account</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
        </div>
    </div>
</body>
</html>