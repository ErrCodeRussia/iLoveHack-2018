<div class="modal modal__registration" id="modal">
    <div class="modal__block">
        <form class="modal__form col-12" action="/">
            <img class="modal__close mb-3 p-2" id="close" src="img/close.svg" alt="">
            <!-- Login -->
            <div class="d-flex mb-3">
                <label for="login" class="col-5">Логин</label>
                <input name="login" type="text" class="col-7 py-2" id="login">
            </div>
            <!-- Password -->
            <div class="d-flex mb-3">
                <label for="password" class="col-5">Пароль</label>
                <input name="password" type="text" class="col-7 py-2" id="password">
            </div>
            <!-- Buttons -->

            <a href="?registration=true" id="registration">Или зарегистрируйтесь</a>

            <div class="d-flex flex-column mt-5">
                <input type="submit" class="col-12 mb-3 py-2">
                <input type="reset" class="col-12 py-2">
            </div>
        </form>
    </div>
</div>