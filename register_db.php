<?php 

    session_start();
    include('server.php');

    $error = array();

    if (isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if (empty($username)){
            array_push($error, "username is requird");
            header('location: register.php');
        }
        if (empty($email)){
            array_push($error, "email is requird");
            header('location: register.php');
        }
        if (empty($password_1)){
            array_push($error, "password is requird");
            header('location: register.php');
        }
        if (($password_1 != $password_2)){
            array_push($error, "password error");
            header('location: register.php');
        }

        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){
            if($result['username'] === $username) {
                array_push($error, "username is already have");
                header('location: register.php');
            }
            if($result['email'] === $email) {
                array_push($error, "email is already have");
                header('location: register.php');
            }
        }

    
        if (count($error)== 0){
            $password=($password_1);
            $sql = "INSERT INTO user (username, email, password, role) VALUES ('$username', '$email','$password','user')";
            mysqli_query($conn, $sql);

            
            $_SESSION['role'] = "user";
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "you are login now";
            header('location: user.php');
        }

    }

?>