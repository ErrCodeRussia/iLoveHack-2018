<div class="container mt-3 py-4 px-5 plash">
<div class="row admin__header">
<div class="col-12 overflow">

<?php

    $connection = get_connection();
    $delete = mysqli_query($connection, "DELETE FROM `hackathons` WHERE `hack_id` LIKE " . $params[0]);

    if ($delete == true) {
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