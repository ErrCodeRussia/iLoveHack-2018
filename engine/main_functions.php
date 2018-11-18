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

    var_dump($path);

}