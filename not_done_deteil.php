<?php
    session_start();
    include('server.php');
    $errors = array();
    if (isset($_POST['del_db'])){
        $deteil = mysqli_real_escape_string($conn, $_POST['deteil']);

        if (empty($deteil)){
            array_push($errors, "deteil is requird");
            header('location: index.php');
        }
		
		 if (count($error)== 0){
            $sql = "INSERT INTO check_stock (deteil) VALUES ('$deteil')";
            mysqli_query($conn, $sql);
        }
		
		
        }

?>