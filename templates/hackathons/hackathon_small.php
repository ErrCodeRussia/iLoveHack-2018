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

<div class="row hackathones__list">
    <div class="col-12">
        <div class="hackathones__item">
            <div class="hackathones__maininfo">
                <div class="d-flex flex-sm-column flex-sm-row justify-content-between col-12">
                    <div class="hackathones__header col-12 p-0">
                        <h2><?= $params['hack_name']; ?></h2>
                        <div class="hackathones__status col-12 p-0 mt-3">
                            <p class="hackathones__placeCount">Участники: <?= $params['hack_count']; ?>/<?= $params['hack_maxcount']; ?></p>
                            <?= check_status($params['hack_status']); ?>
                            <span class="hackathones__statusBlack" data-toggle="tooltip" data-placement="top" title="Не начался"></span>
                            <span class="hackathones__statusYellow" data-toggle="tooltip" data-placement="top" title="Идет регистрация"></span>
                            <span class="hackathones__statusGreen" data-toggle="tooltip" data-placement="top" title="Проводится"></span>
                            <span class="hackathones__statusRed" data-toggle="tooltip" data-placement="top" title="Завершился"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hackathones__shortdiscription col-12 my-5">
                <p><?= $params['hack_desc']; ?></p>
            </div>
            <div class="hackathones__dates col-12">
                <p><strong>Дата проведения: <?= date_transform($params['hack_start_date']); ?> - <?= date_transform($params['hack_end_date']); ?></strong></p>
                <a href="">Подробнее...</a>
            </div>
        </div>
    </div>
</div>