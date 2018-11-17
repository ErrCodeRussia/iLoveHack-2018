var BUTTON; //кнопка
var CLOSE; //кнопка закрытия
var CLOSE_FRAME; //блок поверх всего но ниже попапа для выхода из него по  нажатию на область вне попапа
var CONST_BLOCK; //блок попапа
$(BUTTON).on("click", function() {
    $(CONST_BLOCK).css("display", "block");
});
$(CLOSE, CLOSE_FRAME).on("click", function() {
    $(CONST_BLOCK).css("display", "none");
})