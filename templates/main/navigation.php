<header class="page__header header">
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/hackathons/">Хакатоны</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/teams/">Команды</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users/">Участники</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacts/">Контакты</a>
                </li>
                <li class="nav-item">
                    <?php if ($_SESSION['user_login'] && $_SESSION['user_password']) : ?>
                        <a class="nav-link" href="/users/<?= $_SESSION['user_login'] ?>/">Личный кабинет</a>
                    <?php else : ?>
                        <a class="nav-link" href="/users/auth/">Вход</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($_SESSION['user_login'] && $_SESSION['user_password']) : ?>
                        <a class="nav-link text-danger" href="/users/<?= $_SESSION['user_login'] ?>/logout/">Выход</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </nav>
</div>
</header>