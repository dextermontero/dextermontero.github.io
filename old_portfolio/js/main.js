// Navbar mobile
const menuOption = document.querySelector('#menuOption');
const menuList = document.querySelector('#menuList');

menuOption.addEventListener('click', () => {
    if(menuList.classList.contains('hidden')){
        menuList.classList.remove('hidden');
    }else{
        menuList.classList.add('hidden');
    }
})


// Back to Top
let mybutton = document.getElementById('btn-back-to-top');
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = 'block';
    } else {
        mybutton.style.display = 'none';
    }
}
mybutton.addEventListener('click', backToTop);     

function backToTop() {
	$("html, body").animate({scrollTop: 0}, 1000);
}

// copyrights
var cyr = 2022;
const d = new Date();
let year = d.getFullYear();
if(cyr == year){
    document.getElementById('copyrights').innerHTML = "Copyright &copy; " + cyr + " | Alrights reserved.";
}else{
    document.getElementById('copyrights').innerHTML = "Copyright &copy; " + cyr + " - " + year +" |  All rights reserved.";
}

// scroll to div
$(".scrollto").click(function(){
    var pageId = $(this).attr("data-page");
    $("html, body").animate({ scrollTop: $("#"+pageId).offset()}, 1000);
});

// Show up Animation
window.addEventListener('load', () => {
	AOS.init({
		duration: 1000,
		easing: 'ease-in-out',
		once: false,
		mirror: false
	})
});

$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');

        if(value == "all") {
            $('.filter').show('1000');
        }else{
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
        }
    });

    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }

    $(this).addClass("active");  
})