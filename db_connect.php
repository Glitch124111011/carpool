<?php
$db_connection = mysqli_connect('localhost', 'root','','carpool');
 if(mysqli_connect_errno()){
    echo "Failed to connect to MYSQL:" .mysqli_connect_error();
    exit();
}
?>