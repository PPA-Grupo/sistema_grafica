const modal = document.querySelector('.modal-container');

const toggleMenu = document.querySelector('.menu');

function menuDropDown(){
    toggleMenu.classList.toggle('active');
}

function openModal(){
    modal.classList.add('active');
}
function closseModal(){
    modal.classList.remove('active');
}