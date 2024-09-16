<?php
    $server = "localhost";
    $user = "root";
    $Password = "";        
    $databaseName = "chatapp";

    $conn = mysqli_connect($server,$user,$Password,$databaseName);
    if (!$conn) {
        echo "Error: ".mysqli_connect_error();
    }

?>