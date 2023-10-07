const menuButton = document.querySelector('.menu-icon');
const mobileMenu = document.querySelector('.mobile-menu');
const closeButton = document.querySelector('.close-button');

menuButton.addEventListener('click', function () {
    mobileMenu.style.left = '0'; // Открываем боковую панель
});

closeButton.addEventListener('click', function () {
    mobileMenu.style.left = '-250px'; // Закрываем боковую панель
});
// Получаем элемент заголовка
const header = document.querySelector('.transparent-header');

// Переменная для отслеживания текущей позиции прокрутки
let lastScrollTop = 0;

// Функция для обработки прокрутки страницы
function handleScroll() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Проверяем, двигается ли пользователь вниз или вверх
    if (scrollTop > lastScrollTop) {
        // Пользователь двигается вниз - скрываем заголовок
        header.classList.remove('top'); // Удаляем класс 'top'
    } else {
        // Пользователь двигается вверх - отображаем заголовок
        header.classList.add('top'); // Добавляем класс 'top'
    }

    // Если пользователь прокрутил вверх до верхней части страницы, убираем класс 'top' для прозрачности фона
    if (scrollTop === 0) {
        header.classList.remove('top');
    }

    lastScrollTop = scrollTop;
}

// Добавляем обработчик прокрутки
window.addEventListener('scroll', handleScroll);
