
<?php 

    session_start();
    include('server.php');

    $error = array();


    if (isset($_GET['del'])){
            $userid = $_GET['del'];
            $sqle = "DELETE FROM stock WHERE id = '$userid'";
            mysqli_query($conn, $sqle,);
            header('location: index.php');
    }

    
    if (isset($_GET['del'])){
        $userid = $_GET['del'];
        $sqlr = "UPDATE check_stock SET stats = 'DONE' WHERE id ='$userid' ";
        mysqli_query($conn, $sqlr,);
        if ($sqlr) {
                $_SESSION['done'] = "ส่งข้อมูลเเจ้งเตือน เรียบร้อยเเล้ว!";
                header('location: index.php');
        } else {
                $_SESSION['error'] = "ส่งข้อมูลเเจ้งเตือนผิดพลาด!";
                header('location: index.php');
        }
}  





?> 