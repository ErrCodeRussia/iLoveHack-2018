<div class="container mt-3 py-4 px-5 plash">
<div class="row admin__header">
<div class="col-12 overflow">

<form class="modal__form col-12" action="/users/reg/">
    <h4>Регистрация</h4>
    <img class="modal__close mb-3 p-2" id="close" src="img/close.svg" alt="">
    <!-- Login -->
    <div class="d-flex mb-3">
        <label for="login" class="col-5">Логин</label>
        <input name="user_login" type="text" class="col-7 py-2" id="login">
    </div>
    <!-- Password -->
    <div class="d-flex mb-3">
        <label for="password" class="col-5">Пароль</label>
        <input name="user_password" type="text" class="col-7 py-2" id="password">
    </div>
    <div class="d-flex mb-3">
        <label for="name" class="col-5">Имя</label>
        <input name="user_name" type="text" class="col-7 py-2" id="name">
    </div>
    <div class="d-flex mb-3">
        <label for="surname" class="col-5">Фамилия</label>
        <input name="user_surname" type="text" class="col-7 py-2" id="surname">
    </div>
    <!-- Buttons -->

    <a class="mx-auto" href="/users/auth/" id="autorisation">Или авторизируйтесь</a>

    <div class="d-flex flex-column mt-5">
        <input type="submit" class="col-12 mb-3 py-2">
        <input type="reset" class="col-12 py-2">
    </div>
</form>

</div>
</div>
</div>