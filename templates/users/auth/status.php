<div class="container">
<div class="row error">
<div class="col-12 d-flex flex-column text-center">
<img class="error__img mx-auto" src="/img/close.svg" alt="">
<h2 class="error__heading">

<?php

if (!empty($_POST)) {
    $user_login = htmlspecialchars(trim($_POST['user_login']));
    $user_password = htmlspecialchars(trim(md5($_POST['user_password'])));

    $connection = get_connection();

    $get_bd_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `user_login` LIKE '$user_login'");
    if ($get_bd_user) {
        $user_info = mysqli_fetch_array($get_bd_user);
        if ($user_password == $user_info['user_password']) {
            $_SESSION['user_id'] = $user_info['user_id'];
            $_SESSION['user_login'] = $user_login;
            $_SESSION['user_password'] = $user_password;
            $_SESSION['user_name'] = $user_info['user_name'];
            $_SESSION['user_surname'] = $user_info['user_surname'];
            //var_dump($_SESSION);
            
            header("Location: /users/$user_login/");
        }
        else {
            echo "Вы ввели неверный пароль!";
        }
    }
    else {
        echo "Пользователя с таким логином не существует!";
    }
}
else {
    echo "Ошибка: форма была пустая!";
}

?> 

</h2>
</div>
</div>
</div>