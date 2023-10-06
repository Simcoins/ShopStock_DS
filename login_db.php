<?php
    session_start();
    include('server.php');
    $errors = array();
    if (isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)){
            array_push($errors, "username is requird");
            header('location: login.php');
        }
        if (empty($password)){
            array_push($errors, "password is requird");
            header('location: login.php');
        }

        if (count($errors) == 0){
            $password=($password);
            $query = "SELECT *FROM user WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $query);
    
            if (mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['sccess'] = "login done now";
                $row = mysqli_fetch_array($result);
                $_SESSION['role'] = $row['role'];
                if ($_SESSION['role'] == 'admin'){
                    header('location: index.php');
                }
                elseif($_SESSION['role'] == 'user'){
                    header('location: user.php');
                }
            }else {
                array_push($errors,"worng something");
                $_SESSION['error'] = "worng something";
                header('location: login.php');
            }
        }
    }

?>