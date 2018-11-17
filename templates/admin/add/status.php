<?php

if (!empty($_POST)) {
    
    $hack_name = $_POST['hack_name'];
    $hack_desc = $_POST['hack_desc'];
    $hack_count = 0;
    $hack_maxcount = $_POST['hack_maxcount'];
    $hack_start_date = $_POST['hack_start_date'];
    $hack_end_date = $_POST['hack_end_date'];
    switch($_POST['hack_status']) {
        case 'not-started':
            $hack_status = 0;
            break;
        case 'registration':
            $hack_status = 1;
            break;
        case 'conducts':
            $hack_status = 2;
            break;
        case 'completed':
            $hack_status = 3;
            break;
    }

    var_dump($hack_status);


}