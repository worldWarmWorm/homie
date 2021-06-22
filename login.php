<?php
    session_start();
    if (isset($_SESSION['unique_id'])) header("location: users.php");
    include_once "header.php";
?>
    <body>
        <div class="wrapper">
            <section class="form login">
                <header>Homie | Chat</header>
                <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="error-text"></div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Введите ваш email" required>
                    </div>
                    <div class="field input">
                        <label>Пароль</label>
                        <input type="password" name="password" placeholder="Введите ваш пароль" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" name="submit" value="Продолжить">
                    </div>
                </form>
                <div class="link">Ещё нет аккаунта? <a href="index.php">Регистрация</a></div>
            </section>
        </div>
        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/login.js"></script>
    </body>
</html>
