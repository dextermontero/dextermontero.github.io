$(window).change(function() {
    if ($(this). scrollTop() > 1) {
        $('#navbar').addClass('bg-gray-300');
    } else {
        $('#navbar').removeClass('bg-gray-300');
    }
});

$(window).scroll(function(){
    if ($(this). scrollTop() > 1) {
        $('#navbar').addClass('bg-gray-300');
    } else {
        $('#navbar').removeClass('bg-gray-300');
    }
});

/* window.addEventListener('DOMContentLoaded', event => {
    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('.nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        navbarToggler.click();
    });

}); */