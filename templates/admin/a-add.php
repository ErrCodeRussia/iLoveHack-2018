<form action="/admin/add/status/" method="post">
    <input name="hack_name" type="text" placeholder="Название хакатона">
    <textarea name="hack_desc" cols="30" rows="10" placeholder="Краткое описание хакатона"></textarea>
    <input name="hack_maxcount" type="number" placeholder="max users">
    <input name="hack_start_date" type="date" placeholder="Дата начала">
    <input name="hack_end_date" type="date" placeholder="Дата окончания">
    <select name="product_category" class="addselect">
        <option value="not-started">Не начался</option>
        <option value="registration">Идёт регистрация</option>
        <option value="conducts">Проводится</option>
        <option value="completed">Завершён</option>
    </select>
    <input type="submit" class="addsubmit" value="Добавить хакатон">
</form>