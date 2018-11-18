<?php

function render($template, $params = []) {
    extract($params);

    if(file_exists(TEMPLATES . $template )) {
        ob_start();

        include TEMPLATES . $template;

        $content = ob_get_clean();

        return $content;
    } else {
        //echo TEMPLATES . $template;
        echo "Шаблона страницы не существует!";
        exit();
    }
}

function get_connection() {
    $connection;
    $config;

    static $connection = null;

    if(!empty($connection)) {
        return $connection;
    }

    $config = require CONFIG . "db_config.php";

    $connection = mysqli_connect(
        $config['server'],
        $config['user'],
        $config['password'],
        $config['database']
    );
    mysqli_query($connection, "set NAMES utf8");

    return $connection;
}

function get_title() {
    
    $url = $_SERVER['REQUEST_URI'];

    if ($cleanURL = stristr($url, '?', true)) {
        $path = explode('/', $cleanURL);
    } else {
        $path = explode('/', $url);
    }

    //var_dump($path);

    if (count($path) < 3) {
        return 'iLovehack - главная страница';
    }
    else if (count($path) == 3) {
        switch ($path[1]) {
            case 'hackathons':
                echo 'Список хакатонов';
                break;
            case 'teams':
                echo 'Список команд';
                break;
            case 'users':
                echo 'Список участников';
                break;
            case 'contacts':
                echo 'Контакты';
                break;
        }
    }
    else if (count($path) > 3 && $path[1] == 'users') {
        if (count($path[3]) == '') {
            return "Профиль пользователя $path[2]";
        }
        else {
            switch ($path[3]) {
                case 'myhackathons':
                    return "Хакатоны пользователя $path[2]";
                case 'myteam':
                    return "Команда пользователя $path[2]";
                case 'settings':
                    return "Настройки пользователя $path[2]";
            }
        }
    }

}