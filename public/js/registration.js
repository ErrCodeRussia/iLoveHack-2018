$(document).ready(function () {
    console.log("вход в ready функцию");
    $('#registration').on("click", function () {
        console.log("вход в click функцию");
        $(BUTTON).trigger("click");
    });
});