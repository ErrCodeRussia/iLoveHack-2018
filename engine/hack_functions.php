<?php

function show_hackathons() {
    
    $connection = get_connection();

    $hackathons = mysqli_query($connection, "SELECT * FROM `hackathons`");
    
    if ($hackathons) {
        while ($hackathon = mysqli_fetch_assoc($hackathons)) {
            echo render('hackathons/hackathon_small.php', $hackathon);
        }
    }
    else {
        $error = 'Ошибка при получении списка хакатонов!';
        return $error;
    }

}

function show_hackathon_page() {
    
    $url = $_SERVER['REQUEST_URI'];

    if ($cleanURL = stristr($url, '?', true)) {
        $path = explode('/', $cleanURL);
    } else {
        $path = explode('/', $url);
    }

    $hackathon_id = $path[2];

    $connection = get_connection();
    $hackathon_info = mysqli_query($connection, "SELECT * FROM `hackathons` WHERE `hack_id` LIKE $hackathon_id");
    $hackathon = mysqli_fetch_array($hackathon_info);

    echo render('hackathons/hackathon_full.php', $hackathon);

}

function check_status($status) {
    switch ($status) {
        case 0:
            return 'не начался';
        case 1:
            return 'идёт регистрация';
        case 2:
            return 'проводится';
        case 3:
            return 'завершился';
    }
}

function date_transform($mysqldate) {
    
    $date = explode('-', $mysqldate);

    $day = $date[2];
    $month = $date[1];
    $year = $date[0];

    $new_date = $day . '.' . $month . '.' . $year;

    return $new_date;

}