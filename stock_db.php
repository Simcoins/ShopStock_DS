
<?php 

    session_start();
    include('server.php');

    $error = array();

    if (isset($_POST['sub_id'])){
        $amount = mysqli_real_escape_string($conn, $_POST['amount']);
        $id_roblox = mysqli_real_escape_string($conn, $_POST['username']);
        $password_roblox = mysqli_real_escape_string($conn, $_POST['password']);
        $Timeout = mysqli_real_escape_string($conn, $_POST['time']);
        $owner = mysqli_real_escape_string($conn, $_POST['Owner']);

        if (empty($amount)){
            array_push($error, "amount is requird");
            header('location: stock.php');
        }
        if (empty($id_roblox)){
            array_push($error, "id_roblox is requird");
            header('location: stock.php');
        }
        if (empty($password_roblox)){
            array_push($error, "password_roblox is requird");
            header('location: stock.php');
        }
        if (empty($Timeout)){
            array_push($error, "Timeout is requird");
            header('location: stock.php');
        }
        if (empty($owner)){
            array_push($error, "owner is requird");
            header('location: stock.php');
        }
        


        if (count($error) == 0){

            $_SESSION['start'] = '1';
          
          
          }
          


    
        if (count($error) == 0){
            $sql = "INSERT INTO stock (amount, id_roblox, password_roblox, Timeout, owner) VALUES ('$amount', '$id_roblox','$password_roblox','$Timeout','$owner')";
            $sql2 = "INSERT INTO check_stock (amount, id_roblox, password_roblox, stats, Timeout, owner) VALUES ('$amount', '$id_roblox','$password_roblox','PENDING','$Timeout','$owner')";
            mysqli_query($conn, $sql);
            mysqli_query($conn, $sql2);
        }
        if (count($error) == 0) {
            echo "<script>alert('Successfully!');</script>";
            echo "<script>window.location.href='stock.php'</script>";
        }else{
            echo "<script>alert('Somethin went wrong!');</script>";
            echo "<script>window.location.href='stock.php'</script>";
        }
    }

?>