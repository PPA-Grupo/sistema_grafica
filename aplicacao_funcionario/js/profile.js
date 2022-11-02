const modall = document.querySelector('.modal-container');

const toggle_menu = document.querySelector('.menu_perfil');

function menuDropDown(){
    toggle_menu.classList.toggle('active');
}

function openModal(){
    modall.classList.add('active');
}
function closseModal(){
    modall.classList.remove('active');
}