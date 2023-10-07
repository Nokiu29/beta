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
// Выбираем элемент заголовка
const header = document.querySelector('.transparent-header');

let lastScrollPosition = 0;

// Обработчик события прокрутки
window.addEventListener('scroll', function () {
    // Текущая позиция прокрутки страницы
    const currentScrollPosition = window.scrollY;

    // Если текущая позиция прокрутки больше предыдущей, это значит, что страница прокручивается вниз
    if (currentScrollPosition > lastScrollPosition) {
        // Скрываем заголовок
        header.classList.add('hide');
    } else {
        // Показываем заголовок
        header.classList.remove('hide');
    }

    // Обновляем позицию прокрутки
    lastScrollPosition = currentScrollPosition;
});
