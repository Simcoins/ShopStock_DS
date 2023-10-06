
<?php 

    session_start();
    include('server.php');

    $error = array();


    if (isset($_GET['del'])){
        $deteil = mysqli_real_escape_string($conn, $_POST['deteil']);

              if (empty($deteil)){
                array_push($error, "deteil is requird");
                header('location: index.php');
            }

            if (count($error)== 0){
            $sqlgg = "SELECT * FROM check_stock ";
            $userid = $_GET['del'];
            $sql_deteil = "UPDATE check_stock SET deteil = '$deteil' WHERE id ='$userid'";
            mysqli_query($conn, $sql_deteil);


        $sql = "SELECT * FROM check_stock WHERE id ='$userid'";
        $query = mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($query);

        $username1 = $row["id_roblox"];
        $password = $row["password_roblox"];
        $timeout = $row["Timeout"];
        $owner = $row["owner"];
        // $stats = $row["NOT DONE"];
        


        $sToken = "Xm8pqP1ZMVowidGjXjRXK3L03c7eJq1v0eQfSG6Vn2R";
	$sMessage = "📢เเจ้งเตือนสต็อกมีปัญหา\n";
        $sMessage .= "Stats : ⚠️NOT DONE⚠️\n";
        $sMessage .= "id : $userid\n";
        $sMessage .= "Username: $username1\n";
        $sMessage .= "Password : $password\n";
        $sMessage .= "Timeout : $timeout\n";
        $sMessage .= "Owner : $owner\n";
        $sMessage .= "Deteil : $deteil\n";

	
	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 
        
        
        if ($result) {
                $_SESSION['success'] = "ส่งข้อมูลเเจ้งเตือน เรียบร้อยเเล้ว!";
                header('location: index.php');
        } else {
                $_SESSION['error'] = "ส่งข้อมูลเเจ้งเตือนผิดพลาด!";
                header('location: index.php');
        }





            }

            
            
        

}
        

        
        
        if (count($error)== 0){

        if (isset($_GET['del'])){
                $userid = $_GET['del'];
                $sqle = "DELETE FROM stock WHERE id = '$userid'";
                mysqli_query($conn, $sqle,);
                header('location: index.php');
        }   
    
        
        if (isset($_GET['del'])){
            $userid = $_GET['del'];
            $sqlr = "UPDATE check_stock SET stats = 'NOT DONE' WHERE id ='$userid' ";
            mysqli_query($conn, $sqlr,);
        }

        
    
    }
    






    



?> 