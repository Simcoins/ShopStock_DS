
<?php 

    session_start();
    include('server.php');

    public function delete($userid) {
        $deleterecord = "DELETE FROM stock WHERE id = '$userid' ";
        mysqli_query($conn, $deleterecord);
        return $deleterecord;
    }
    

?>