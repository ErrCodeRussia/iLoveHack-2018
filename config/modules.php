<?php

$url;
$cleanURL;
$path;
$moduleName;
$action;
$moduleFilename;
$function;

$url = $_SERVER['REQUEST_URI'];

if ($cleanURL = stristr($url, '?', true)) {
    $path = explode('/', $cleanURL);
}
else {
    $path = explode('/', $url);
}

var_dump($path);

if (count($path) < 4) {
    $moduleName = empty($path[1]) ? 'main' : $path[1];
    $action = empty($path[2]) ? 'index' : $path[2];

    if ($path[1] == 'hackathons') {
        $moduleFilename = MODULES . 'hackathons.php';
        $function = $moduleName . '_' . $action;
    }
    else if ($path[1] == 'users') {
        $moduleFilename = MODULES . 'users.php';
        $function = $moduleName . '_' . $action;
    }
    else {
        $moduleFilename = MODULES . 'main.php';
        $function = $moduleName . '_' . $action;
    }
}
else {
    if ($path[1] == 'users') {
        $moduleName = $path[1];
        $action = empty($path[2]) ? 'index' : $path[2];
    }
    else {
        $module = empty($path[1]) ? 'main' : $path[1];
        $moduleName = empty($path[2]) ? 'main' : $path[2];
        $action = empty($path[3]) ? 'index' : $path[3];

        $moduleFilename = MODULES . $module . '.php';
        $function = $module . '_' . $moduleName . '_' . $action;
    }
}

if (file_exists($moduleFilename)) {
    require_once ($moduleFilename);

    if(function_exists($function)) {
        $function();
    }
    else {
        echo render('navigation.php');
        echo render('404.php');
    }
}
else {
    echo render('navigation.php');
    echo render('404.php');
}