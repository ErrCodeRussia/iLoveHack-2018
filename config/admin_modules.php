<?php

$url = $_SERVER['REQUEST_URI'];

if ($cleanURL = stristr($url, '?', true)) {
    $path = explode('/', $cleanURL);
}
else {
    $path = explode('/', $url);
}

//var_dump($path);

if (count($path) < 4) {

    echo render('admin/a-index.php');

}
else if (count($path) == 4) {
    $action = $path[2];
    $param[0] = $path[3];

    if ($action) {
        echo render('admin/a-' . $action . '.php', $param);
    }
    else {
        echo "Страницы не существует!";
    }
}
else {
    $module = $path[2];
    $action = $path[3];

    if ($module && $action) {
        echo render('admin/' . $module . '/' . $action . '.php');
    }
    else {
        echo "Страницы не существует!";
    }
}