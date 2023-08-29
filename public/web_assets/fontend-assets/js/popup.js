$(document).ready(function(){

    setTimeout(openPopup, 700);
    $("#modal-open-button").click(function(e) {
        console.log('$("#modal-open-button").click');
        openPopup();
    });
    $("#modal-close-button").click(function(e) {
        console.log('$("#modal-close-button").click');
        closePopup();
    });
    $("#overlay-bg").click(function(e) {
        console.log('$("#overlay-bg").click');
        closePopup();
    });
    $(window).resize(function(){
        updatePopup();
    });
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
});
function openPopup(){
    $("#modal-open-button").prop("disabled", true);
    $("#popup_content").fadeIn();
    $("#overlay_bg").fadeIn();
    updatePopup();
}
function closePopup(){
    $("#modal-open-button").prop("disabled", false);
    $("#modal-open-button").fadeIn();
    $("#popup_content").fadeOut();
    $("#overlay_bg").fadeOut();
}
function updatePopup(){
    var $popupContent = $("#popup_content");
    // http://api.jquery.com/height/
    // http://api.jquery.com/outerheight/
    //var top = $(window).height() / 2 - $popupContent.outerHeight() / 2; // Center vertical
    var top = "300px"; // Fixed offset
    // http://api.jquery.com/width/
    //  http://api.jquery.com/outerWidth/
    var left = ($(window).width() - $popupContent.outerWidth()) / 2; // Center horizontal
    $popupContent.css({
        'top' : top,
        'left' : left
    });
}
