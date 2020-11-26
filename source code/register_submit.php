<?php
    $errors = array();
    $conn= mysqli_connect("127.0.0.1","root","","database");

    if(isset($_POST['submit'])){
        

        if(isset($_POST['surname']) && isset($_POST['name']) && isset($_POST['date_of_birth'])&& isset($_POST['phone_number']) 
        && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm'])){

            $surname = $_POST['surname'];
            $name = $_POST['name'];
            $date_of_birth = $_POST['date_of_birth'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            $level = 0; 

            if(empty($surname)){
              array_push($errors, 'Surname is required');
              die();
            }
            
            if(!empty($surname) && !empty($name) && !empty($date_of_birth) && !empty($phone_number) && !empty($email)
            && !empty($username) && !empty($password) && !empty($confirm)){ 
                
                if($password != $confirm){
                    die();
                }else{
                    $sql = "SELECT * FROM users WHERE username= '$username' ";
                    $num = mysqli_query($conn, $sql);
                    $password = md5($password);
                 

                    if(mysqli_num_rows($num) > 0){
                        header("Location: register.php");
                    } 
                    $sql = "INSERT INTO users (surname,name,date_of_birth,phone,email,username,password,level) VALUES('$surname','$name','$date_of_birth','$phone_number','$email','$username','$password','$level')";                    
                    mysqli_query($conn, $sql);
                    $conn->close();
                    header('Location: ./sign_in.php');
                    
                }

            }
        }
    }
?>