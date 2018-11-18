<?php

    $connection = get_connection();

    $users = mysqli_query($connection, "SELECT * FROM `users`");

?>

<div class="container">
    <div class="row mt-5">

        <div class="col-12 table-responsive-sm overflow-auto">

            <table class="table table-dark">
                <caption class="table__heading">Список пользователей: </caption>
                <thead>
                    <tr>
                        <th scope="col">Логин</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Очки</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($users_array = mysqli_fetch_array($users)) : ?>
                        <tr>
                            <th><?= $users_array['user_login']; ?></th>
                            <td><?= $users_array['user_name']; ?></td>
                            <td><?= $users_array['user_surname']; ?></td>
                            <td><?= $users_array['user_score']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>