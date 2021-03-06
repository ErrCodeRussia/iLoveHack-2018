<div class="container">
<div class="row error">
<div class="col-12 d-flex flex-column text-center">
<img class="error__img mx-auto" src="/img/close.svg" alt="">
<h2 class="error__heading">

<?php

if (!empty($_POST)) {

    $user_login = htmlspecialchars(trim($_POST['user_login']));
    $user_password = htmlspecialchars(trim(md5($_POST['user_password'])));
    $user_name = htmlspecialchars(trim($_POST['user_name']));
    $user_surname = htmlspecialchars(trim($_POST['user_surname']));
    
    $connection = get_connection();
    $check_user_login = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM `users` WHERE `user_login` LIKE '$user_login'"));
    if ($check_user_login) {
        echo "Пользователь с таким логином уже существует!";
        header("Refresh: 2; url=/users/reg/");
    }
    else {
        $query = "INSERT INTO `users` (`user_login`, `user_password`, `user_name`, `user_surname`) VALUES ('$user_login', '$user_password', '$user_name', '$user_surname')";
        $status = mysqli_query($connection, $query);
        
        if ($status) {
            echo 'Вы успешно зарегистрировались';
            header("Refresh: 1; url=/users/auth/");
        }
        else {
            echo "Ошибка при регистрации!";
        }
    }

}

?>

</h2>
</div>
</div>
</div>