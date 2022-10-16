const menu_size = '18rem';

let open = true;

document.querySelector('#btnMenu').addEventListener('click', e => {
    open = !open;
    toggleMenu();
})

document.querySelector('#btnClose').addEventListener('click', e => {
    open = false;
    toggleMenu();
})

document.querySelector('#iconProfile').addEventListener('click', e=>{
    drowpDownIcon();
})

function toggleMenu() {
    if (open) {
        document.querySelector('#menu').style.marginLeft = 0;
        return;
    }

    document.querySelector('#menu').style.marginLeft = `-${menu_size}`;
}
