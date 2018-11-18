<div class="col-12">

<?php

if (!empty($_POST)) {
    $user_name = htmlspecialchars($_POST['user_name']);
    $user_surname = htmlspecialchars($_POST['user_surname']);

    $user_id = $_SESSION['user_id'];
    $user_login = $_SESSION['user_login'];

    $connection = get_connection();
    $update_data = mysqli_query($connection, "UPDATE `users` SET `user_name`='$user_name',`user_surname`='$user_surname' WHERE `user_id` LIKE $user_id");

    if ($update_data) {
        echo "<p class='bg-success text-white px-1 px-2'>Данные успешно изменены!</p>";
        header("Refresh: 1; url=/users/$user_login/settings/");
    }
    else {
        echo "<p class='bg-danger px-1 px-2'>Ошибка при изменении данных!</p>";
        header("Refresh: 2; url=/users/$user_login/settings/");
    }
}
else {
    echo "<p class='bg-danger px-1 px-2'>Ошибка: форма была пустая!</p>";
    header("Refresh: 2; url=/users/$user_login/settings/");
}

?>

</div>