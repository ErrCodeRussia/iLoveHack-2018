<?php

    $url = $_SERVER['REQUEST_URI'];

    if ($cleanURL = stristr($url, '?', true)) {
        $path = explode('/', $cleanURL);
    }
    else {
        $path = explode('/', $url);
    }

    $connection = get_connection();
    $hackathon_id = $path[3];
    $get_hackathon = mysqli_query($connection, "SELECT * FROM `hackathons` WHERE `hack_id` LIKE '" . $hackathon_id . "';");
    $hackathon = mysqli_fetch_array($get_hackathon);
?>

<div class="container mt-3 py-4 px-5 plash">
    <div class="row admin__header">
        <div class="col-12 overflow">
            <form action="/admin/edit/status/<?= $hackathon_id ?>" method="post" id="admin_form">
                <legend class="mb-4">Изменить хакатон</legend>
                <div class="form-group">
                    <label for="hack_name">Название хакатона</label>
                    <input name="hack_name" type="text" class="form-control" value="<?= $hackathon['hack_name'] ?>" id="hack_name" placeholder="Максимум 100 символов" required pattern="[0-9A-Za-z_]{1,100}">
                </div>
                <div class="form-group">
                    <label for="short_description">Краткое описание</label>
                    <textarea class="form-control" name="hack_desc" id="short_description" rows="3" placeholder="Введите текст" required><?= $hackathon['hack_desc'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="full_description">Полное описание</label>
                    <textarea class="form-control" name="hack_full_desc" id="full_description" rows="3" placeholder="Введите текст" required><?= $hackathon['hack_full_desc'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="hack_maxcount">Максимальное количество участников</label>
                    <input name="hack_maxcount" type="text" value="<?= $hackathon['hack_maxcount'] ?>" class="form-control" id="hack_maxcount" required>
                </div>
                <div class="form-group">
                    <label for="hack_start_date">Дата начала хакатона</label>
                    <input name="hack_start_date" type="date" value="<?= $hackathon['hack_start_date'] ?>" class="form-control" id="hack_start_date" required>
                </div>
                <div class="form-group">
                    <label for="hack_end_date">Дата конца хакатона</label>
                    <input name="hack_end_date" type="date" value="<?= $hackathon['hack_end_date'] ?>" class="form-control" id="hachack_end_datek_name" required>
                </div>
                <div class="form-group">
                    <label for="status">Статус</label>
                    <select name="hack_status" id="status" class="form-control" required>
                        <option value="not-started">Не начался</option>
                        <option value="registration">Идёт регистрация</option>
                        <option value="conducts">Проводится</option>
                        <option value="completed">Завершён</option>
                    </select>
                </div>
                <a href="/admin/" class="btn btn-outline-danger">Отмена</a>
                <span class="btn btn-outline-warning ml-3" id="reset">Очистить форму</span>
                <input class="btn btn-success ml-3" type="submit" value="Сохранить хакатон">
            </form>
        </div>
    </div>
</div>