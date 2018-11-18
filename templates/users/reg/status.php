<section class="section user user__section mt-1">
<div class="container">
<div class="row">

<?php

if (!empty($_POST)) {

    $user_login = htmlspecialchars(trim($_POST['user_login']));
    $user_password = htmlspecialchars(trim(md5($_POST['user_password'])));
    $user_name = htmlspecialchars(trim($_POST['user_name']));
    $user_surname = htmlspecialchars(trim($_POST['user_surname']));
    
    $connection = get_connection();
    $query = "INSERT INTO `users` (`id`, `user_login`, `user_password`, `user_name`, `user_surname`, `user_picture`, `team_id`, `user_score`) VALUES (NULL, '$user_login', '$user_password', '$user_name', '$user_surname', NULL, NULL, NULL)";
    $status = mysqli_query($connection, $query);

    if ($status) {
        echo 'Вы успешно зарегистрировались';
        header("Refresh: 1; url=/users/auth/");
    }
    else {
        echo "Ошибка при регистрации!";
    }

}

?>

</div>
</div>
</div>