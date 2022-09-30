const year = document.querySelector('#year')
const d = new Date();
let year2 = 2022;
let year3 = d.getFullYear();


if(year2 === year3){
    year.innerHTML = year2;
}else{
    year.innerHTML = year2 + ' - ' + year3;
}