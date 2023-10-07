const menuButton = document.querySelector('.menu-icon');
const mobileMenu = document.querySelector('.mobile-menu');
const closeButton = document.querySelector('.close-button');
const body = document.querySelector('body');

menuButton.addEventListener('click', function () {
    mobileMenu.style.left = '0'; // Открываем боковую панель
    body.classList.add('menu-open'); // Запрещаем прокрутку страницы
});

closeButton.addEventListener('click', function () {
    mobileMenu.style.left = '-250px'; // Закрываем боковую панель
    body.classList.remove('menu-open'); // Разрешаем прокрутку страницы
});
