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
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
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

    $('#download_cv').click(function(e){
        e.preventDefault();
        alert('Download CV is under development');
    })
    $('#filter_btn').click(function(e){
        e.preventDefault();
        alert('Filtering is under development');
    })
})