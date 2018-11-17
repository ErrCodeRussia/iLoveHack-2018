<div class="container mt-3 py-4 px-5 plash">
<div class="row admin__header">
<div class="col-12 overflow">

<?php

if (!empty($_POST)) {
    
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

    $create_table_status = mysqli_query($connection, "CREATE TABLE $hack_name 
    (
        hack_id INT NOT NULL PRIMARY KEY,
        hack_teams TEXT,
        hack_scores TEXT
    );");
    
    if ($create_table_status == true) {
        $status = mysqli_query($connection, "INSERT INTO `hackathons` (`hack_id`, `hack_name`, `hack_desc`, `hack_full_desc`, `hack_count`, `hack_maxcount`, `hack_start_date`, `hack_end_date`, `hack_status`) VALUES (NULL, '$hack_name', '$hack_desc', '$hack_full_desc', '$hack_count', '$hack_maxcount', '$hack_start_date', '$hack_start_date', '$hack_status');");
    }

    $get_last_string = mysqli_query($connection, "SELECT * FROM `hackathons` ORDER BY `hack_id` DESC LIMIT 1");
    $last_string_array = mysqli_fetch_array($get_last_string);
    $last_index = $last_string_array['hack_id'];
    $status_new_table = mysqli_query($connection, "INSERT INTO `$hack_name` (`hack_id`, `hack_teams`, `hack_scores`) VALUES ('$last_index', NULL, NULL);");

    if ($status && $status_new_table) {
        echo "Хакатон успешно добавлен!";
        header("Refresh: 1; url=/admin/");
    }
    else {
        echo "Ошибка при добавлении хакатона!";
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