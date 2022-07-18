//selectors
let header = document.querySelector('.header');
let hamMenu = document.querySelector('.ham-menu');

window.addEventListener('scroll',function(){
    let windowPositon = window.scrollY > 0;
    header.classList.toggle('active', windowPositon)

})

hamMenu.addEventListener('click', function(){
    header.classList.toggle('menu-open');
})