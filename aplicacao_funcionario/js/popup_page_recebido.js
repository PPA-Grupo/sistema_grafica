const button = document.querySelector('#btn_negar');
const popup = document.querySelector('.div_popup');

button.addEventListener('click', ()=> {
   popup.style.display = 'block';
})

popup.addEventListener('click', event => {
   const offPopup = event.target.classList[0];
   const classNames = ['popup_close', 'div_popup', 'popup_button'];
   // Verificando se algum dos paramtros para fechar o popup está verdadeiro
   const shouldClosePopup = classNames.some(className => className === offPopup);

   if (shouldClosePopup) {
      popup.style.display = 'none';
   }
})