<?php
mysqli_set_charset($conn, "utf8mb4");

    $server = "localhost";
    $user = "j90036oi_root";
    $Password = "ronaldo@1994";        
    $databaseName = "j90036oi_root";

    $conn = mysqli_connect($server,$user,$Password,$databaseName);
    if (!$conn) {
        echo "Error: ".mysqli_connect_error();
    }

?>