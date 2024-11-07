<?php
session_start();
include_once 'config.php';

$fName = mysqli_real_escape_string($conn, $_POST['fName']);
$lName = mysqli_real_escape_string($conn, $_POST['lName']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($fName) && !empty($lName) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) {
            echo "Эта электронная почта уже существует!";
        } else {
            if (isset($_FILES['image'])) {
                $img_name = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];

                $img_explode = explode('.', $img_name);
                $img_ext = strtolower(end($img_explode));

                $extensions = ['png', 'jpg', 'jpeg'];
                if (in_array($img_ext, $extensions)) {
                    $new_img_name = time() . $img_name;
                    if (move_uploaded_file($tmp_name, "../img/" . $new_img_name)) {
                        $status = "в сети";
                        $random_id = rand(time(), 10000000);
                        $hashedPassword = md5($password); // Хэшируем пароль

                        // Вставляем данные пользователя в базу данных
                        $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, image, status) VALUES ({$random_id}, '{$fName}', '{$lName}', '{$email}', '{$hashedPassword}', '{$new_img_name}', '{$status}')");

                        if ($sql2) {
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if (mysqli_num_rows($sql3) > 0) {
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "Успешно";
                            }
                        } else {
                            echo "Что-то пошло не так";
                        }
                    }
                } else {
                    echo "Пожалуйста, выберите изображение jpeg, jpg или png!";
                }
            } else {
                echo "Пожалуйста, выберите изображение!";
            }
        }
    } else {
        echo "Электронная почта не является действительной электронной почтой!";
    }
} else {
    echo "Все данные должны быть записаны!";
}
?>
