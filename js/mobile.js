showMobileMenu();
hideMobileMenu();

function showMobileMenu() {
    $('.material-icons').click(function() {
        if($('.mobile_nav_menu').css('display') == 'block') {
            $('.mobile_nav_menu').css('display', 'none');
        } else {
            $('.mobile_nav_menu').css('display', 'block');
        } 
    });
}

function hideMobileMenu() {
    $('.mobile_nav_menu ul li a').click(function() {
        $('.mobile_nav_menu').css('display', 'none');
    });
}