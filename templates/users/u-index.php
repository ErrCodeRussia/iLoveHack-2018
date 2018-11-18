<section class="section user user__section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 offset-md-0 text-left mb-3 mb-md-0 d-flex flex-column">
                <img class="user__avatar" src="" alt="">
                <h3>Имя фамилия</h3>
                <h4>Логин</h4>
            </div>
            <div class="col-12 col-md-7 offset-md-0 user__statistic text-left">
                <ul class="nav nav-pills nav-fill mb-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="/users/">Профиль</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Мои хакатоны</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Моя команда</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Настройки</a>
                    </li>
                </ul>
                <?php require_once '../config/user_modules.php' ?>
            </div>
        </div>
    </div>
</section>