<section class="section full__hackathon">
    <div class="container">
        <div class="row d-flex align-items-center mb-2">
            <div class="col-12 text-left full__hackathon__heading d-flex align-items-center">
                <?php if ($params['hack_status'] == 0) : ?>
                    <span class="full__hackathon__statusBlack" data-toggle="tooltip" data-placement="top" title="Не начался"></span>
                <?php elseif ($params['hack_status'] == 1) : ?>
                    <span class="full__hackathon__statusYellow" data-toggle="tooltip" data-placement="top" title="Идёт регистрация"></span>
                <?php elseif ($params['hack_status'] == 2) : ?>
                    <span class="full__hackathon__statusGreen" data-toggle="tooltip" data-placement="top" title="Проводится"></span>
                <?php elseif ($params['hack_status'] == 3) : ?>
                    <span class="full__hackathon__statusRed" data-toggle="tooltip" data-placement="top" title="Завершился"></span>
                <?php endif; ?>
                <h1 class=""><?= $params['hack_name']; ?></h1>
            </div>
        </div>
        <div class="row full__hackathon__shortdiscription mb-2">
            <div class="col-12">
                <?= $params['hack_desc']; ?>
            </div>
        </div>
        <div class="row full__hackathon__fulldiscription mb-2">
            <div class="col-12">
                <?= $params['hack_full_desc']; ?>
            </div>
        </div>
        <!-- IF BEGIN -->
        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <input type="button" class="btn btn-dark full__hackathon__button" value="Регистрация">
                <!-- Регистрация -->
                <label for="file"><button class="btn btn-dark full__hackathon__button">Загрузить файлы</button></label>
                <input id="file" type="upload" hidden>
            </div>
        </div>
        <!-- IF END -->
    </div>
</section>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>