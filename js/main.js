/* $(window).change(function() {
    if ($(this). scrollTop() > 1) {
        $('.navbar').addClass('bg-gray-300');
    } else {
        $('.navbar').removeClass('bg-gray-300');
    }
});

$(window).scroll(function(){
    if ($(this). scrollTop() > 1) {
        $('.navbar').addClass('bg-gray-300');
    } else {
        $('.navbar').removeClass('bg-gray-300');
    }
}); */

const year = document.querySelector('#year')
const d = new Date();
let year2 = 2022;
let year3 = d.getFullYear();


if(year2 === year3){
    year.innerHTML = year2;
}else{
    year.innerHTML = year2 + ' - ' + year3;
}