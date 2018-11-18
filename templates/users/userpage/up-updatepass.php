<div class="col-12">

<?php

if (!empty($_POST)) {
    $user_old_pass = htmlspecialchars(md5($_POST['user_old_pass']));
    $user_new_pass = htmlspecialchars(md5($_POST['user_new_pass']));

    if ($user_new_pass != $user_old_pass) {        
        $user_id = $_SESSION['user_id'];
        $user_login = $_SESSION['user_login'];
        $user_pass = $_SESSION['user_password'];

        if ($user_old_pass == $user_pass) {
            $connection = get_connection();
            $update_data = mysqli_query($connection, "UPDATE `users` SET `user_password`='$user_new_pass' WHERE `user_id` LIKE $user_id");
            $_SESSION['user_password'] = $user_new_pass;

            if ($update_data) {
                echo "<p class='bg-success px-1 px-2'>Данные успешно изменены!</p>";
                header("Refresh: 1; url=/users/$user_login/settings/");
            }
            else {
                echo "<p class='bg-danger px-1 px-2'>Ошибка при изменении данных!</p>";
                header("Refresh: 2; url=/users/$user_login/settings/");
            }
        }
        else {
            echo "<p class='bg-danger px-1 px-2'>Вы ввели неверный старый пароль!</p>";
            header("Refresh: 2; url=/users/$user_login/settings/");
        }
    }
    else {
        $user_login = $_SESSION['user_login'];
        echo "<p class='bg-danger px-1 px-2'>Старый и новый пароли совпадают!</p>";
        header("Refresh: 2; url=/users/$user_login/settings/");
    }
}
else {
    $user_login = $_SESSION['user_login'];
    echo "<p class='bg-danger px-1 px-2'>Ошибка: форма была пустая!</p>";
    header("Refresh: 2; url=/users/$user_login/settings/");
}

?>

</div>