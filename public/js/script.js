var BUTTON = "#modal__button";
var BUTTON2 = "#modal__button2"; //кнопка
// var CLOSE; //кнопка закрытия
var CLOSE = "#close"; //блок поверх всего но ниже попапа для выхода из него по нажатию на область вне попапа
var CLOSE_FRAME = "#modal";
var newUrl = '?form=registration';
var main = '/';

console.log("вход в функцию");

$(document).ready(function () {
    $(BUTTON, BUTTON2).on("click", function () {
        history.pushState('', '', newUrl);
    });
    $(CLOSE).on("click", function () {
        window.location.pathname = "/";
    });
    $(BUTTON2).on("click", function () {
        $(BUTTON).trigger("click");
    });
});