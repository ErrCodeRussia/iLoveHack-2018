<div class="container mt-3 py-4 px-5 plash">
<div class="row admin__header">
<div class="col-12 overflow">

<form method="POST" class="form form__reg" action="/users/reg/status/">
    <h4>Регистрация</h4>
    <hr class="form__line">
    <div class="form-group">
        <label for="user_login">Логин: </label>
        <input name="user_login" type="text" class="form-control" id="user_login" placeholder="Введите логин">
    </div>
    <div class="form-group">
        <label for="user_password">Пароль: </label>
        <input name="user_password" type="password" class="form-control" id="user_password" placeholder="Введите пароль">
    </div>
    <div class="form-group">
        <label for="user_name">Имя: </label>
        <input name="user_name" type="password" class="form-control" id="user_name" placeholder="Введите имя">
    </div>
    <div class="form-group">
        <label for="user_surname">Фамилия: </label>
        <input name="user_surname" type="password" class="form-control" id="user_surname" placeholder="Введите фамилию">
    </div>

    <a class="badge badge-light" href="/users/auth/" id="registration">Есть аккаунт? авторизируйтесь!</a>
    <div class="d-flex mt-3 flex-wrap">
        <input name="auth_submit" type="submit" class="btn btn-outline-success" value="Отправить">
        <input type="reset" class="btn btn-outline-warning" value="Очистить форму">
        <a href="/" class="btn btn-outline-danger">Назад</a>
    </div>
</form>

</div>
</div>
</div>


