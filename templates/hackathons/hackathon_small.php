<div>
    <p><?= check_status($params['hack_status']); ?></p>
    <h2><?= $params['hack_name']; ?></h2>
    <p>О хакатоне:<br><?= $params['hack_desc']; ?></p>
    <p>Дата проведения: <?= date_transform($params['hack_start_date']); ?> - <?= date_transform($params['hack_end_date']); ?></p>
    <p>Участники: <?= $params['hack_count']; ?>/<?= $params['hack_maxcount']; ?></p>
    <p>
        <a href="/hackathons/<?= $params['hack_id']; ?>">Подробнее</a>
    </p>
</div>