<div class="col-12">

<?php

if (!empty($_POST)) {
    $user_old_pass = htmlspecialchars($_POST['user_name']);
    $user_new_pass = htmlspecialchars($_POST['user_surname']);

    $user_id = $_SESSION['user_id'];
    $user_login = $_SESSION['user_login'];

    $connection = get_connection();
    $update_data = mysqli_query($connection, "UPDATE `users` SET `user_name`='$user_name',`user_surname`='$user_surname' WHERE `user_id` LIKE $user_id");

    if ($update_data) {
        echo "Данные успешно изменены!";
        header("Refresh: 1; url=/users/$user_login/settings/");
    }
    else {
        echo "Ошибка при изменении данных";
    }
}
else {
    echo "Ошибка: форма была пустая!";
}

?>

</div>