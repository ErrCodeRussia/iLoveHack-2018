<div class="row hackathones__list mb-3">
    <div class="col-12">
        <div class="hackathones__item">
            <div class="hackathones__maininfo">
                <div class="d-flex flex-sm-column flex-sm-row justify-content-between col-12">
                    <div class="hackathones__header col-12 p-0">
                        <h2><?= $params['hack_name']; ?></h2>
                        <div class="hackathones__status col-12 p-0 mt-3">
                            <p class="hackathones__placeCount">Участники: <?= $params['hack_count']; ?>/<?= $params['hack_maxcount']; ?></p>
                            <?php if ($params['hack_status'] == 0) : ?>
                                <span class="hackathones__statusBlack" data-toggle="tooltip" data-placement="top" title="Не начался"></span>
                            <?php elseif ($params['hack_status'] == 1) : ?>
                                <span class="hackathones__statusYellow" data-toggle="tooltip" data-placement="top" title="Идет регистрация"></span>
                            <?php elseif ($params['hack_status'] == 2) : ?>
                                <span class="hackathones__statusGreen" data-toggle="tooltip" data-placement="top" title="Проводится"></span>
                            <?php elseif ($params['hack_status'] == 3) : ?>
                                <span class="hackathones__statusRed" data-toggle="tooltip" data-placement="top" title="Завершился"></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hackathones__shortdiscription col-12 my-5">
                <p><?= $params['hack_desc']; ?></p>
            </div>
            <div class="hackathones__dates col-12">
                <p><strong>Дата проведения: <?= date_transform($params['hack_start_date']); ?> - <?= date_transform($params['hack_end_date']); ?></strong></p>
                <a href="/hackathons/<?= $params['hack_id']; ?>">Подробнее...</a>
            </div>
        </div>
    </div>
</div>