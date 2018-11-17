<div class="container mt-3 py-4 px-5 plash">
<div class="row admin__header">
<div class="col-12 overflow">

<?php

    $connection = get_connection();
    
    $hackathon_info = mysqli_query($connection, "SELECT * FROM `hackathons` WHERE `hack_id` LIKE $params[0]");
    $hackathon = mysqli_fetch_array($hackathon_info);
    $hackathon_name = $hackathon['hack_name'];

    $delete_table = mysqli_query($connection, "DROP TABLE `$hackathon_name`;");
    $delete = mysqli_query($connection, "DELETE FROM `hackathons` WHERE `hack_id` LIKE " . $params[0]);

    if ($delete && $delete_table) {
        echo "Удаление прошло успешно.";
        header("Refresh: 1; url=/admin/");
    }
    else {
        echo "Ошибка при удалении!";
        header("Refresh: 3; url=/admin/");
    }

?>

</div>
</div>
</div>