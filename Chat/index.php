<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Чат в реальном времени</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Замените на фактический путь -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- CDN для FontAwesome -->
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Чат в реальном времени</header>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Имя:</label>
                        <input type="text" name="fName" placeholder="Ваше имя" required>
                    </div>
                    <div class="field input">
                        <label>Фамилия:</label>
                        <input type="text" name="lName" placeholder="Ваша фамилия" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Адрес электронной почты:</label>
                    <input type="email" name="email" placeholder="Введите свой адрес электронной почты" required>
                </div>
                <div class="field input">
                    <label>Пароль:</label>
                    <input type="password" class="inputSenha" name="password" placeholder="Введите свой пароль" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Выберите изображение:</label>
                    <input type="file" name="image" required/>
                </div>
                <div class="field button">
                    <input type="submit" value="Зарегистрироваться">
                </div>
            </form>
            <div class="link">Вы уже зарегистрированы? <a href="login.php">Войти сейчас</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>
