<?php

$connection = get_connection();

$user_id = $_SESSION['user_id'];
$get_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `user_id` LIKE '$user_id'");
$user_info = mysqli_fetch_array($get_user);

?>

<div class="col-12">
    <p>Ваш ID: <?= $user_info['user_id']; ?></p>
    <p>Ваш логин: <?= $user_info['user_login']; ?></p>
    <p>Ваше имя: <?= $user_info['user_name']; ?></p>
    <p>Ваша фамилия: <?= $user_info['user_surname']; ?></p>
    <p>Ваши очки: <?= $user_info['user_score']; ?></p>
</div>