<div class="container mt-3 py-4 px-5 plash">
    <div class="row admin__header">
        <div class="col-12 overflow">
            <form action="/admin/add/status/" method="post">
                <legend class="mb-4">Добавить хакатон</legend>
                <div class="form-group">
                    <label for="hack_name">Название хакатона</label>
                    <input name="hack_name" type="text" class="form-control" id="hack_name" placeholder="iLovehack-2018">
                </div>
                <div class="form-group">
                    <label for="short_description">Краткое описание</label>
                    <textarea class="form-control" name="hack_desc" id="short_description" rows="3" placeholder="Введите текст"></textarea>
                </div>
                <div class="form-group">
                    <label for="full_description">Полное описание</label>
                    <textarea class="form-control" name="hack_full_desc" id="full_description" rows="3" placeholder="Введите текст"></textarea>
                </div>
                <div class="form-group">
                    <label for="hack_maxcount">Максимальное количество участников</label>
                    <input name="hack_maxcount" type="text" class="form-control" id="hack_maxcount">
                </div>
                <div class="form-group">
                    <label for="hack_start_date">Дата начала хакатона</label>
                    <input name="hack_start_date" type="date" class="form-control" id="hack_start_date">
                </div>
                <div class="form-group">
                    <label for="hack_end_date">Дата конца хакатона</label>
                    <input name="hack_end_date" type="date" class="form-control" id="hachack_end_datek_name">
                </div>
                <div class="form-group">
                    <label for="status">Статус</label>
                    <select name="hack_status" id="status" class="form-control">
                        <option value="not-started">Не начался</option>
                        <option value="registration">Идёт регистрация</option>
                        <option value="conducts">Проводится</option>
                        <option value="completed">Завершён</option>
                    </select>
                </div>
                <a href="/admin/" class="btn btn-outline-danger">Отмена</a>
                <input class="btn btn-success ml-3" type="submit" value="Добавить хакатон">
            </form>
        </div>
    </div>
</div>