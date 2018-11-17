var BUTTON = "#modal__button";
var BUTTON2 = "#modal__button2"; //кнопка
// var CLOSE; //кнопка закрытия
var CLOSE = "#close"; //блок поверх всего но ниже попапа для выхода из него по нажатию на область вне попапа
var CLOSE_FRAME = "#modal";

console.log("вход в функцию");

$(document).ready(function(){
    console.log("вход в ready функцию");
$(BUTTON).on("click", function() {
    console.log("вход в click функцию");
$(CLOSE_FRAME).css("display", "flex");
});
$(CLOSE).on("click", function() {
$(CLOSE_FRAME).css("display", "none");
});
$(BUTTON2).on("click", function() {
$(BUTTON).trigger("click");
});
});