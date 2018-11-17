<?php

if (!empty($_POST)) {
    
    $hack_name = $_POST['hack_name'];
    $hack_desc = $_POST['hack_desc'];
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

}