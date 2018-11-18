<div class="container mt-3 py-4 px-5 plash">
<div class="row admin__header">
<div class="col-12 overflow">

<form class="modal__form col-12" method="post" action="/users/auth/status/">
    <h4>Вход</h4>
    <img class="modal__close mb-3 p-2" id="close" src="img/close.svg" alt="">
    <div class="d-flex mb-3">
        <label for="login" class="col-5">Логин</label>
        <input name="user_login" type="text" class="col-7 py-2" id="login">
    </div>
    <div class="d-flex mb-3">
        <label for="password" class="col-5">Пароль</label>
        <input name="user_password" type="text" class="col-7 py-2" id="password">
    </div>

    <a href="/users/reg/" id="registration">Или зарегистрируйтесь</a>

    <div class="d-flex flex-column mt-5">
        <input type="submit" class="col-12 mb-3 py-2">
        <input type="reset" class="col-12 py-2">
    </div>
</form>

</div>
</div>
</div>