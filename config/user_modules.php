<?php

$url = $_SERVER['REQUEST_URI'];

if ($cleanURL = stristr($url, '?', true)) {
    $path = explode('/', $cleanURL);
}
else {
    $path = explode('/', $url);
}

//var_dump($path);

if (count($path) < 5) {
    echo render('users/userpage/up-index.php');
}
else if (count($path) == 5) {
    $module = $path[3];

    if ($module) {
        echo render("users/userpage/up-$module.php");
    }
    else {
        echo render('users/userpage/up-index.php');
    }
}