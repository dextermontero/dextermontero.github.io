const navbar = document.querySelector('#navbar');
const menuOpt = document.querySelector('#menuOption');
const menuList = document.querySelector('#menuList');

menuOpt.addEventListener('click', () => {
    if(menuList.classList.contains('hidden')){
        menuList.classList.remove('hidden');
        navbar.classList.add('');
    }else{
        menuList.classList.add('hidden');
    }
})




