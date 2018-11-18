<?php
    session_unset();
    session_destroy();

    header("Refresh: 1; url=/");
?>
<div class="col-12">
    <p>Вы успешно вышли!</p>
</div