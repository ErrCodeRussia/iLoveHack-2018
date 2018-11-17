<section class="section hackathones">
    <div class="container">
        <div class="row hackathones__heading">
            <div class="col-12">
                <h2 class="hackathones__text">Список хакатонов:</h2>
                <hr class="hackathones__line line">
            </div>
        </div>
        <?= show_hackathons(); ?>
    </div>
</section>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>