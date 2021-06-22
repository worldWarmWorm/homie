<?php
    session_start();
    include_once "php/config.php";
    if (!isset($_SESSION['unique_id'])) header("location: login.php");
    include_once "header.php";

    $sql = mysqli_query($conn, "
        SELECT * FROM users
        WHERE unique_id = {$_SESSION['unique_id']}
    ");
    if (mysqli_num_rows($sql) > 0) $row = mysqli_fetch_assoc($sql);
?>
    <body>
        <div class="wrapper">
            <section class="users">
                <header>
                    <div class="content">
                        <img src="php/images/<?= $row['img']; ?>" alt="">
                        <div class="details">
                            <span><?= $row['fname'] . " " . $row['lname'] ?></span>
                            <p><?= $row['status']; ?></p>
                        </div>
                    </div>
                    <a href="php/logout.php?logout_id=<?= $row['unique_id']; ?>" class="logout">Выйти</a>
                </header>
                <div class="search">
                    <span class="text">Выберите пользователя для чата</span>
                    <input type="text" placeholder="Введите имя для поиска...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="users-list"></div>
            </section>
        </div>
        <script src="javascript/users.js"></script>
    </body>
</html>
