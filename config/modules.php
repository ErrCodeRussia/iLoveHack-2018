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
    $moduleName = empty($path[1]) ? 'main' : $path[1];
    $action = empty($path[2]) ? 'index' : 'show';

    if ($path[1] == 'hackathons') {
        $moduleFilename = MODULES . 'hackathons.php';
        $function = $moduleName . '_' . $action;
    }
    else if ($path[1] == 'users') {
        $moduleFilename = MODULES . 'users.php';
        $function = $moduleName . '_' . $action;
    }
    else if ($path[1] == 'admin') {
        $moduleFilename = MODULES . 'admin.php';
        $function = $moduleName . '_' . $action;
    }
    else {
        $moduleFilename = MODULES . 'main.php';
        $function = $moduleName . '_' . $action;
    }

    var_dump($moduleFilename);
    var_dump($function);
}
else {
    if ($path[1] == 'users') {
        if (($path[2] == 'auth' || $path[2] == 'reg') && $path[3] == 'status') {
            $module = $path[2];
            $action = $path[3];

            if ($module && $action) {
                echo render('users/' . $module . '/' . $action . '.php');
            }
            else {
                echo "Страницы не существует!";
            }
        }
        else {
            $moduleName = $path[1];
            
            if (empty($path[2])) {
                $action = 'index';
            }
            else if ($path[2] == 'reg') {
                $action = 'reg';
            }
            else if ($path[2] == 'auth') {
                $action = 'auth';
            }
            else {
                $action = 'userpage';
            }

            $moduleFilename = MODULES . 'users.php';
            $function = $moduleName . '_' . $action;
        }
    }
    else if ($path[1] == 'admin') {
        $moduleName = $path[1];
        $action = 'index';
        $moduleFilename = MODULES . 'admin.php';
        $function = $moduleName . '_' . $action;
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
        echo render('main/navigation.php');
        echo render('404.php');
    }
}
else {
    echo render('main/navigation.php');
    echo render('404.php');
}