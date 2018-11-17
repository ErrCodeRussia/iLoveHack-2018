<?php

    $connection = get_connection();

    $hackathons = mysqli_query($connection, "SELECT * FROM `hackathons`");

?>

<div class="container mt-3 py-4 px-5 plash">
    <div class="row">
        <div class="col-3">
            <a href="/admin/add/" class="btn btn-lg btn-primary mb-5">Добавить</a>
        </div>
    </div>
    <div class="row admin__header">
        <div class="col-12 overflow">
            <table class="table">
                <tr class="bold">
                    <td>ID</td>
                    <td>Название</td>
                    <td class="short-desc">Краткое описание</td>
                    <td>Участников сейчас</td>
                    <td>Участников максимально</td>
                    <td>Начало хакатона</td>
                    <td>Конец хакатона</td>
                    <td>Статус хакатона</td>
                    <td>Изменение</td>
                    <td>Удаление</td>
                </tr>
                <?php while ($hackathons_array = mysqli_fetch_array($hackathons)) : ?>
                    <tr>
                        <td><?= $hackathons_array['hack_id']; ?></td>
                        <td><?= $hackathons_array['hack_name']; ?></td>
                        <td class="short-desc"><?= $hackathons_array['hack_desc']; ?></td>
                        <td><?= $hackathons_array['hack_count']; ?></td>
                        <td><?= $hackathons_array['hack_maxcount']; ?></td>
                        <td><?= $hackathons_array['hack_start_date']; ?></td>
                        <td><?= $hackathons_array['hack_end_date']; ?></td>
                        <td><?= check_status($hackathons_array['hack_status']); ?></td>
                        <td><a href="/admin/edit/<?= $hackathons_array['hack_id']; ?>">Изменить</a></td>
                        <td><a href="">Удалить</a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>