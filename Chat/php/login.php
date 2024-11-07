<?php
session_start();
include_once "config.php";

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($email) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        // Проверяем пароль, используя md5
        if (md5($password) === $row['password']) {
            $status = "Сейчас онлайн";
            $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
            if ($sql2) {
                $_SESSION['unique_id'] = $row['unique_id'];
                echo "Успешно";
            }
        } else {
            echo "Адрес электронной почты или пароль неверны!";
        }
    } else {
        echo "Адрес электронной почты или пароль неверны!";
    }
} else {
    echo "Все данные необходимо ввести!";
}
?>
