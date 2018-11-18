<?php

$url = $_SERVER['REQUEST_URI'];

if ($cleanURL = stristr($url, '?', true)) {
    $path = explode('/', $cleanURL);
}
else {
    $path = explode('/', $url);
}

$user_login = $path[2];

$connection = get_connection();

$get_users = mysqli_query($connection, "SELECT * FROM `users` WHERE `user_login` LIKE '$user_login'");
$user = mysqli_fetch_array($get_users);

if ($user['user_picture'] == '') {
    $user_avatar = '/img/user_secret_avatar.svg';
    $padding = 'p-2';
}
else {
    $user_avatar = $user['user_picture'];
    $padding = '';
}



switch ($path[3]) {
    case 'myhackathons':
        $status_prof = '';
        $status_hack = 'active';
        $status_team = '';
        $status_sett = '';
    case 'myteam':
        $status_prof = '';
        $status_hack = '';
        $status_team = 'active';
        $status_sett = '';
    case 'settings':
        $status_prof = '';
        $status_hack = '';
        $status_team = '';
        $status_sett = 'active';
    case '': 
        $status_prof = 'active';
        $status_hack = '';
        $status_team = '';
        $status_sett = '';
}

?>

<section class="section user user__section mt-1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 offset-md-0 text-left mb-3 mb-md-0 d-flex flex-column">
                <img class="user__avatar border <?= $padding; ?>" src="<?= $user_avatar; ?>" alt="У вас нет аватарки!">
                <h3 class="mt-3 ml-2"><?= $user['user_name']; ?> <?= $user['user_surname']; ?></h3>
                <h4 class="ml-2">@<?= $user['user_login']; ?></h4>
            </div>
            <div class="col-12 col-md-7 offset-md-0 user__statistic text-left">
                <ul class="nav nav-pills nav-fill mb-5">
                    <li class="nav-item">
                        <a class="nav-link <?= $status_prof; ?>" href="/users/<?= $user_login; ?>/">Профиль</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $status_hack; ?>" href="/users/<?= $user_login; ?>/myhackathons/">Мои хакатоны</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $status_team; ?>" href="/users/<?= $user_login; ?>/myteam/">Моя команда</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $status_sett; ?>" href="/users/<?= $user_login; ?>/settings/">Настройки</a>
                    </li>
                </ul>
                <?php require_once '../config/user_modules.php' ?>
            </div>
        </div>
    </div>
</section>