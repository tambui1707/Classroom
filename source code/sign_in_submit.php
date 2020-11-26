<?php
    session_destroy();
    session_start();
    $conn = mysqli_connect("127.0.0.1","root","","database");
    $errors = array();

    if(isset($_POST['submit'])){
        if(isset($_POST['username']) && isset($_POST['password'])){
            
            $username = $_POST['username'];
            $password = md5($_POST['password']);

           if(empty($username) || empty($password)){
                if(empty($username)){
                    array_push($errors, 'Username is required');
                }else if(empty($password)){
                    array_push($errors, 'Password is required');
                }
            }

            if(!empty($username) && !empty($password)){
                $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                $user = mysqli_query($conn,$sql);
                
                if(mysqli_num_rows($user) == 0){
                    array_push($errors, 'Invalid username or password');
                }else if(mysqli_num_rows($user) > 0){
                    while($row = $user -> fetch_assoc()){
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['level'] = $row['level'];
                        $_SESSION['email'] = $row['email'];
                    }
                    if($_SESSION['level'] == 0){
                        header("Location: home_student.php");
                    }else if($_SESSION['level'] == 1){
                        header("Location: home_teacher.php");
                    }
                }
            }      
        }
    }
?>