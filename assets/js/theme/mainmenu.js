
$(document).ready(() => {
    
    $('.hamburger').on('click', () => {
        $('.main-menu-items').toggleClass('open');
    });
    $('.main-menu-close').on('click', () => {
        $('.main-menu-items').toggleClass('open');
    });
    $(document).on('escKey', () => {
        $('.main-menu-items').removeClass('open');
    })

});