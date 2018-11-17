<?php

    $url = $_SERVER['REQUEST_URI'];

    if ($cleanURL = stristr($url, '?', true)) {
        $path = explode('/', $cleanURL);
    }
    else {
        $path = explode('/', $url);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../engine/app.php' ?>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <?php if ($path[1] == 'admin') : ?>
        <link rel="stylesheet" href="/css/admin.css">
        <script src="/js/formReset.js"></script>
    <?php else if (!$path[1]) : ?>
        <link rel="stylesheet" href="/css/style.css"> 
    <?php else : ?>
        <link rel="stylesheet" href="/css/all.css">
    <?php endif; ?>
    
    
    
    <script src="/js/script.js"></script>

    <title>iLovehack</title>
</head>

<body class="page">
    <?php require_once '../config/modules.php' ?>
</body>

</html>