<?php
session_start();
include_once 'config.php';

// Устанавливаем кодировку UTF-8 для соединения с базой данных
mysqli_set_charset($conn, "utf8");

$outgoing_id = $_SESSION['unique_id'];

$sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = '{$outgoing_id}'");
$output = "";

if (mysqli_num_rows($sql) == 0) {
    $output .= "Нет пользователей для общения";
} elseif (mysqli_num_rows($sql) > 0) {
    include "data.php";
}

echo $output;
?>
