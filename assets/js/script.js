jQuery(document).ready(function () {

    //Hamburger menu
    jQuery('.hamburger').click(function () {
        jQuery('.hamburger').toggleClass('is-active');
        jQuery(this).parent().parent().parent().parent('.container').children('.menu__mobile').toggleClass('open');
    });

});