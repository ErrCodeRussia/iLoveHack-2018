$('a[href="#top"], a[href="#about"], a[href="#services"], a[href="#portfolio"], a[href="#help"], a[href="#contacts"]').on('click', function () {
    $('#check').prop('checked', '');
});

$(function () {
    $("a[href^='#']").click(function () {
        let _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top - 100 + "px"});
        return false;
    });
});