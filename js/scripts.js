
/* Menu mobile */
let mobileBtn = document.querySelector('.mobile-btn');
let mobileContent = document.querySelector('.mobile-content');

mobileBtn.addEventListener('click',() =>{

    mobileContent.classList.toggle('visible');

}, false);