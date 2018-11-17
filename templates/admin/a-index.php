<?php

    $connection = get_connection();

    $hackathons = mysqli_query($connection, "SELECT * FROM `hackathons`");

?>

<div>
    <a href="/admin/add/">Добавить хакатон</a>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Краткое описание</th>
        <th>Текущее количество участников</th>
        <th>Максимальное количество участников</th>
        <th>Начало хакатона</th>
        <th>Конец хакатона</th>
        <th>Статус хакатона</th>
        <th></th>
        <th></th>
    </tr>

    <?php while ($hackathons_array = mysqli_fetch_array($hackathons)) : ?>
        <tr>
            <td><?= $hackathons_array['hack_id']; ?></td>
            <td><?= $hackathons_array['hack_name']; ?></td>
            <td><?= $hackathons_array['hack_desc']; ?></td>
            <td><?= $hackathons_array['hack_count']; ?></td>
            <td><?= $hackathons_array['hack_maxcount']; ?></td>
            <td><?= $hackathons_array['hack_start_date']; ?></td>
            <td><?= $hackathons_array['hack_end_date']; ?></td>
            <td><?= $hackathons_array['hack_status']; ?></td>
            <td><a href="">Изменить</a></td>
            <td><a href="">Удалить</a></td>
        </tr>
    <?php endwhile; ?>
</table>