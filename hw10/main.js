$(document).ready(function() {
    //Clone menu to footer
    $('.main-menu .navigation-menu').clone().appendTo($('.footer-menu'));

    //PopUp Show
    $(document).on('click', '.open', function () {
        $("#modal").show();
    });

    //PopUpHide
    $(document).on('click', '.close', function () {
        $("#modal").hide();
    });

    // Accordion
    $(document).on('click', '#accordion h3', function () {
        let descriptionElement = $(this).next();
        if ($(this).hasClass('opened') === false) {
         hideDescription();
         descriptionElement.slideDown(500);
        $(this).addClass('opened');
        }
    });
});

function hideDescription(){
    $( "#accordion .description" ).each(function( index ) {
        $(this).slideUp(500);
        $(this).prev().removeClass('opened');
    });
}
