<div class="container mt-3 py-4 px-5 plash">
<div class="row admin__header">
<div class="col-12 overflow">

<form method="POST" class="form form__auth" action="/users/auth/status/">
    <h4>Вход</h4>
    <hr class="form__line">
    <div class="form-group">
        <label for="login">Логин: </label>
        <input name="user_login" type="text" class="form-control" id="login" placeholder="Введите логин" required>
    </div>
    <div class="form-group">
        <label for="password">Пароль: </label>
        <input name="user_password" type="password" class="form-control" id="password" placeholder="Введите пароль" required>
    </div>

    <a class="badge badge-light" href="/users/reg/" id="registration">Или зарегистрируйтесь</a>
    <div class="d-flex mt-3 flex-wrap">
        <input name="auth_submit" type="submit" class="btn btn-outline-success" value="Отправить">
        <input type="reset" class="btn btn-outline-warning" value="Очистить форму">
        <a href="/" class="btn btn-outline-danger">Назад</a>
    </div>
</form>

</div>
</div>
</div>

