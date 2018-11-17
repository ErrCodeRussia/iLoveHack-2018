<div class="container mt-3 py-4 px-5 plash">
<div class="row admin__header">
<div class="col-12 overflow">

<?php

$url = $_SERVER['REQUEST_URI'];

if ($cleanURL = stristr($url, '?', true)) {
    $path = explode('/', $cleanURL);
}
else {
    $path = explode('/', $url);
}

if (!empty($_POST)) {
    
    $hack_id = $path[4];
    $hack_name = $_POST['hack_name'];
    $hack_desc = $_POST['hack_desc'];
    $hack_full_desc = $_POST['hack_full_desc'];
    $hack_count = 0;
    $hack_maxcount = $_POST['hack_maxcount'];
    $hack_start_date = $_POST['hack_start_date'];
    $hack_end_date = $_POST['hack_end_date'];
    if ($_POST['hack_status'] == 'not-started') {
        $hack_status = 0;
    }
    else if ($_POST['hack_status'] == 'registration') {
        $hack_status = 1;
    }
    else if ($_POST['hack_status'] == 'conducts') {
        $hack_status = 2;
    }
    else if ($_POST['hack_status'] == 'completed') {
        $hack_status = 3;
    }

    $connection = get_connection();
    
    $status = mysqli_query($connection, "UPDATE `hackathons` SET `hack_name` = '$hack_name', `hack_desc` = '$hack_desc', `hack_full_desc` = '$hack_full_desc', `hack_count` = '$hack_count', `hack_maxcount` = '$hack_maxcount', `hack_start_date` = '$hack_start_date', `hack_end_date` = '$hack_end_date', `hack_status` = '$hack_status' WHERE `hackathons`.`hack_id` LIKE $hack_id;");

    if ($status) {
        echo "Хакатон успешно изменён!";
        header("Refresh: 1; url=/admin/");
    }
    else {
        echo "Ошибка при изменении хакатона!";
        header("Refresh: 3; url=/admin/");
    }

}
else {
    echo "Ошибка: форма была пустая!";
}

?>

</div>
</div>
</div>