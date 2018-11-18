<div class="d-flex flex-column data">
    <h3 class="data__heading">Мои настройки</h3>
    <form method="POST" class="form form__reg" action="/users/<?= $_SESSION['user_login']; ?>/updatename/">
        <div class="form-group">
            <label for="user_name">Имя: </label>
            <input name="user_name" type="text" class="form-control" id="user_name" placeholder="Введите имя" required>
        </div>
        <div class="form-group">
            <label for="user_surname">Фамилия: </label>
            <input name="user_surname" type="text" class="form-control" id="user_surname" placeholder="Введите фамилию" required>
        </div>
        <input name="cange_submit" type="submit" class="m-0 mb-3 btn btn-outline-success" value="Отправить">
    </form>
    <form method="POST" class="form form__reg" action="/users/<?= $_SESSION['user_login']; ?>/updatepass/">
        <div class="form-group">
            <label for="user_oldpassword">Старый пароль: </label>
            <input name="user_old_pass" type="text" class="form-control" id="user_oldpassword" placeholder="Введите старый пароль" required>
        </div>
        <div class="form-group">
            <label for="user_newpassword">Новый пароль: </label>
            <input name="user_new_pass" type="password" class="form-control" id="user_newpassword" placeholder="Введите новый пароль" required>
        </div>
        <input name="change_submit" type="submit" class="m-0 mb-3 btn btn-outline-success" value="Отправить">
    </form>
</div>




