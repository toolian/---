<?php 
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
    exit(); 
}
?>

<?php include_once 'header.php'; ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Чат в реальном времени</header>
            <form id="login-form"> 
                <div class="error-txt">Это сообщение об ошибке!</div>
                    <div class="field input">
                        <label>Адрес электронной почты:</label>
                        <input type="email" name="email" placeholder="Введите свой адрес электронной почты" required>
                    </div>
                    <div class="field input">
                        <label>Пароль:</label>
                        <input type="password" class="inputSenha" name="password" placeholder="Введите свой пароль" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Войти">
                    </div>
            </form>
            <div class="link">Вы не зарегистрированы? <a href="index.php">Зарегистрируйтесь сейчас</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
</body>
</html>
